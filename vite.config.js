import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/style.css',
            'resources/css/style.scss',
            'resources/css/about.scss',
            'resources/js/app.js',
        ]),
    ],
    server:{
            host: 'localhost'
        },
});
