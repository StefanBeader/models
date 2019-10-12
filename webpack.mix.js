const mix = require('laravel-mix');

mix
  .js('resources/js/frontend/app.js', 'public/frontend/js')
  .js('resources/js/backend/app.js', 'public/backend/js')
  .sass('resources/sass/frontend/app.scss', 'public/frontend/css')
  .sass('resources/sass/backend/app.scss', 'public/backend/css');
