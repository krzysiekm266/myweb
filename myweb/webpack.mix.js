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
//  mix
//  .js('resources/js/app.js', 'public/js')
//  .postCss('resources/css/app.css', 'public/css')
//  .postCss('resources/css/test.css', 'public/css')
//     .options([
//         require('postcss-import'),
//         require('tailwindcss'),
//         require('postcss-nested'),
//         require('autoprefixer'),
//     ]);



mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/tailwind.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),

  ]);


//  mix
//   .js('resources/js/app.js', 'public/js')
//   .postCss('resources/css/app.css', 'public/css')
//   .options([
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('postcss-nested'),
//     require('autoprefixer')
//   ]);


if (mix.inProduction()) {
  mix
    .version();
}
