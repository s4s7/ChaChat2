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

// 第一引数ファイルをトランスパイル後、第二引数ディレクトリに保存する
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/submit_modal.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version();
