// const { scripts } = require('laravel-mix');
const mix = require('laravel-mix');

mix
    //Bootstrap sass
    .sass('resources/css/app.scss', 'public/assets/bootstrap/bootstrap.css')
    //Bootstrap bundle
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/bootstrap/bootstrap.bundle.js')

    //fortawesome
    .css('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/assets/fontawesome/fontawesome.css')
    .scripts('node_modules/@fortawesome/fontawesome-free/js/all.min.js', 'public/assets/fontawesome/fontawesome.js')

    //scrollReveal js
    .scripts('node_modules/scrollreveal/dist/scrollreveal.es.js', 'public/assets/scrollreveal/scrollreveal.es.js')
    .scripts('node_modules/scrollreveal/dist/scrollreveal.js', 'public/assets/scrollreveal/scrollreveal.js')

    //Jquery
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/assets/jquery/jquery.min.js')

    //.version()
