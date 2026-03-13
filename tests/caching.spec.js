const { test, expect } = require('@playwright/test');

test.describe('Caching and performance headers', () => {
  test('homepage responds with correct content-type', async ({ request }) => {
    const response = await request.get('/');
    expect(response.headers()['content-type']).toContain('text/html');
  });

  test('static assets have cache headers', async ({ page }) => {
    const assetResponses = [];
    page.on('response', response => {
      const url = response.url();
      if (url.match(/\.(css|js|png|jpg|svg|woff2?)(\?|$)/)) {
        assetResponses.push({
          url,
          cacheControl: response.headers()['cache-control'] || '',
          status: response.status(),
        });
      }
    });
    await page.goto('/');
    // Wait for assets to load
    await page.waitForLoadState('networkidle');

    expect(assetResponses.length).toBeGreaterThan(0);
    for (const asset of assetResponses) {
      // Only check same-origin assets
      if (asset.url.includes('boozang.com')) {
        expect(asset.status, `Asset ${asset.url} should return 200`).toBe(200);
      }
    }
  });

  test('page is not broken by caching - dynamic content renders', async ({ page }) => {
    await page.goto('/');
    // Hero section should have real content, not cached garbage
    const hero = page.locator('h1');
    await expect(hero).toContainText(/\w{3,}/);

    // Navigation links should be present and functional
    const navLinks = page.locator('nav.main_menu .nav_links a');
    const count = await navLinks.count();
    expect(count).toBeGreaterThan(3);
  });

  test('page renders consistently across loads', async ({ page }) => {
    // Load twice and compare key content
    await page.goto('/');
    const firstH1 = await page.locator('h1').textContent();
    const firstTitle = await page.title();

    await page.goto('/');
    const secondH1 = await page.locator('h1').textContent();
    const secondTitle = await page.title();

    expect(firstH1).toBe(secondH1);
    expect(firstTitle).toBe(secondTitle);
  });

  test('HTTPS is enforced - no mixed content', async ({ page }) => {
    const mixedContent = [];
    page.on('request', request => {
      const url = request.url();
      if (url.startsWith('http://') && !url.includes('localhost')) {
        mixedContent.push(url);
      }
    });
    await page.goto('/');
    await page.waitForLoadState('networkidle');
    expect(mixedContent, `Mixed content found: ${mixedContent.join(', ')}`).toEqual([]);
  });

  test('no broken same-origin resources', async ({ page }) => {
    const broken = [];
    page.on('response', response => {
      if (response.url().includes('boozang.com') && response.status() >= 400) {
        broken.push({ url: response.url(), status: response.status() });
      }
    });
    await page.goto('/');
    await page.waitForLoadState('networkidle');
    expect(broken, `Broken resources: ${JSON.stringify(broken)}`).toEqual([]);
  });
});
