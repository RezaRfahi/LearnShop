import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/adminlte.css',
                'resources/css/adminlte.min.css',
                'resources/css/bootstrap-rtl.min.css',
                'resources/css/custom-style.css',
                'resources/css/persian-datepicker.min.css',
                'resources/js/app.js',
                'resources/js/adminlte.min.js.map',
                'resources/js/demo.js',
                'resources/js/persian-date.min.js',
                'resources/js/persian-datepicker.min.js',
                'resources/js/adminlte.js',
                'resources/js/adminlte.js.map',
                'resources/js/adminlte.min.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
