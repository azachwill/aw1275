const mix = require('laravel-mix')
const ESLintPlugin = require('eslint-webpack-plugin')

mix.setPublicPath('dist')
    .js('assets/js/app.js', 'dist')
    .js('assets/js/splash-app.js', 'dist')
    .copy('assets/js/algolia.js', 'dist')
    .copyDirectory('assets/images', 'dist/images/')
    .copyDirectory('assets/file-assets', 'dist/file-assets/')
    .postCss('assets/css/app.css', 'dist')
    .postCss('assets/css/admin.css', 'dist')
    .postCss('assets/css/algolia.css', 'dist')
    .postCss('assets/css/splash-app.css', 'dist')
    .postCss('assets/css/iframe-blogs.css', 'dist')
    .options({
        postCss: [
            require('autoprefixer'),
            require('postcss-import'),
            require('tailwindcss/nesting'),
            require('tailwindcss'),
        ],
    })
    .webpackConfig((webpack) => {
        return {
            plugins: [
                new webpack.ProvidePlugin({
                    $: 'jquery',
                    jQuery: 'jquery',
                    'window.jQuery': 'jquery',
                }),
                new ESLintPlugin(),
            ],
        }
    })
    .version()
