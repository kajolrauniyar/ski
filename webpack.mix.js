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
 mix.browserSync('localhost:8000');
 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.scss', 'public/css');
   // .sass('resources/scss/font-awesome-brands.scss', 'public/css')
   // .sass('resources/scss/font-awesome-core.scss', 'public/css')
   // .sass('resources/scss/font-awesome-light.scss', 'public/css')
   // .sass('resources/scss/font-awesome-regular.scss', 'public/css')
   // .sass('resources/scss/font-awesome-solid.scss', 'public/css');
