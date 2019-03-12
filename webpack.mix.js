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




/*
|--------------------------------------------------------------------------
| Stylesheets
|--------------------------------------------------------------------------
| Animate.css
| Bootstrap.css
| BaseStyle.css
| Default.css
| FontAwesome.css
| JqueryUi.css
| MeanMenu.css
| NivoSlider.css
| Normalizer.css
| OwlCarousel.css
| PE7Icons.css
| ResponsiveSyle.css
| 
|
|
*/

mix
    .sass('resources/sass/animate.scss', 'public/css')
    .sass('resources/sass/basestyle.scss', 'public/css')
    .sass('resources/sass/bootstrap.min.scss', 'public/css')
    .sass('resources/sass/default.scss', 'public/css')
    .sass('resources/sass/fa.scss', 'public/css')
    .sass('resources/sass/meanmenu.min.scss', 'public/css')
    .sass('resources/sass/nivoslider.scss', 'public/css')
    .sass('resources/sass/owl.carousel.min.scss', 'public/css')
    .sass('resources/sass/pe7icon.scss', 'public/css')
    .sass('resources/sass/jqui.min.scss', 'public/css')
    .sass('resources/sass/responsivestyle.scss', 'public/css');






/*
 |--------------------------------------------------------------------------
 | JavaScripts
 |--------------------------------------------------------------------------
 | App.js
 | Bootstrap.js
 | JQueryUi.js
 | ElevatedZoom.js
 | MeanMenu.js
 | NivoSlider.js
 | ScrollUp.js
 | OwlCarousel.js
 | Plugins.js
 | 
 |--------------------------------------------------------------------------
 | Current Dir [Vendor]
 |--------------------------------------------------------------------------
 | Jquery.js
 | Modernizer.js
 |
 |
 */


mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/dependantJs.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js')
    .js('resources/js/jqui.min.js', 'public/js')
    .js('resources/js/jquery.elevateZoom-3.0.8.min.js', 'public/js')
    .js('resources/js/jquery.meanmenu.min.js', 'public/js')
    .js('resources/js/jquery.nivo.slider.js', 'public/js')
    .js('resources/js/jquery.scrollUp.js', 'public/js')
    .js('resources/js/owl.carousel.min.js', 'public/js')
    .js('resources/js/plugins.js', 'public/js')
   
