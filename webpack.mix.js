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
    .sourceMaps();


// mix.styles([

//     'resource/css/lib/blog-post.css',
//     'resource/css/lib/boostrap.css',
//     'resource/css/lib/boostrap.min.css',
//     'resource/css/lib/font-awesome.css',
//     'resource/css/lib/metisMenu.css',
//     'resource/css/lib/sb-admin-2.css',



// ], 'public/css/libs.css');

// mix.scripts([

//     'resource/js/lib/boostrap.js',
//     'resource/js/lib/boostrap.min.js',
//     'resource/js/lib/jquery.js',
//     'resource/js/lib/metisMenu.js',
//     'resource/js/lib/sb-admin-2.js',


// ], 'public/js/libs.js');