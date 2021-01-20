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

// mix.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

// mix.js('resources/js/app.js', 'public/assets/app.js')
// 	.vue()
// 	.extract([
// 		'vue', 'axios', 'jquery',
// 		'@fortawesome/fontawesome-free', 
// 		'bootstrap','selectize', 'vue2-selectize',
// 		'moment',
// 	]);

mix.version();
