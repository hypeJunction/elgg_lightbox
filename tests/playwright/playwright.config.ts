import { defineConfig } from '@playwright/test';

export default defineConfig({
	testDir: './tests',
	timeout: 30000,
	retries: 1,
	use: {
		baseURL: process.env.ELGG_BASE_URL || `http://localhost:${process.env.ELGG_PORT || 8480}`,
		headless: true,
		ignoreHTTPSErrors: true,
	},
});
