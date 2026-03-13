# Homepage Content Map — boozang.com

Post ID: **70** | Template: `front-page.php` | Last cached: 2026-03-12

## How It Works

The front page uses an ACF **Flexible Content** field (`front_page_blocks`) that loops through block layouts. Each layout maps to a PHP template in `acf-templates/`.

```
front-page.php → loops front_page_blocks → loads acf-templates/{layout}.php
```

### Editing Content via WP-CLI

```bash
# Read a field
ssh ubuntu@mgmt1bh.boozang.com \
  'sudo -u www-data wp --path=/var/www/html/wordpress post meta get 70 <meta_key>'

# Update a field
ssh ubuntu@mgmt1bh.boozang.com \
  'sudo -u www-data wp --path=/var/www/html/wordpress post meta update 70 <meta_key> "<new_value>"'

# Purge cache after edits
ssh ubuntu@mgmt1bh.boozang.com \
  'sudo rm -rf /var/cache/nginx/wordpress/*'
```

### Notes

- Table prefix: `tuss_` (not default `wp_`)
- ACF internal refs use `_` prefix (e.g., `_header_heading` → skip these)
- Serialized PHP arrays (e.g., repeater counts, layout order) — edit with care
- Local cache: `.agent/content/frontpage-cache.json` (331 fields)

---

## Page Header (all pages)

ACF Group: **Header items Pages** | Template: `header.php`
Applies to: all page templates (default, front-page, videos, forum)

| Field | Type | Description |
|-------|------|-------------|
| `header_background` | radio | Background color theme |
| `heading_pages` | wysiwyg | Page heading (H1) + subtitle |
| `btn_links` | repeater | CTA buttons (link + color) |
| `header_image_front` | image | Header image |
| `background_image` | image | Background image |
| `overlay_color` | radio | Overlay color |

### Front page header content

| Key | Current Value |
|-----|---------------|
| `header_item_0_heading` | Codeless testing that works |
| `header_item_1_text` | Empower your whole team to build and maintain automated tests, not just developers. |
| `header_item_2_signup_button` | "Sign-up for Free" → https://ai.boozang.com/#security/signup |
| `header_item_2_demo_button` | "Request demo" → https://app.hubspot.com/meetings/mats-ljunggren |
| `header_item_2_play_button` | Video link (Facebook redirect — needs fixing) |

---

## Block 0 — Integrations

Template: `acf-templates/integrations.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_0_background_color` | lighturqoise |
| `front_page_blocks_0_content` | `<h2>Boozang works with the <span class="colored_purple_part">tools</span> you depend on</h2>` |
| `front_page_blocks_0_icon_box` | 9 integration logo images |

---

## Block 1 — Text Content

Template: `acf-templates/text_content.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_1_heading` | Boozang works with the tools you depend on |
| `front_page_blocks_1_text` | `<h2>Our customers love us</h2>` |
| `front_page_blocks_1_wider_field` | true |

---

## Block 2 — Feature Blocks

Template: `acf-templates/feature_blocks.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_2_heading` | Why choose Boozang for test automation? |
| `front_page_blocks_2_features_presentation` | `<h2><span class="colored_purple_part">Browser</span> based. Codeless testing.</h2>` (+ more) |
| `front_page_blocks_2_read_more_link` | "Read more about our features" → /feature-overview/ |

### Feature rows (6)

| # | Key suffix | Current Value |
|---|-----------|---------------|
| 0 | `_featuretext` | Test **end-to-end** from the browser. |
| 1 | `_featuretext` | **UI and API** testing under one roof. |
| 2 | `_featuretext` | **Debug** tests on the fly. |
| 3 | `_featuretext` | Stable **natural language** selectors. |
| 4 | `_featuretext` | Fix **root causes** not symptoms. |
| 5 | `_featuretext` | **Cucumber** support |

---

## Block 3 — Front Text + Image (Why Boozang)

Template: `acf-templates/front_text_image_field.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_3_tagline` | Why Boozang? |
| `front_page_blocks_3_heading` | `<h2>Browser based. <span class="colored_part">Codeless testing.</span></h2>` |
| `front_page_blocks_3_preamble` | Boozang offers cloud native AI-powered test automation for anything that runs in the browser. |
| `front_page_blocks_3_background_color` | blue |
| `front_page_blocks_3_heading_background` | blueDarkSolid |

### Two-column rows (7 feature detail sections)

| # | Heading | Text summary |
|---|---------|-------------|
| 0 | Our model-based approach to testing | Model-based testing explanation |
| 1 | UI and API testing under one roof | Comprehensive single tool |
| 2 | Stable natural language selectors | NLP selectors resilient to changes |
| 3 | Debug tests on the fly | Visual debugging + dev tools |
| 4 | Cucumber support built in | Gherkin + Xray/JIRA integration |
| 5 | Fix root causes not symptoms | Root cause analysis + coverage |
| 6 | Canvas testing like no other | HTML canvas drag & drop testing |

---

## Block 4 — Cards (Pricing)

Template: `acf-templates/cards_template.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_4_heading` | `<h2>Kick start your <span class="colored_purple_part">Boozang experience</span></h2>` |
| `front_page_blocks_4_text` | Pricing tiers to fit your needs |
| `front_page_blocks_4_btn_text` | Request a Demo today |
| `front_page_blocks_4_btn_url` | https://app.hubspot.com/meetings/mats-ljunggren |
| `front_page_blocks_4_color` | lightgrey |

### Cards (3)

| # | Heading | Color | Text | CTA |
|---|---------|-------|------|-----|
| 0 | Community | white | Free: single user, single project, unlimited API, basic CI | "Try for Free" → ai.boozang.com signup |
| 1 | Start up | blue | Cucumber, model-based testing, CI for small teams | "Get in touch" → sales@boozang.com |
| 2 | Scale up | white | Unlimited parallel runs + AI test gen for larger teams | "Get in touch" → sales@boozang.com |

---

## Block 5 — Front Text + Image (Vision)

Template: `acf-templates/front_text_image_field.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_5_background_color` | darkblue |
| `front_page_blocks_5_two_columns_0_text` | `<h2>Boozang is democratizing testing</h2>` (+ body) |
| `front_page_blocks_5_two_columns_0_link` | "Read more about our vision" → /about-us/ |
| `front_page_blocks_5_two_columns_row_0_two_columns_0_link_no_2` | "Or just say hello!" → hello@boozang.com |
| `front_page_blocks_5_button_text` | Start Testing Now |
| `front_page_blocks_5_button_url` | https://ai.boozang.com/#security/signup |

---

## Block 6 — Latest Updates (Blog)

Template: `acf-templates/latest_updates.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_6_heading` | `<h2>Latest on <span class="colored_blue_part">Testing</span> and <span class="colored_blue_part">Boozang</span></h2>` |
| Categories (3) | getting-started, releases, case-studies |

---

## Block 7 — Front Text + Image (Xray Partner)

Template: `acf-templates/front_text_image_field.php`

| Key | Current Value |
|-----|---------------|
| `front_page_blocks_7_background_color` | darkblue |
| `front_page_blocks_7_two_columns_0_text` | `<h2>Zoom in on Test management with <span class="green">Xray.</span></h2>` (+ body) |
| `front_page_blocks_7_two_columns_0_link` | "Try Xray!" → https://www.getxray.app/ |

---

## Content Issues

| Issue | Location | Severity |
|-------|----------|----------|
| Lorem ipsum placeholder | Block 3: `banner_content_2_text` ("User friendly UI") | High |
| Gibberish test data | Block 5: `banner_row_0/1` (sdsdsds, jkjkjk, etc.) | High |
| HTTP URLs | `btn_url`, `go_to_videos_url` — should be HTTPS | Medium |
| Play button links to Facebook redirect | `header_item_2_play_button` | Medium |
| Stale video link | `go_to_videos_url` → http://boozang.com/videos/ | Low |
| Duplicate header fields | Multiple naming patterns for same content | Low |

---

## Published Pages

| ID | Title | Slug |
|----|-------|------|
| 70 | Front Page | home |
| 14 | Videos | videos |
| 16 | About Us | about-us |
| 22 | Privacy Policy | privacy-policy |
| 24 | Blog | blog |
| 46 | Pricing | pricing |
| 87 | Terms of Service | terms-of-service |
| 2631 | Feature Overview | feature-overview |
| 2645 | BDD/Cucumber support | cucumber-support-2 |
| 3084 | Forum | forum |
| 3157 | Data Handling | data-handling |

---

## ACF Templates → Layout Mapping

| Layout name | Template file | Used in blocks |
|-------------|---------------|----------------|
| `integrations` | `acf-templates/integrations.php` | 0 |
| `text_content` | `acf-templates/text_content.php` | 1 |
| `feature_blocks` | `acf-templates/feature_blocks.php` | 2 |
| `front_text_image_field` | `acf-templates/front_text_image_field.php` | 3, 5, 7 |
| `cards_template` | `acf-templates/cards_template.php` | 4 |
| `latest_updates` | `acf-templates/latest_updates.php` | 6 |

## ACF Field Groups

| Group | File | Applies to |
|-------|------|------------|
| Front Page Block | `acf-json/group_64c8f6e759da8.json` | Front page |
| Header items Pages | `acf-json/group_5ea93e58af365.json` | All pages |
| Pages Content block | `acf-json/group_5b4915df02224.json` | Inner pages |
| Footer Links | `acf-json/group_59ae56747f257.json` | Global |
| Social icons | `acf-json/group_583c34d7264bd.json` | Global |
| Sign up field | `acf-json/group_5b48ac4dc5471.json` | — |
| Video | `acf-json/group_5b9e13459c90a.json` | Videos page |
| 404page | `acf-json/group_5b2763fa04cf9.json` | 404 page |
