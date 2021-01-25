let mix = require('laravel-mix');
mix
.sass('src/app.scss', 'css').options({
    processCssUrls: false
})
.js('src/app.js', 'js').vue({ version: 2 });