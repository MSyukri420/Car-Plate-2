const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js')
   .js('resources/js/custom.js', 'public/js/custom.js')
   .js('resources/js/bootstrap.js', 'public/js/bootstrap.js');
