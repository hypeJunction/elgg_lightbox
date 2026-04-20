import { test, expect, type Page } from '@playwright/test';

// Wait until elgg/lightbox AMD module has executed. Checks the RequireJS internal
// context registry, which works regardless of RequireJS version.
async function waitForLightboxReady(page: Page) {
	await page.waitForFunction(() => {
		const r = (window as any).require;
		if (!r) return false;
		// RequireJS stores executed modules in require.s.contexts._.defined
		const defined = r?.s?.contexts?.['_']?.defined;
		if (defined && defined['elgg/lightbox']) return true;
		// Fallback: require.defined() API (RequireJS >= 2.1.3)
		if (typeof r.defined === 'function') return r.defined('elgg/lightbox');
		return false;
	}, { timeout: 15000 });
}

test.describe('elgg_lightbox plugin', () => {

	test('lightbox CSS is loaded', async ({ page }) => {
		await page.goto('/');

		// The colorbox CSS should be present on the page, either as an
		// inline style block or via a stylesheet link containing lightbox/colorbox references.
		const hasColorboxCSS = await page.evaluate(() => {
			// Check stylesheets for colorbox-related rules
			for (const sheet of document.styleSheets) {
				try {
					for (const rule of sheet.cssRules) {
						if (rule.cssText && rule.cssText.includes('#colorbox')) {
							return true;
						}
					}
				} catch {
					// Cross-origin stylesheets will throw; skip them
				}
			}
			return false;
		});

		expect(hasColorboxCSS).toBe(true);
	});

	test('lightbox opens on elgg-lightbox click', async ({ page }) => {
		await page.goto('/');

		// Inject a lightbox trigger link so we have something to click
		await page.evaluate(() => {
			const link = document.createElement('a');
			link.href = '#test-lightbox-content';
			link.className = 'elgg-lightbox-inline';
			link.textContent = 'Open Lightbox';
			link.id = 'test-lightbox-trigger';

			const content = document.createElement('div');
			content.id = 'test-lightbox-content';
			content.style.display = 'none';
			content.innerHTML = '<p>Lightbox test content</p>';

			document.body.appendChild(content);
			document.body.appendChild(link);
		});

		// Wait until the AMD module has bound click.lightbox on document
		await waitForLightboxReady(page);

		await page.click('#test-lightbox-trigger');

		// Colorbox should become visible
		const colorbox = page.locator('#colorbox');
		await expect(colorbox).toBeVisible({ timeout: 5000 });
	});

	test('lightbox closes on close button click', async ({ page }) => {
		await page.goto('/');

		// Inject a lightbox trigger
		await page.evaluate(() => {
			const link = document.createElement('a');
			link.href = '#test-close-content';
			link.className = 'elgg-lightbox-inline';
			link.textContent = 'Open Lightbox';
			link.id = 'test-close-trigger';

			const content = document.createElement('div');
			content.id = 'test-close-content';
			content.style.display = 'none';
			content.innerHTML = '<p>Close test content</p>';

			document.body.appendChild(content);
			document.body.appendChild(link);
		});

		// Wait until the AMD module has bound click.lightbox on document
		await waitForLightboxReady(page);

		await page.click('#test-close-trigger');

		const colorbox = page.locator('#colorbox');
		await expect(colorbox).toBeVisible({ timeout: 5000 });

		// Click the close button
		await page.click('#cboxClose');

		// The overlay should be hidden after closing
		const overlay = page.locator('#cboxOverlay');
		await expect(overlay).toBeHidden({ timeout: 5000 });
	});
});
