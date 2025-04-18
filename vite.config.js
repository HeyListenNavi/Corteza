import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import imageOptimizer from 'vite-plugin-imagemin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        imageOptimizer({
          png: {
            // https://sharp.pixelplumbing.com/api-output#png
            quality: 80,
          },
          jpeg: {
            // https://sharp.pixelplumbing.com/api-output#jpeg
            quality: 80,
          },
          jpg: {
            // https://sharp.pixelplumbing.com/api-output#jpeg
            quality: 80,
          },
          logStats: true,
          ansiColors: true,
        }),
    ],
    resolve: {
      alias: {
          '@images': '/resources/images',
      },
  },
});
