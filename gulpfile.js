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

/*elixir(function(mix) {
    mix.sass('app.scss');

    //  Note: for merging CSS files use
    //  Third parameter is used to specify a output directory
    /!*mix.styles([
        'vendor/normalize.css',
        'app.css'
    ],'public/output/final.css', 'public/css')*!/

    mix.styles([
        'vendor/normalize.css',
        'app.css'
    ], null, 'public/css')

    mix.version('public/css/all.css');
});*/


elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js',
        'public/js');


    mix.styles([
        'app.css'
    ], null, 'public/css');

});