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
   .sass('resources/sass/interia.sass', 'public/css');

mix.styles([
    'public/css/icons-font.css',
    'public/css/interia.css'
], 'public/css/interia-all.css');


mix.combine([
	'public/js/jquery.js',
	'public/js/bootstrap.min.js',
	'public/js/slick.js',
	'public/js/app.js'
	], 'public/js/interia-all.js');