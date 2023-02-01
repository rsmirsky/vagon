const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
let productionSourceMaps = false;

mix.js('resources/js/admin/admin.js', 'public/js/admin.js')
    .js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin/admin.scss', 'public/css/admin/admin.css')
    .sourceMaps(productionSourceMaps, 'source-map')
    .version();
