const { test, expect } = require('@playwright/test');

test.describe('SEO basics', () => {
  test('has meta description', async ({ page }) => {
    await page.goto('/');
    const desc = page.locator('meta[name="description"]');
    await expect(desc).toHaveAttribute('content', /.+/);
  });

  test('has canonical URL', async ({ page }) => {
    await page.goto('/');
    const canonical = page.locator('link[rel="canonical"]');
    await expect(canonical).toHaveAttribute('href', /https:\/\/boozang\.com/);
  });

  test('has Open Graph tags', async ({ page }) => {
    await page.goto('/');
    await expect(page.locator('meta[property="og:title"]')).toHaveAttribute('content', /.+/);
    await expect(page.locator('meta[property="og:description"]')).toHaveAttribute('content', /.+/);
    await expect(page.locator('meta[property="og:image"]')).toHaveAttribute('content', /.+/);
  });

  test('sitemap is accessible and uses HTTPS', async ({ request }) => {
    const response = await request.get('/sitemap_index.xml');
    expect(response.status()).toBe(200);
    const body = await response.text();
    expect(body).toContain('https://boozang.com');
    expect(body).not.toContain('http://boozang.com');
  });

  test('robots.txt is accessible', async ({ request }) => {
    const response = await request.get('/robots.txt');
    expect(response.status()).toBe(200);
    const body = await response.text();
    expect(body).toContain('Sitemap');
  });

  test('structured data present', async ({ page }) => {
    await page.goto('/');
    const jsonLd = page.locator('script[type="application/ld+json"]');
    const count = await jsonLd.count();
    expect(count).toBeGreaterThan(0);
  });
});
