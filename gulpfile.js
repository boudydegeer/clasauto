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
  mix.sass("app.scss")
     .publish(
      'jquery/dist/jquery.min.js',
      'public/js/vendor/jquery.min.js'
     )
     .publish(
      'jquery/dist/jquery.min.map',
      'public/js/vendor/jquery.min.map'
     )
     .publish(
      'bootstrap-sass-official/assets/javascripts/bootstrap.js',
      'public/js/vendor/bootstrap.min.js'
     )
      .publish(
      'bootstrap-sass-official/assets/fonts',
      'public/fonts'
      //'public/build/fonts/bootstrap'
     )
     .publish(
      'font-awesome/css/font-awesome.min.css',
      'public/css/vendor/font-awesome/font-awesome.css'
     )
     .publish(
      'flag-icon-css/css/flag-icon.min.css',
      'public/css/vendor/flag-icons-css/css/flag-icon.min.css'
     )
     .publish(
      'flag-icon-css/flags',
      'public/css/vendor/flag-icons-css/flags'
     )
     .publish(
      'font-awesome/fonts',
      'public/css/vendor/fonts'
     )
     .styles([
        'app.css'
     ])
     .routes()
     .events()
     .version([
      'public/css/app.css',
      'public/fonts/bootstrap/*'
     ])
     .phpSpec();


});
