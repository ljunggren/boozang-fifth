# Homepage Content Roadmap

## Phase 1 — Fix Credibility Issues (Now)

Broken content that's live and hurting trust.

- [ ] Remove lorem ipsum from Block 3 "User friendly UI" section
- [ ] Delete gibberish test data from Block 5 banner rows (sdsdsds, jkjkjk, etc.)
- [ ] Fix broken video play button link (Facebook redirect with fbclid)
- [ ] Fix HTTP → HTTPS on internal links (btn_url, go_to_videos_url)
- [ ] Deduplicate Block 0/1 headings (both say "Boozang works with the tools you depend on")
- [ ] Fix sitemap — uses http:// URLs, posts last modified 2023-10
- [ ] Add missing alt text on images
- [ ] Configure Yoast SEO — meta description, OG tags, canonical, Twitter cards (installed but unconfigured)

## Phase 2 — Content Rewrite (Pre-MCP Launch)

Rewrite homepage messaging to set up the MCP launch. Modernize without revealing MCP yet.

### Hero Section
- [ ] New headline — move past "codeless", position as AI-native platform
- [ ] New subtext — outcome-focused, not feature-focused
- [ ] Review CTA buttons — unify "Try for Free" / "Sign-up for Free" to one term
- [ ] Unify Calendly demo links (two different URLs currently)

### Narrative Restructure
- [ ] Reduce from 8 blocks to ~6 (cut redundancy between Blocks 2 & 3)
- [ ] Move vision/mission (Block 5) before pricing for emotional hook
- [ ] Reframe features around 3 pillars:
  - **Stability** — NLP selectors survive framework migrations, model-based testing, root cause analysis
  - **Team** — real-time collaboration, BDD/Cucumber native, versioning/branching built-in
  - **Speed** — record/model/script authoring, visual debugging, unified UI+API testing
- [ ] Cut or consolidate weaker feature rows (canvas testing is niche — demote)
- [ ] Decide on Block 7 (Xray partner) — keep standalone, fold into integrations, or cut?
- [ ] Decide on Asgaros Forum — still active? Keep or remove from site?

### Missing Content
- [ ] Add "How it works" section — 3-step visual (connect → create → run in CI)
- [ ] Add competitive positioning — why Boozang vs Selenium/Cypress/Playwright/codeless tools
- [ ] Add enterprise signals — security, data residency (Beauharnois/Frankfurt), compliance
- [ ] Add customer stories or concrete use case outcomes
  - **Open question:** Do we have customer stories to draw from? Need source.
- [ ] Add supported platforms/browsers section
- [ ] Expand integration block — link to full integration docs, not just 9 logos

### Blog / Latest Updates
- [ ] Blog content is stale (last post: 2023-10) — Block 6 pulls from dead categories
- [ ] Plan fresh content for getting-started, releases, case-studies categories
- [ ] Or replace Block 6 with static content until blog is active again

### Pricing Cards
- [ ] Add feature comparison matrix to reduce "Get in touch" friction
- [ ] Clarify tier differences with specific feature lists

### SEO
- [ ] Diversify H2 keywords (stop repeating "testing" in every heading)
- [ ] Add schema.org structured data (Product, SoftwareApplication)

### Footer & Global
- [ ] Audit footer content (footer links, social icons field groups)
- [ ] Check inner pages alignment (Feature Overview, Pricing, About Us, Cucumber) — do they need rewriting too?

## Phase 3 — MCP / Agentic Launch

Big release: position Boozang as the AI-native testing platform.

### New Content
- [ ] Hero rewrite — lead with AI-native / agentic messaging
- [ ] New block: "AI-First Testing" — MCP API, 40+ tools, any AI assistant (Claude, GPT, Cursor)
- [ ] New block: "Bring Your Own AI" — Boozang is tool-agnostic, not locked to one vendor
- [ ] Self-healing tests — AI auto-updates selectors when UI changes
- [ ] 3 authoring modes — Record, Model (AI-driven), Script — show flexibility
- [ ] Demo video or interactive walkthrough of AI agent creating a test

### Competitive Positioning
- [ ] Comparison: Boozang MCP vs Playwright MCP (token efficiency, NLP selectors vs raw DOM)
- [ ] "Not AI-washed" — Boozang exposes tools via open standard, doesn't lock AI inside
- [ ] Position: competitors embed AI, Boozang enables AI

### Supporting Assets
- [ ] Blog post: announcing MCP / agentic programming
- [ ] Updated docs landing page link from homepage
- [ ] Case study: AI agent authoring tests end-to-end
  - **Open question:** Who produces this? Need real customer or internal demo.
- [ ] Video: MCP in action with Claude Code
  - **Open question:** Who produces this?

### Launch Strategy
- [ ] Decide: dedicated landing page (`/agentic` or `/mcp`) vs homepage-only?
- [ ] Coordinate timing with product MCP readiness
- [ ] Inner pages update — Feature Overview and Pricing must reflect new capabilities

## Open Questions

- **Customer stories:** Do we have any to draw from? Need source material.
- **Blog strategy:** Who writes content? Stale blog undermines the "Latest Updates" block.
- **Inner pages:** Feature Overview, Pricing, About Us, Cucumber — rewrite scope TBD.
- **Forum:** Is Asgaros Forum still used? Plugin is active but unclear if it has traffic.
- **Measurement:** How do we know the rewrite worked? Consider analytics goals before/after.
- **Mobile:** Hero image is 1908px wide, mobile score is ~74. Content length impacts mobile scroll depth.
- **Asset production:** Demo videos and case studies need someone to produce them.

## Notes

- MCP is not fully live yet — Phase 2 sets up messaging without revealing MCP
- Phase 3 launches when MCP is ready for public release
- All content editable via WP-CLI: `wp post meta update 70 <key> "<value>"`
- Local cache: `hp-cache/frontpage-cache.json` (331 fields)
- Content map: `hp-cache/content-map.md`
