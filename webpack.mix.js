const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles([
    'resources/dist/css/pages/ecommerce.css',
    'resources/dist/css/style.min.css',
], 'public/css/admin.css');

mix.js([
    'resources/dist/js/sidebarmenu.js',
    'resources/dist/js/custom.min.js',
    'resources/dist/js/ecom-dashboard.js',
], 'public/js/admin.js');

mix.styles([
    'resources/theme/css/styles.css',
], 'public/css/website.css');

mix.js([
    'resources/theme/js/scripts.js',
], 'public/js/website.js');
