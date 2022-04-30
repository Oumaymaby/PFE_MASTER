<?php
/**
* OUMAIMA SABI
* DATE:21/04/2022
*/
require_once '../Couche_Service/Service_etat.php';
require_once '../Couche_Service/Service_Projet.php';
    

?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Statistics</title>

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

         <!-- Page JS Plugins CSS -->
         <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link href='assets/css/map/leaflet.fullscreen.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        
        
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
    </head>
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
           
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">H</span><span class="text-primary">L</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="accueil.php">
                                        <span class="font-size-xl text-dual-primary-dark">Hydro</span><span class="font-size-xl text-primary">leader</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Sabi</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="accueil.php"><i class="si si-compass"></i><span class="sidebar-mini-hide">tableau de bord</span></a>
                                </li>
                                <li>
                                    <a href="Avis_prj.php"><i class="si si-compass"></i><span class="sidebar-mini-hide">Gestion des Avis</span></a>
                                </li>
                                <li>
                                    <a href="fullmap2.php"><i class="si si-compass"></i><span class="sidebar-mini-hide">Carte</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
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
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="page-header-options-dropdown">
                                <h6 class="dropdown-header">Header</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_layout_api.html">
                                    <i class="si si-chemistry"></i> All Options (API)
                                </a>
                            </div>
                        </div>
                        <!-- END Layout Options -->

                        <!-- Color Themes (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
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
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">Sidebar Style</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_ui_color_themes.html">
                                    <i class="fa fa-paint-brush"></i> All Color Themes
                                </a>
                            </div>
                        </div>
                        <!-- END Color Themes -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Oumaima Sabi<i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </span>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">
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
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div>
                                    <?php $b = new Projet_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-wallet fa-2x text-earth-light"></i>
                                    </div>
                                    <?php $b = new Etat_Service();
                                        $bb= $b->nbnew();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-earth"><span data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</span></div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet en cours</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>
                                    <?php $b = new Etat_Service();
                                        $bb= $b->nbclose();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet Cloturé</div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-users fa-2x text-pulse"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                                </div>
                            </a>
                        </div> -->
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-lg-9">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Statistique de la durée du projets selon chaque Chaque service</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="ajouter_projet.php" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                        </a>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                            <i class="si si-pin"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 15%;">Etat du service</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">La date d'avis</th>
                                            </tr>
                                        </thead>
                                        <tbody class="js-table-sections-header show table-active">
                                            <tr>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-right"></i>
                                                </td>
                                                <td class="font-w600">Service SEPRE</td>
                                                <td>
                                                    <span class="badge badge-warning">Trial</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <em class="text-muted">October 24, 2017 12:16</em>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">SEPRE</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 3, 2017 12:16</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">BET</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 6, 2017 12:16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody class="js-table-sections-header">
                                            <tr>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-right"></i>
                                                </td>
                                                <td class="font-w600">Service SQE</td>
                                                <td>
                                                    <span class="badge badge-warning">Trial</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <em class="text-muted">October 5, 2017 12:16</em>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">SQE</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 17, 2017 12:16</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">BET</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 25, 2017 12:16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody class="js-table-sections-header">
                                            <tr>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-right"></i>
                                                </td>
                                                <td class="font-w600">Service STAH</td>
                                                <td>
                                                    <span class="badge badge-danger">Disabled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <em class="text-muted">October 18, 2017 12:16</em>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">STAH</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 9, 2017 12:16</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">SQE</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 6, 2017 12:16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody class="js-table-sections-header">
                                            <tr>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-right"></i>
                                                </td>
                                                <td class="font-w600">Service SGDPH</td>
                                                <td>
                                                    <span class="badge badge-success">VIP</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <em class="text-muted">October 17, 2017 12:16</em>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">SGDPH</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 24, 2017 12:16</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">BET</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 20, 2017 12:16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody class="js-table-sections-header">
                                            <tr>
                                                <td class="text-center">
                                                    <i class="fa fa-angle-right"></i>
                                                </td>
                                                <td class="font-w600">Service ABHT</td>
                                                <td>
                                                    <span class="badge badge-primary">Personal</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <em class="text-muted">October 1, 2017 12:16</em>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">ABHT</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 4, 2017 12:16</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"></td>
                                                <td class="font-w600 text-success">BET</td>
                                                <td class="font-size-sm">Stripe</td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">October 4, 2017 12:16</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">
                                        <small> Progrès des Avis</small>
                                    </h3>
                                    <div class="block-options">
                                        <!-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button> -->
                                       
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                            <i class="si si-pin"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">

                                    <div class="font-w600 mt-10">Service SEPRE
                                    </div>
                                    <div class="progress push">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">30%</span>
                                        </div>
                                    </div>

                                    <div class="font-w600 mt-10">Service SQE
                                    </div>
                                    <div class="progress push">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">50%</span>
                                        </div>
                                    </div>

                                    <div class="font-w600 mt-10">Service STAH
                                    </div>
                                    <div class="progress push">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">70%</span>
                                        </div>
                                    </div>

                                    <div class="font-w600 mt-10">Service SGDPH
                                    </div>
                                    <div class="progress push">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">90%</span>
                                        </div>
                                    </div>

                                    <div class="font-w600 mt-10"> Service ABHT
                                    </div>
                                    <div class="progress push">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progress-bar-label">100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <!-- <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div> -->
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">oumaima sabi</a> &copy; <span class="js-year-copy">2022</span>
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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>

         <!-- Page JS Plugins -->
         <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>

        
        <script>
             jQuery(function () {
                // Init page helpers (Table Tools helper)
                Codebase.helpers('table-tools');
            });

        </script>
    </body>
</html>