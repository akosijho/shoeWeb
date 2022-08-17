import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({

            
           input: [
            'resources/css/app.css',
            'resources/css/vue.css',
            'resources/js/app.js',
            'resources/js/scrollanchor.js',
            'resources/js/scrollreveal.min.js',
            'resources/js/index.js',
            

        ],
        refresh: true,
     }), 

    ],
   
});
