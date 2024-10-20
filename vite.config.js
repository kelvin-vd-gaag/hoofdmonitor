import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/tailwind.output.css'
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,  // Zorgt ervoor dat het manifest.json wordt gegenereerd
        outDir: 'public/build',  // Plaatst de bestanden in de public/build map
        rollupOptions: {
            output: {
                manualChunks: undefined,  // Geen automatische chunks
            },
        },
    },
});
