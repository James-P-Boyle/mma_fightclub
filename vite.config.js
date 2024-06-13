import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    build: {
        outDir: 'public/build',
        // assetsDir: 'public/images',
        // sourcemap: false,
        minify: true,
        // manifest: true,
        rollupOptions: {
            output: {
                entryFileNames: '[name].js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]'
            }
        }
    },
    plugins: [
        laravel({
            input: ['resources/js/app.tsx'],
            refresh: true,
        }),
        react(),
    ],
    //     server: {
    //         https: true,
    // },
    base: process.env.APP_URL || '/',
});
