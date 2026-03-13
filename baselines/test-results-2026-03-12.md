# Test Results Baseline — 2026-03-12

## Summary: 23 passed, 2 failed (25 total)

## Smoke Tests (7/7 passed)
- [x] homepage loads with 200
- [x] page title is correct
- [x] has single H1
- [x] navigation loads
- [x] logo is visible
- [x] footer renders
- [x] no console errors

## SEO Basics (4/6 passed)
- [x] has meta description
- [x] has canonical URL
- [ ] has Open Graph tags — FAIL: missing og:description (Yoast not configured)
- [ ] sitemap is accessible and uses HTTPS — FAIL: sitemap URLs use http:// (WP siteurl set to http)
- [x] robots.txt is accessible
- [x] structured data present

## Caching and Performance Headers (6/6 passed)
- [x] homepage responds with correct content-type
- [x] static assets have cache headers
- [x] page is not broken by caching - dynamic content renders
- [x] page renders consistently across loads
- [x] HTTPS is enforced - no mixed content
- [x] no broken same-origin resources

## Navigation and Key Pages (6/6 passed)
- [x] pricing page loads
- [x] blog page loads
- [x] login link points to ai.boozang.com
- [x] signup link points to ai.boozang.com
- [x] footer links are not broken
- [x] mobile menu toggle works
