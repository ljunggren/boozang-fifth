const { test, expect } = require('@playwright/test');

test.describe('Smoke tests', () => {
  test('homepage loads with 200', async ({ page }) => {
    const response = await page.goto('/');
    expect(response.status()).toBe(200);
  });

  test('page title is correct', async ({ page }) => {
    await page.goto('/');
    await expect(page).toHaveTitle(/Boozang/);
  });

  test('has single H1', async ({ page }) => {
    await page.goto('/');
    const h1s = page.locator('h1');
    await expect(h1s).toHaveCount(1);
  });

  test('navigation loads', async ({ page }) => {
    await page.goto('/');
    const nav = page.locator('nav.main_menu');
    await expect(nav).toBeVisible();
  });

  test('logo is visible', async ({ page }) => {
    await page.goto('/');
    const logo = page.locator('nav.main_menu a.logo img');
    await expect(logo).toBeVisible();
  });

  test('footer renders', async ({ page }) => {
    await page.goto('/');
    const footer = page.locator('footer#footer');
    await expect(footer).toBeAttached();
  });

  test('no console errors', async ({ page }) => {
    const errors = [];
    page.on('console', msg => {
      if (msg.type() === 'error') errors.push(msg.text());
    });
    await page.goto('/');
    expect(errors).toEqual([]);
  });
});
