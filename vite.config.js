import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public/build',
        assetsDir: '',
        sourcemap: false,
        minify: true,
        rollupOptions: {
            input: '/index.html'
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        https: false,
    },
    base: process.env.APP_URL || '/',
});
