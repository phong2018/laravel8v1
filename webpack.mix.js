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

mix.js("resources/packages/js/vue/SocketIO/publicsocketio.js", "public/packages/js/vue/SocketIO/")
.js("resources/packages/js/vue/SocketIO/privatesocketio.js", "public/packages/js/vue/SocketIO/")
.js("resources/packages/js/vue/SocketIO/presencesocketio.js", "public/packages/js/vue/SocketIO/")
.vue();

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
