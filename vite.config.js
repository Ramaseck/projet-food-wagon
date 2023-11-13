import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD
                'resources/sass/app.scss',
=======
                'resources/css/app.css',
>>>>>>> 1fa8e2dede48b9bb416b0c4f8d6e58946ede6edc
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
