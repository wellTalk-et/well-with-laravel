import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    server: {
        host: 'localhost',
        https: true,
        https: {
          key: fs.readFileSync('./well-with-laravel.test-key.pem'),
          cert: fs.readFileSync('./well-with-laravel.test.pem'),
        },
      },
});
