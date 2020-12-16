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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/xtreme/app-style-switcher.js', 'public/js/xtreme')
    .js('resources/js/xtreme/jquery.min.js', 'public/js/xtreme')
    .js('resources/js/xtreme/popper.min.js', 'public/js/xtreme')
    .js('resources/js/xtreme/sidebarmenu.js', 'public/js/xtreme')
    .js('resources/js/xtreme/bootstrap.min.js', 'public/js/xtreme')
    .js('resources/js/xtreme/custom.js', 'public/js/xtreme')
    .js('resources/js/xtreme/waves.js', 'public/js/xtreme');
    