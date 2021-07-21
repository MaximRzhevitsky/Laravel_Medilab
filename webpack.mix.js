 var mix = require('laravel-mix');

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
 
mix.styles([
    'resources/pages/assets/vendor/animate.css/animate.min.css',
    'resources/pages/assets/vendor/bootstrap/css/bootstrap.min.css',
    'resources/pages/assets/vendor/bootstrap-icons/bootstrap-icons.css',
    'resources/pages/assets/vendor/boxicons/css/boxicons.min.css',
    'resources/pages/assets/vendor/fontawesome-free/css/all.min.css',
    'resources/pages/assets/vendor/glightbox/css/glightbox.min.css',
    'resources/pages/assets/vendor/remixicon/remixicon.css',
    'resources/pages/assets/vendor/swiper/swiper-bundle.min.css',
], 'public/css/pages.css');

mix.styles([
	'resources/admin/assets/bootstrap/css/bootstrap.min.css',
	'resources/admin/assets/font-awesome/4.5.0/css/font-awesome.min.css',
	'resources/admin/assets/ionicons/2.0.1/css/ionicons.min.css',
	'resources/admin/assets/plugins/datatables/dataTables.bootstrap.css',
	'resources/admin/assets/dist/css/AdminLTE.min.css',
	'resources/admin/assets/dist/css/skins/_all-skins.min.css'
],'public/css/admin.css');


mix.scripts([
    'resources/pages/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/pages/assets/vendor/glightbox/js/glightbox.min.js',
    'resources/pages/assets/vendor/php-email-form/validate.js',
    'resources/pages/assets/vendor/purecounter/purecounter.js',
    'resources/pages/assets/vendor/swiper/swiper-bundle.min.js',
    'resources/pages/assets/vendor/bootstrap/js/bootstrap.js',
    'resources/pages/assets/vendor/bootstrap/js/bootstrap.esm.js',
    'resources/pages/assets/js/jquery-2.2.3.min.js',
    'resources/pages/assets/js/main.js'
],'public/js/pages.js');

mix.scripts([

	'resources/admin/assets/bootstrap/js/bootstrap.min.js',
	'resources/admin/assets/plugins/datatables/jquery.dataTables.min.js',
	'resources/admin/assets/plugins/datatables/dataTables.bootstrap.min.js',
	'resources/admin/assets/plugins/slimScroll/jquery.slimscroll.min.js',
	'resources/admin/assets/plugins/fastclick/fastclick.js',
	'resources/admin/assets/dist/js/app.min.js',
    'resources/admin/assets/dist/js/app.js',
    'resources/admin/assets/dist/js/bootstrap.js',
	'resources/admin/assets/dist/js/demo.js',
    'resources/admin/assets/plugins/jQuery/jquery-2.2.3.min.js'
],'public/js/admin.js');

mix.copy('resources/admin/assets/font-awesome','public/fonts/admin');
mix.copy('resources/admin/assets/img','public/images/admin');

mix.copy('resources/pages/assets/img','public/images/pages');

/*mix.js('resources/js/app.js','public/js/app.js');
/*	.sass('resources/sass/app.scss', 'public/css');*/

