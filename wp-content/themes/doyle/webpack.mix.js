let mix = require('laravel-mix');
require('@ayctor/laravel-mix-svg-sprite');

mix
    .sass('src/styles/styles.scss', 'css')
	.version()
    .sass('src/styles/editor-style.scss', 'css')
    .options({
        processCssUrls: false
    })
    .sourceMaps()
    .js('src/js/scripts.js', 'js')
    .svgSprite('src/icons/*.svg', 'sprite.svg')
    .setPublicPath('assets')
    .copy('assets/svg/sprite.svg', 'assets/svg/sprite.php')
    .browserSync({
        proxy: process.env.MIX_PROXY,
        host: process.env.MIX_HOST,
        open: 'external',
        https: {
            key: process.env.MIX_HTTPS_KEY,
            cert: process.env.MIX_HTTPS_CERT
        },
        files: [
          'assets/css/styles.css',
          'assets/js/scripts.js',
          '*.php',
          '*/*.php'
        ]
    });

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.scss/,
                loader: 'import-glob-loader'
            }
        ]
    }
});
