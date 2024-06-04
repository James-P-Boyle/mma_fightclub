import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        // outDir: 'public/build',
        // assetsDir: 'public/images',
        // sourcemap: false,
        minify: true,
        manifest: true,
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                css: 'resources/css/app.css',
            }
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        https: true,
    },
    base: process.env.APP_URL || '/',
});
