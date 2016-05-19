var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass(['style.scss'])
        .styles([
         "animate.css",
         "bootstrap.min.css",
         "bootstrap-theme.min.css",
         "app.css"
        ], 'public/css/all.css', 'public/css/')
        .scripts(['functions.js'], 'public/js/all.js','public/js/')
        .version(["css/all.css", "js/all.js"]);
});
