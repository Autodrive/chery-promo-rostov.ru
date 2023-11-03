let mix = require('laravel-mix');

mix.setPublicPath('/');
mix.js('source/js/main.js', 'static/js').sourceMaps();

mix.sass('source/sass/style.scss', 'static/css').options({
        processCssUrls: false
    });