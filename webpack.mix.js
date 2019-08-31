let mix = require('laravel-mix');

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

// App
mix.sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js');

// CEE
mix.sass('resources/assets/sass/xs.sass', 'public/css')
    .sass('resources/assets/sass/sm.sass', 'public/css')
    .sass('resources/assets/sass/md.sass', 'public/css')
    .sass('resources/assets/sass/lg.sass', 'public/css')
    .sass('resources/assets/sass/xl.sass', 'public/css')
;

mix.js('resources/assets/js/main.js', 'public/js')
    .js('resources/assets/js/step1.js', 'public/js');

// Font Awesome
mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/css/fontawesome/css')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/css/fontawesome/webfonts');

// AOS
mix.copy('node_modules/aos/dist/aos.css', 'public/css/aos')
    .copy('node_modules/aos/dist/aos.js', 'public/js/aos');

// Lightbox
mix.copy('node_modules/lightbox2/dist/css/lightbox.min.css', 'public/css/lightbox/css')
    .copyDirectory('node_modules/lightbox2/dist/images', 'public/css/lightbox/images')
    .copy('node_modules/lightbox2/dist/js/lightbox.min.js', 'public/js/lightbox');

// Summernote
mix.copy('node_modules/summernote/dist/summernote-bs4.css', 'public/css/summernote')
    .copy('node_modules/summernote/dist/summernote-bs4.min.js', 'public/js/summernote')
    .copyDirectory('node_modules/summernote/dist/font', 'public/css/summernote/font');

// Tempus Dominus
mix.copy('node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css', 'public/css/tempusdominus')
    .copy('node_modules/moment/min/moment.min.js', 'public/js/moment')
    .copy('node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js', 'public/js/tempusdominus');

// Chart.js
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js/chart');

// Options
mix.options({
        processCssUrls: false
    })
    .version();

