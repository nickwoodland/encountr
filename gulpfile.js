const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss', 'resources/assets/css');

    mix.styles([
        'app.css',
    ], 'public/css', 'resources/assets/css');

    mix.scripts([
        'bootstrap.js',
        'app.js'
    ], 'public/js', 'resources/assets/js');

});
