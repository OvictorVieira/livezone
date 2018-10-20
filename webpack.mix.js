let mix = require('laravel-mix');

mix.styles([
    'resources/assets/custom/css/css-template/util-template.css',
    'resources/assets/custom/device-mockups/device-mockups.css',
    'resources/assets/custom/css/css-template/app-template.css',
    'resources/assets/custom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
    'resources/assets/custom/css/animate/animate.css',
    'resources/assets/custom/css/css-hamburgers/hamburgers.css',
    'resources/assets/custom/css/animsition/css/animsition.css',
    'resources/assets/custom/css/login/main-login.css',
    'resources/assets/custom/css/login/util-login.css',
    'resources/assets/custom/css/daterangepicker/daterangepicker.css'
], 'public/css/vendor.css');

mix.styles('resources/assets/custom/css/css-template/main-template.css','public/css/main-template.css');
mix.styles('resources/assets/custom/device-mockups/device-mockups.css','public/css/device-mockups.css');
mix.scripts('resources/assets/js/custom/bootstrap/js/bootstrap.js','public/js/bootstrap.js');
mix.scripts('resources/assets/js/custom/theme/main.min.js','public/js/main.js');

mix.scripts([
    'resources/assets/js/custom/jquery/jquery-3.2.1.min.js',
    'resources/assets/js/custom/jquery-easing/jquery.easing.js',
    'resources/assets/js/custom/perfect-scrollbar/perfect-scrollbar.min',
    'resources/assets/js/custom/animsition.js',
    'resources/assets/js/custom/login/main-login.js',
    'resources/assets/js/custom/countdowntime/countdowntime.js',
    'resources/assets/js/custom/daterangepicker/daterangepicker.js',
    'resources/assets/js/custom/daterangepicker/moment.js',
    'resources/assets/js/custom/select2/select2.js'
], 'public/js/vendor.js');

mix.scripts([
    'resources/assets/js/custom/mask/jquery.mask.min.js',
    'resources/assets/js/custom/mask/mask.js',
], 'public/js/mask.js');

mix.copy('resources/assets/images', 'public/images');

mix.copy('resources/assets/fonts', 'public/fonts');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
