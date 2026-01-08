import { defineConfig } from 'astro/config';
import staticAdapter from '@astrojs/adapter-static';

export default defineConfig({
  output: 'static',
  site: 'https://shikayri.github.io/Portfolio',
  base: '/Portfolio/',
  adapter: staticAdapter(),
});
