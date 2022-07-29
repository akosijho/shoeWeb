import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/style.sass',
            'resources/js/app.js',
            'resources/js/scrollanchor.js',
            'resources/js/scrollreveal.min.js',
            'resources/js/index.js',
        ]),
    ],
});
