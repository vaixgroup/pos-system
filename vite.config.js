import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    /*server: {
        https: false,
        host: 'acm.local',
    },*/
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/assets'),
            '@nm': path.resolve(__dirname, 'node_modules'),
        }
    },
    plugins: [
        laravel([
            'resources/assets/scss/vendor.scss',
            'resources/assets/scss/template.scss',
            'resources/assets/scss/custom.scss',
            'resources/assets/js/vendor.js',
            'resources/assets/js/app.js',
        ]),
    ],
});
