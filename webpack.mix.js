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
   .sass('resources/sass/responsive.scss', 'public/css')
   .sourceMaps()
   .browserSync({
    proxy: {
        target: "http://127.0.0.1:8000/",
        ws: true
    },
    browser: "google chrome",
    // files: [
    //    './**/*.css',
    //    './app/**/*',
    //    './config/**/*',
    //    './resources/views/**/*.blade.php',
    //    './resources/views/*.blade.php',
    //    './routes/**/*'
    // ],
    watchOptions: {
      usePolling: true,
      interval: 100
    },
    open: "external",
    reloadOnRestart: true
});
