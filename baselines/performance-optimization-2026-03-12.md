# Performance Optimization Results — 2026-03-12

## Summary

Mobile Lighthouse performance score improved from **48 → 72** (+24 points).

## Before vs After

| Metric | Before | After | Change |
|--------|--------|-------|--------|
| **Performance** | 48 | **72** | **+24** |
| FCP | 7.1s | 3.0s | -4.1s |
| LCP | 9.5s | 5.6s | -3.9s |
| TBT | 210ms | 35ms | -175ms |
| CLS | 0.147 | 0 | fixed |
| SI | 8.5s | 4.8s | -3.7s |

## Changes Made (in order)

### PR #1 — Preload hero image + preconnect Google Fonts
- Hero `background-image` invisible to preload scanner — added `<link rel="preload">`
- Added `preconnect` hints for Google Fonts domains
- Removed Asgaros Forum CSS on non-forum pages (3 render-blocking stylesheets)
- Moved jQuery to footer

### PR #2 — Enable HTTP/2 on Nginx
- Added `http2` to Nginx `listen` directive
- LCP dropped from 16.5s → 10.5s (HTTP/2 multiplexing eliminated connection bottleneck)

### PR #3 — Self-host CDN assets (REVERTED)
- Tried self-hosting Bootstrap grid CSS and Google Fonts
- LCP regressed 10.5s → 14.9s — CDN edge caching was more beneficial
- Closed and reverted

### PR #4 — Lazy loading + WebP images
- Added `loading="lazy"` to below-fold images in templates
- Server-side: installed cwebp, converted all 3,066 images to WebP (q95)
- Nginx: added WebP map + `try_files` for transparent serving
- Total image weight: 2,380KB → 354KB

### PR #6 — Replace Segment with direct GA4 gtag.js
- Removed Segment analytics snippet (loaded chain: Segment 58KB → GTM 119KB → gtag 167KB = 344KB)
- Replaced with direct GA4 gtag.js (~28KB) using same tracking ID
- Saved ~316KB of JavaScript (22% of page weight)

### PR #7 — Replace FontAwesome with inline SVGs
- Site used only 8 icons but loaded full FontAwesome kit (332KB: 3 font files + JS + CSS)
- Replaced all icons with inline SVGs (~2KB total)
- Icons: envelope, angle-up/down/left/right, facebook, linkedin-in, x-twitter, building, hotel, circle-user
- Saved ~330KB (23% of page weight)

## Server-Side Changes (not in git)

- **HTTP/2** enabled in Nginx
- **WebP** conversion: cwebp installed, all uploads converted at q95 quality
- **Nginx WebP map**: transparent `.webp` serving via `try_files $uri$webp_suffix`
- **FastCGI cache**: configured at `/var/cache/nginx/wordpress/`
- **Security headers**: X-Content-Type-Options, X-Frame-Options, X-XSS-Protection, Referrer-Policy

## Page Weight Reduction

| Resource Type | Before | After |
|---------------|--------|-------|
| Images | ~2,380KB | ~585KB |
| Scripts (3rd party) | ~487KB | ~28KB |
| Fonts (FontAwesome) | ~332KB | 0KB |
| **Total** | **~1,462KB** | **~800KB** |

## Remaining Opportunities

- Hero image (`abstract_5.jpg`, 90KB) not served as WebP — it's a `.jpg`, Nginx only converts `.png/.jpg` but the WebP file may not exist
- Google Fonts Roboto still render-blocking (~37KB font file)
- GDPR cookie plugin CSS/JS (~24KB) — could be deferred
- TrustIndex widget JS (~21KB) — could be lazy loaded
