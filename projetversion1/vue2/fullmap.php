<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>FullMAP</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link href='assets/css/map/leaflet.fullscreen.css' rel='stylesheet' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css'>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link rel="stylesheet"  href="assets/css/map/style.css">
        <!-- END Stylesheets -->
    </head>
    <body>
       
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow bg-black-op-10">
                            <div class="content-header-section text-center align-parent">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">Hydro</span><span class="font-size-xl text-primary">leader</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Main Navigation -->
                        <div class="content-side content-side-full">
                            <!--
                            Mobile navigation, desktop navigation can be found in #page-header

                            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                            -->
                            <ul class="nav-main">
                                <li>
                                    <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                                </li>
                                <li class="nav-main-heading">Layout</li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                    <ul>
                                        <li>
                                            <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                        </li>
                                        <li>
                                            <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Another Link</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Another Link</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Another Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading">Other Pages</li>
                                <li>
                                    <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                                </li>
                                <li>
                                    <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Main Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700 mr-5" href="index.html">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">Hydro</span><span class="font-size-xl text-primary">leader</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <ul class="nav-main-header">
                            <li>
                                <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                <ul>
                                    <li>
                                        <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                            </li>
                            <li>
                                <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group ml-5" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header text-center">Header</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="header_style_inverse_toggle">Style</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_layout_api.html">
                                    <i class="si si-chemistry"></i> All Options (API)
                                </a>
                            </div>
                        </div>
                        <!-- END Color Themes + A few of the many header options -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="bd_search.html" method="post">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </span>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

                        <symbol id="icon-export" viewBox="0 0 24 24">
                            <path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12S18.627 0 12 0 0 5.373 0 12zm17-1h-4v8h-2v-8H7l5-6 5 6z" />
                        </symbol>
                        <symbol id="icon-add" viewBox="0 0 24 24">
                            <path
                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z" />
                        </symbol>
                        <symbol id="icon-remove" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6 13H6v-2h12v2z" />
                        </symbol>
                        <symbol id="icon-import" viewBox="0 0 24 24">
                            <path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12zM7 13h4V5h2v8h4l-5 6-5-6z" />
                        </symbol>
                        <symbol id="icon-arrow-left" viewBox="0 0 24 24">
                            <path d="M15.422 16.594 14.016 18l-6-6 6-6 1.406 1.406L10.828 12z" />
                        </symbol>
                        
                    </svg>
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                       
                            <div class="block block-themed block-mode-loading-inverse block-transparent w-100" >
                                
                                <div class="block-content block-content-full">
                                    
                                        <div id='map' style="height: 500px;">
                                            
                                        </div>
                                </div>
                            </div>
                        
                        
                        <!-- END Row #3 -->
                    </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>

        <!-- leaflet  -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


        <!-- leaflet parametrage -->
        <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.2/dist/notiflix-notify-aio-3.2.2.min.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
        <script type="text/javascript" src="assets/js/map/map.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_forms_wizard.js"></script>

    </body>
</html>