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

mix.js('resources/js/admin/sb-admin.js', 'public/js/admin')
    .js('resources/js/admin/demo/chart-area-demo.js', 'public/js/admin/demo')
    .js('resources/js/admin/demo/chart-bar-demo.js', 'public/js/admin/demo')
    .js('resources/js/admin/demo/chart-pie-demo.js', 'public/js/admin/demo')
    .js('resources/js/admin/demo/datatables-demo.js', 'public/js/admin/demo')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/admin/sb-admin.scss', 'public/css/admin')
    .sass('resources/sass/blog-template/clean-blog.scss', 'public/css/blog-template')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/contactanos.scss', 'public/css')
    .sass('resources/sass/cs_adoc.scss', 'public/css')
    .sass('resources/sass/cs_fam_cdn.scss', 'public/css')
    .sass('resources/sass/cs_fam_sanmiguelito.scss', 'public/css')
    .sass('resources/sass/cs_fpoma.scss', 'public/css')
    .sass('resources/sass/cs_fpro.scss', 'public/css')
    .sass('resources/sass/cs_grupoq.scss', 'public/css')
    .sass('resources/sass/cs_hilasal.scss', 'public/css')
    .sass('resources/sass/cs_jupa.scss', 'public/css')
    .sass('resources/sass/cs_merlet.scss', 'public/css')
    .sass('resources/sass/cs_raices.scss', 'public/css')
    .sass('resources/sass/enfoque_en_la_calidad.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/impacto.scss', 'public/css')
    .sass('resources/sass/navbarStyle2.scss', 'public/css')
    .sass('resources/sass/nuestra_filosofia.scss', 'public/css')
    .sass('resources/sass/nuestra_historia.scss', 'public/css')
    .sass('resources/sass/nuestro_equipo.scss', 'public/css')
    .sass('resources/sass/nuestro_programa.scss', 'public/css')
    .sass('resources/sass/nuestros_aliados.scss', 'public/css');