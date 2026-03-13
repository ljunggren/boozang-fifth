const { test, expect } = require('@playwright/test');

test.describe('Navigation and key pages', () => {
  test('pricing page loads', async ({ page }) => {
    await page.goto('/');
    const pricingLink = page.locator('nav.main_menu a', { hasText: /pricing/i });
    if (await pricingLink.count() > 0) {
      await pricingLink.click();
      await expect(page).toHaveURL(/pricing/i);
      expect(await page.locator('h1, h2').first().textContent()).toBeTruthy();
    }
  });

  test('blog page loads', async ({ page }) => {
    const response = await page.goto('/blog/');
    expect(response.status()).toBe(200);
  });

  test('login link points to ai.boozang.com', async ({ page }) => {
    await page.goto('/');
    const loginLink = page.locator('nav.main_menu a', { hasText: /login/i });
    await expect(loginLink).toHaveAttribute('href', /ai\.boozang\.com/);
  });

  test('signup link points to ai.boozang.com', async ({ page }) => {
    await page.goto('/');
    const signupLink = page.locator('nav.main_menu a', { hasText: /try for free/i });
    await expect(signupLink).toHaveAttribute('href', /ai\.boozang\.com/);
  });

  test('footer links are not broken', async ({ page }) => {
    await page.goto('/');
    const footerLinks = page.locator('footer#footer a[href^="/"], footer#footer a[href^="https://boozang.com"]');
    const count = await footerLinks.count();

    for (let i = 0; i < count; i++) {
      const href = await footerLinks.nth(i).getAttribute('href');
      if (href && href.startsWith('/')) {
        const response = await page.request.get(href);
        expect(response.status(), `Footer link ${href} broken`).toBeLessThan(400);
      }
    }
  });

  test('mobile menu toggle works', async ({ page }) => {
    await page.setViewportSize({ width: 375, height: 812 });
    await page.goto('/');
    const menuBtn = page.locator('.menu_toggle_btn');
    await menuBtn.click();
    const mobileNav = page.locator('.nav-mobile.menu_open');
    await expect(mobileNav).toBeVisible();
  });
});
