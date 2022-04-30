<?php
/**
* OUMAIMA SABI
* DATE:08/04/2022
*/
require_once '../Couche_Service/Service_etat.php';
require_once '../Couche_Service/Service_Projet.php';
require_once '../Couche_Service/Service_sepre.php';
require_once '../Couche_Service/Service_sgdph.php';
require_once '../Couche_Service/Service_sqe.php';
require_once '../Couche_Service/Service_stah.php';
require_once '../Couche_Service/Service_abht.php';



?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>avis</title>

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

        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link href='assets/css/map/leaflet.fullscreen.css' rel='stylesheet' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css'>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <style>
        </style>
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Side Overlay -->

                            <!-- User Info -->
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">Oumaima Sabi </a>
                            </div>
                            <!-- END User Info -->
                        </div>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="content-side">
                        <!-- Search -->
                        <div class="block pull-t pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form action="be_pages_generic_search.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Search -->

                        <!-- Mini Stats -->
                        <div class="block pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                        <div class="font-size-h4">460</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                        <div class="font-size-h4">728</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                        <div class="font-size-h4">$7,860</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Friends -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Lori Moore
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Jack Estrada
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Betty Kelley
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Jose Mills
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Friends -->

                        <!-- Activity -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="list list-activity">
                                    <li>
                                        <i class="si si-wallet text-success"></i>
                                        <div class="font-w600">+$29 New sale</div>
                                        <div>
                                            <a href="javascript:void(0)">Admin Template</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-close text-danger"></i>
                                        <div class="font-w600">Project removed</div>
                                        <div>
                                            <a href="javascript:void(0)">Best Icon Set</a>
                                        </div>
                                        <div class="font-size-xs text-muted">26 min ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-pencil text-info"></i>
                                        <div class="font-w600">You edited the file</div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-file-text-o"></i> Docs.doc
                                            </a>
                                        </div>
                                        <div class="font-size-xs text-muted">3 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-plus text-success"></i>
                                        <div class="font-w600">New user</div>
                                        <div>
                                            <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                        </div>
                                        <div class="font-size-xs text-muted">5 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-wrench text-warning"></i>
                                        <div class="font-w600">App v5.5 is available</div>
                                        <div>
                                            <a href="javascript:void(0)">Update now</a>
                                        </div>
                                        <div class="font-size-xs text-muted">8 hours ago</div>
                                    </li>
                                    <li>
                                        <i class="si si-user-follow text-pulse"></i>
                                        <div class="font-w600">+1 Friend Request</div>
                                        <div>
                                            <a href="javascript:void(0)">Accept</a>
                                        </div>
                                        <div class="font-size-xs text-muted">1 day ago</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Activity -->

                        <!-- Profile -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-refresh mr-5"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Profile -->

                        <!-- Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Online Status</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Public Profile</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Auto updates</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">API Access</span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">API Requests</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
           
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
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
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
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Oumaima Sabi</a>
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
                                    <a href="Avis_prj.php"><i class="si si-compass"></i><span class="sidebar-mini-hide">Gestion des Projets</span></a>
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
                        <div class="col-4 col-xl-2">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div>
                                    <?php $b = new SEPRE_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Avis SEPRE</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-xl-2">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-wallet fa-2x text-earth-light"></i>
                                    </div>
                                    <?php $b = new SGDPH_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-earth"><span data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</span></div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Avis SGDPH</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-xl-2">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>
                                    <?php $b = new SQE_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Avis SQE</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-xl-2">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>
                                    <?php $b = new STAH_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Avis STAH</div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-4 col-xl-2">
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
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Cloturé</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-12">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                        <h3 class="block-title">Projet d'investissement en cours</h3>
                                        <div class="block-options">
                                            <a type="button" href="ajouter_projet.php" class="btn btn-outline-success mr-5 mb-5">
                                                <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                            </a>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                <div class="block-content block-content-full">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                                <table class="table table-bordered table-striped table-vcenter" id="tab" style="overflow-x:auto;">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th >Action</th>
                                            <th >Avis Sepre</th>
                                            <th >Avis Sqe</th>
                                            <th >Avis Sgdph</th>
                                            <th >Avis Stah</th>
                                            <th >Avis Abht</th>
                                            <th >id_projet</th>
                                            <th >numéro de dossier</th>
                                            <th >intitule_projet</th>
                                            <th >la durée en jour</th>
                                            <th >Etat du dossier </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
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

        <!-- leaflet  -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


        <!-- leaflet parametrage -->
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.5/dist/notiflix-aio-3.2.5.min.js"></script>
        <script>
            $(document).ready( function() {
                
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion1/data/data_chart_etat.php",
                    type:"GET",
                    data:'data',
                    // dataType:"json",
                    // dataSrc: 'data',
                    success:function(data){
                        console.log(data);
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;
                        // console.log(d1);
                        var nb= Object.keys(d.data[0])[0]; // return name of index1
                        // console.log(d.data[2].nombre);

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].etat);
                        c.push(d.data[count].color);
                                }
                        // console.log(n);
                        
                        var ctxt=$("#pieChart").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:c,
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2
                        }
                        );
                    },
                });

                $.ajax({
                    url:"http://localhost/projectpfe/projetversion1/data/data_chart_number.php",
                    type:"GET",
                    data:'data',
                    // dataType:"json",
                    // dataSrc: 'data',
                    success:function(data){
                        console.log(data);
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;
                        // console.log(d1);
                        var nb= Object.keys(d.data[0])[0]; // return name of index1
                        // console.log(d.data[2].nombre);

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        // console.log(n);
                        
                        var ctxt=$("#piechart2").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:c,
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"bar",
                        data: data3
                        }
                        );
                    },
                });

                // $.ajax({
                //     url:"http://localhost/projectpfe/data/data_chart_mois.php",
                //     type:"GET",
                //         data:'data',
                //         // dataType:"json",
                //         // dataSrc: 'data',
                            
                //         success:function(data){
                //             console.log(data);
                //             var d =JSON.parse(data);
                //             var d1= Object.keys(d.data).length;
                //             // console.log(d1);
                //             var nb= Object.keys(d.data[0])[0]; // return name of index1
                //             // console.log(d.data[2].nombre);

                //             var n = [];
                //             var p = [];
                //             var c=[];
                //             var e=[];
                //             var color=[];
                //             var ma=[];
                //             for(var count = 0; count <d1; count++){
                //                 n.push(d.data[count].nombre);
                //                 p.push(d.data[count].mois);
                //                 c.push(d.data[count].annee);
                //                 e.push(d.data[count].etat_dossier);
                //                 color.push(d.data[count].color);
                //                 ma.push(d.data[count].mois_annee);
                //                 }
                //             // console.log(n);
                        
                //             var ctxt=$("#barchart").get(0).getContext('2d');
                //             var data2={
                //                 labels :ma,
                //                 datasets : [
                //                 {
                //                     data: n,
                //                     backgroundColor:color,
                //                 },
                //                 ]
                //             }
                            

                //         var chart1= new Chart ( ctxt , {
                //             type:"bar",
                //             data: data2,
                //             options: {
                //             legend: { display: false },
                //             title: {
                //                 display: true,
                //                 // text: 'Nombre des projets chaque année selon leur etat'
                //             }
                //             }
                //         });
                //     },
                // });

                

            });
            var ajax1={url: "http://localhost/projectpfe/projetversion1/data/data_dure_prj_new.php",type: 'POST',dataSrc: 'data'};
            var ajax2 ={url: "http://localhost/projectpfe/projetversion1/data/data_dureemoin10.php",type: 'POST',dataSrc: 'data'};
            var ajax3={url: "http://localhost/projectpfe/projetversion1/data/data_chartentre10et30.php",type: 'POST',dataSrc: 'data'};
            var ajax4={url: "http://localhost/projectpfe/projetversion1/data/data_dureeplus30.php",type: 'POST',dataSrc: 'data'};
            var column1=[{data:'id',
                            render: function (data) {
                                    return '<a href="http://localhost/projectpfe/projetversion1/vue2/details.php?id='+ data+'"><i class="si si-eye fa-2x"/></a>'
                                },
                            orderable: false},
                            {data:'id'},
                            { data: 'numero_dossier' },
                            {data:'intitule_projet'},
                            {data:'duree'},
                            {data:'etat_dossier'}
                        ];
            var column2=[{
                            data: 'action',
                            className: "dt-center editor-edit",
                            render: function (data) {
                                    return '<span class="badge badge-success">'+ data+'</span>'},
                            orderable: false,   
                            },
                            { data:'id'},
                            { data: 'numero_dossier' },
                            {data:'intitule_projet'},
                            {data:'duree'},
                            {data:'etat_dossier'},  
                        ];
            var column3= [{
                            data: 'action',
                            className: "dt-center editor-edit",
                            render: function (data) {
                                    return '<span class="badge badge-warning">'+ data+'</span>'},
                            orderable: false,   
                            },
                            { data:'id'},
                            { data: 'numero_dossier' },
                            {data:'intitule_projet'},
                            {data:'duree'},
                            {data:'etat_dossier'},
                            
                        ];
            var column4=[{
                            data: 'action',
                            className: "dt-center editor-edit",
                            render: function (data) {
                                    return '<span class="badge badge-danger">'+ data+'</span>'},
                            orderable: false,   
                            },
                            { data:'id'},
                            { data: 'numero_dossier' },
                            {data:'intitule_projet'},
                            {data:'duree'},
                            {data:'etat_dossier'},
                            
                        ];
                        var column5=[
                            {data:'id', "width": "160px",
                            render: function (data) {
                                    return '<a id="edit" href="Prj_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="supprimerprojet.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" href="http://localhost/projectpfe/vue2/details.php?id='+ data+'"><i class="fa fa-info"></i></a><a class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" href="#0"><i class="fa fa-line-chart"></i></a>';
                                },
                            orderable: false}, 
                            {data: function (data,type,row) {
                                if (data.avis_sepre == null){
                                    return '<a type="button" href="ajouter_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.avis_sqe == null){
                                    return '<a type="button" href="ajouter_avis.php?id='+data.id+'#btabs-animated-slideup-SQE" class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.avis_sgdph == null){
                                    return '<a type="button" href="ajouter_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.avis_stah == null){
                                    return '<a type="button" href="ajouter_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                                },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.avis_sepre !== null && data.avis_sqe !== null && data.avis_sgdph !== null && data.avis_stah !== null && data.avis_abht == null){
                                    return '<a type="button" href="ajouter_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5" disabled><i class="fa fa-exclamation"></i></a>';
                                }
                                
                            },
                            orderable: false},
                            { data:'id',className:"data1"},
                            { data: 'numero_dossier',className:"data2" },
                            {data:'intitule_projet',className:"data3"},
                            {data:'duree',
                            render: function (data) {
                                if ( data <= 10 ) {
                                    return '<span class="badge badge-success">'+ data+' jours</span>';
                                }else if(data > 10 && data <= 30 )
                                {
                                    return '<span class="badge badge-warning">'+ data+' jours </span>';
                                }
                                else{
                                    return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                }
                            },
                            orderable: false },
                            {data:'etat_dossier'},
                            
                        ];

            $('#example2').DataTable({
                "createdRow": function( row, data ) {
                        if ( data['duree'] > 30 ) {        
                            $(row).addClass('table-danger');
                        }
                        // else{
                        //     if ( data['duree'] < 10 )
                        //     {        
                        //         $(row).addClass('table-info');
                        //     }
                        // }
                        
                    },
                    "paging"   : true,
                    "lengthChange": true,
                    "searching "  : true,
                    "ordering"    : true,
                    "info  "      : true,
                    "autoWidth"   : true,
                    "scrollX": true,
                    "sScrollX": '100%',
                    "pageLength": 5,
                        ajax: ajax1 ,
                        columns:column1,
                        select: true,
                        retrieve: true,
            });

            $('#tab').DataTable({
                "paging"   : true,
                "lengthChange": true,
                "searching "  : true,
                "ordering"    : true,
                "info  "      : true,
                "autoWidth"   : true,
                "scrollX": true,
                "sScrollX": '100%',
                "pageLength": 5,
                ajax: ajax1,
                columns:column5,
                columnDefs: [
               { width: 200, targets: 0 }
               ],
               fixedColumns: true
            });

            function showDataSet1(){
                $('#example1').DataTable({
                    "paging"   : true,
                    "lengthChange": true,
                    "searching "  : true,
                    "ordering"    : true,
                    "info  "      : true,
                    "autoWidth"   : true,
                    "scrollX": true,
                    "sScrollX": '100%',
                    "pageLength": 5,
                    ajax: ajax3,
                    columns:column3,
                });
            };

            function showDataSet2(){
                    $('#example1').DataTable({
                    "paging"   : true,
                    "lengthChange": true,
                    "searching "  : true,
                    "ordering"    : true,
                    "info  "      : true,
                    "autoWidth"   : true,
                    "scrollX": true,
                    "sScrollX": '100%',
                    "pageLength": 5,
                    ajax: ajax3,
                    columns:column3,
                });
            };

            function showDataSet3(){
                $('#example1').DataTable({
                    "paging"   : true,
                    "lengthChange": true,
                    "searching "  : true,
                    "ordering"    : true,
                    "info  "      : true,
                    "autoWidth"   : true,
                    "scrollX": true,
                    "sScrollX": '100%',
                    "pageLength": 5,
                    ajax: ajax4,
                    columns:column4,
                });
            };

        $.ajax({
            url:"http://localhost/projectpfe/projetversion1/data/data_chart_bar_last_week.php",
            type:"GET",
             data:'data',
                // dataType:"json",
                // dataSrc: 'data',
			
            success:function(data){
                console.log(data);
                var d =JSON.parse(data);
                var d1= Object.keys(d.data).length;
                // console.log(d1);
                var nb= Object.keys(d.data[0])[0]; // return name of index1
                // console.log(d.data[2].nombre);

                var n = [];
                var p = [];
                var color=[];
                
                for(var count = 0; count <d1; count++){
                    n.push(d.data[count].nombre);
                    if(d.data[count].jour==="0"){
                        p.push('Lundi');
                    }
                    if(d.data[count].jour==="1"){
                        p.push('Mardi');
                    }
                    if(d.data[count].jour==="2"){
                        p.push('Mercredi');
                    }
                    if(d.data[count].jour==="3"){
                        p.push('Jeudi');
                    }
                    if(d.data[count].jour==="4"){
                        p.push('Vendredi');
                    }
                    if(d.data[count].jour==="5"){
                        p.push('Samedi');
                    }
                    if(d.data[count].jour==="6"){
                        p.push('Dimanche');
                    }
                    color.push(d.data[count].color);
                }
                // console.log(n);
        
                var ctxt=$("#bar1").get(0).getContext('2d');
                var data2={
                    labels :p,
                    datasets : [
                    {
                        data: n,
                        backgroundColor:color,
                        tension: 0.5
                    },
                    ]
                }
            

                var chart1= new Chart ( ctxt , {
                    type:"line",
                    data: data2,
                    options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Nombre des projets chaque année selon leur etat'
                    }
                    }
                });
            },
        });

        $.ajax({
            url:"http://localhost/projectpfe/projetversion1/data/data_line_mois_anne_new.php",
            type:"GET",
             data:'data',
                // dataType:"json",
                // dataSrc: 'data',
			
            success:function(data){
                console.log(data);
                var d =JSON.parse(data);
                var d1= Object.keys(d.data).length;
                // console.log(d1);
                var nb= Object.keys(d.data[0])[0]; // return name of index1
                // console.log(d.data[2].nombre);

                var n = [];
                var p = [];
                var c= [];
                var color=[];
                var date=[];
                
                for(var count = 0; count <d1; count++){
                    n.push(d.data[count].nombre);
                    p.push(d.data[count].mois);
                    c.push(d.data[count].annee);
                    color.push(d.data[count].color);
                    date.push(d.data[count].date);
                }
                // console.log(n);
                var ctxt=$("#bar2").get(0).getContext('2d');
                var data2={
                    labels :date,
                    datasets : [
                    {
                        data: n,
                        backgroundColor:color,
                        tension: 0.5
                    },
                    ]
                }
            

                var chart1= new Chart ( ctxt , {
                    type:"line",
                    data: data2,
                    options: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Nombre des projets chaque année selon leur etat'
                    }
                    }
                });
            },
        });
        </script>
    </body>
</html>