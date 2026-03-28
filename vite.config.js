import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/main.js',
            ],
            refresh: true,
            valetTls: false,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: false,
    },
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        manifest: 'manifest.json',
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
})
