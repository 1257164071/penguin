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
    .sass('resources/sass/app.scss', 'public/css');


mix.scripts([
    'public/js/jquery.min.js',
    'public/js/bootstrap.min.js',
    'public/js/plugins/metisMenu/jquery.metisMenu.js',
    'public/js/plugins/slimscroll/jquery.slimscroll.min.js',
    'public/js/plugins/layer/layer.min.js',
    'public/js/hplus.js',
    'public/js/contabs.js',
    'public/js/plugins/pace/pace.min.js',
    'public/js/plugins/toastr/toastr.min.js',
], 'public/js/all.js');


mix.styles([
    'public/css/bootstrap.min.css',
    'public/css/font-awesome.min.css',
    'public/css/animate.css',
    'public/css/style.css',
    'public/css/plugins/toastr/toastr.min.css'
], 'public/css/all.css');

