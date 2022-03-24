<?php
/**
* OUMAIMA SABI
* DATE:08/03/2022
*/
require_once '../Couche_Service/Service_Projet.php';
require_once '../Couche_Service/Service_abht.php';
require_once '../Couche_Service/Service_sepre.php';
require_once '../Couche_Service/Service_SQE.php';
require_once '../Couche_Service/Service_SGDPH.php';
require_once '../Couche_Service/Service_stah.php';


?>

<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Detail</title>

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


        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
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
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
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
                                            <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Lori Moore
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar16.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Albert Ray
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Lisa Jenkins
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Ralph Murray
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
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
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
                                <li class="open">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_dashboard.html">Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard2.html">Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a class="active" href="be_pages_dashboard3.html">Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard4.html">Dashboard 4</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>

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
                    <!-- Invoice -->
                    <h2 class="content-heading d-print-none">
                        <button type="button" class="btn btn-sm btn-rounded btn-primary float-right"><i class="fa fa-file-word-o"></i> Document WORD</button>
                        <i class="fa fa-file-text "></i> Projet d'inverstissement 
                    </h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><i class="fa fa-info "></i> Information sur le projet d'investissement</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Intro Category -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-default">
                                    <tr>
                                        <th colspan="2">Details</th>
                                        <th class="d-none d-md-table-cell" style="width: 180px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-note fa-2x"></i>
                                        </td>
                                        <td>
                                        <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Intitulé du projet</a>
                                            <?php $b = new Projet_Service();
                                                $id=$_GET['id'];
                                                $bb = $b->findById($id);
                                                echo '<div class="text-muted my-5">'. $bb->getintitule_pr().'</div>';
                                                echo '<div class="font-size-sm text-muted">
                                                <strong class="font-w600">Maitre d\'ouvrage:</strong> <a href="javascript:void(0)"> '. $bb->getmaitre_ouv() .'</a></div>'; 
                                            ?>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <?php $b = new Projet_Service();
                                                $id=$_GET['id'];
                                                $bb = $b->findById($id);
                                                echo '<span class="font-size-sm">Province <a href="be_pages_generic_profile.html">'.$bb->getprovince().'</a><br>date d\'arrivée au BET <span class="badge badge-pill badge-success">'.$bb->getdate_arr_bet().'</span></span>';
                                            ?>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-map-pin fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Superficie</a>
                                            <?php
                                                $b = new Projet_Service();
                                                $id=$_GET['id'];
                                                $bb = $b->findById($id); 
                                                echo '<div class="text-muted my-5">'.$bb->getsupf().'</div>';
                                                echo '<div class="font-size-sm text-muted">
                                                <strong class="font-w600">Architecte:</strong> <a href="javascript:void(0)"><span class="badge badge-pill badge-success">'.$bb->getarchitecte().'</span></a>
                                                </div>'
                                            ?>
                                            
                                            
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                        <?php
                                            $b = new Projet_Service();
                                            $id=$_GET['id'];
                                            $bb = $b->findById($id); 
                                            $bb1=$b->dureeprj($id);
                                            echo '<span class="font-size-sm"> Commune <a href="be_pages_generic_profile.html"><span class="badge badge-pill badge-success">'.$bb->getcom().'</span></a><br>durée <span class="badge badge-pill badge-success">'.$bb1->getdate_arr_bet().' </span></span>';
                                        ?>
                                            
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="text-center">
                                            <i class="si si-badge fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Terms &amp; Conditions</a>
                                            <div class="text-muted my-5">Please read and comply with our forum’s rules</div>
                                            <div class="font-size-sm text-muted">
                                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">by <a href="be_pages_generic_profile.html">Amanda Powell</a><br>on <em>January 21, 2017</em></span>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <!-- END Intro Category -->
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><i class="fa fa-info "></i>Coordonnée spatiale du projet d'investissement</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div id='map' style="height: 500px;"></div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-header block-header-default" style='background-color:lightgray'>
                            <h3 class="block-title"  ><i class="si si-notebook "></i> Volet de l'ABHT</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn btn-sm btn-rounded btn-primary float-right" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Imprimer PDF
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- Company Info -->
                                <div class="col-6">
                                    <p class="h3">Remarque ABHT </p>
                                </div>
                                <!-- END Company Info -->

                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;">Id projet</th>
                                            <th>Avis ABHT</th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Date Avis ABHT </th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Approuvé par </th>
                                            <th class="text-right" style="width: 120px;text-transform: capitalize ">Etabli par </th>
                                            <th class="text-right" style="width: 120px; text-transform: capitalize ;">Valide par </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<td class="text-center"><span class="badge badge-pill badge-success">'.$avis->getid_pr().'</span></td>';
                                        ?>
                                            <td>
                                                <?php $b = new ABHT_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo '<p class="font-w600 mb-5"><span class="badge badge-pill badge-danger">'.$avis->getavis_abht().'</span></p>';
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php $b = new ABHT_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getdate_avis_abht();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new ABHT_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getapprouve_par();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new ABHT_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getorigine_aep();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new ABHT_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getetabli_par();
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                            <!-- END Footer -->
                        </div>
                    </div>
                    

                  <div class="block">
                        <div class="block-header block-header-default" style='background-color:lightgray'>
                            <h3 class="block-title"  ><i class="si si-notebook "></i> Volet de SEPRE</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn btn-sm btn-rounded btn-primary float-right" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Imprimer PDF
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- Company Info -->
                                <div class="col-6">
                                    <p class="h3">Remarque SEPRE </p>
                                </div>
                                <!-- END Company Info -->

                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;">Id projet</th>
                                            <th>Avis SEPRE</th>
                                            <th>Remarque Sepre</th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Date Avis SEPRE </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $b = new SEPRE_Service();
                                                $id=$_GET['id'];
                                                $avis = $b->findById($id);
                                                if(is_null($avis)){
                                                    echo'';
                                                }else{
                                                    
                                                    echo '<td class="text-center"><span class="badge badge-pill badge-success">'.$avis->getid_pr().'</span></td>';
                                                }
                                                
                                                
                                            ?>
                                            <td>
                                                <?php $b = new SEPRE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo '<p class="font-w600 mb-5"><span class="badge badge-pill badge-danger">'.$avis->getavis_sepre().'</span></p>';
                                                ?>
                                            </td>
                                            <td >
                                                <?php $b = new SEPRE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getremarques_sup_sepre();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new SEPRE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getdate_avis_sepre();
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            
                            <!-- END Footer -->
                        </div>

                        
                    </div>

                    <div class="block">
                        <div class="block-header block-header-default" style='background-color:lightgray'>
                            <h3 class="block-title"  ><i class="si si-notebook "></i> Volet de SQE</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn btn-sm btn-rounded btn-primary float-right" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Imprimer PDF
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- Company Info -->
                                <div class="col-6">
                                    <p class="h3">Remarque SQE </p>
                                </div>
                                <!-- END Company Info -->

                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;">Id projet</th>
                                            <th>Avis SQE</th>
                                            <th>Remarque SQE</th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Date Avis SQE </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $b = new SQE_Service();
                                                $id=$_GET['id'];
                                                $avis = $b->findById($id);   
                                                echo '<td class="text-center"><span class="badge badge-pill badge-success">'.$avis->getid_pr().'</span></td>';
                                            ?>
                                            <td>
                                                <?php $b = new SQE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo '<p class="font-w600 mb-5"><span class="badge badge-pill badge-danger">'.$avis->getavis_sqe().'</span></p>';
                                                ?>
                                            </td>
                                            <td >
                                                <?php $b = new SQE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getremarque_sup_sqe();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new SQE_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getdate_avis_sqe();
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            
                            <!-- END Footer -->
                        </div>

                        
                    </div>

                    <div class="block">
                        <div class="block-header block-header-default" style='background-color:lightgray'>
                            <h3 class="block-title"  ><i class="si si-notebook "></i> Volet de SGDPH</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn btn-sm btn-rounded btn-primary float-right" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Imprimer PDF
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- Company Info -->
                                <div class="col-6">
                                    <p class="h3">Remarque SGDPH</p>
                                </div>
                                <!-- END Company Info -->

                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;">Id projet</th>
                                            <th>Avis SGDPH</th>
                                            <th>Remarque SGDPH</th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Date Avis SGDPH </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $b = new SGDPH_Service();
                                                $id=$_GET['id'];
                                                $avis = $b->findById($id);   
                                                echo '<td class="text-center"><span class="badge badge-pill badge-success">'.$avis->getid_pr().'</span></td>';
                                            ?>
                                            <td>
                                                <?php $b = new SGDPH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo '<p class="font-w600 mb-5"><span class="badge badge-pill badge-danger">'.$avis->getavis_sgdph().'</span></p>';
                                                ?>
                                            </td>
                                            <td >
                                                <?php $b = new SGDPH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getremarque_sup_sgdph();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new SGDPH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getdate_avis_sgdph();
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            
                            <!-- END Footer -->
                        </div>

                        
                    </div>

                    <div class="block">
                        <div class="block-header block-header-default" style='background-color:lightgray'>
                            <h3 class="block-title"  ><i class="si si-notebook "></i> Volet de STAH</h3>
                            <div class="block-options">
                                <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
                                <button type="button" class="btn btn-sm btn-rounded btn-primary float-right" onclick="Codebase.helpers('print-page');">
                                    <i class="si si-printer"></i> Imprimer PDF
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Invoice Info -->
                            <div class="row my-20">
                                <!-- Company Info -->
                                <div class="col-6">
                                    <p class="h3">Remarque STAH</p>
                                </div>
                                <!-- END Company Info -->

                                <!-- END Client Info -->
                            </div>
                            <!-- END Invoice Info -->

                            <!-- Table -->
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 60px;">Id projet</th>
                                            <th>Avis STAH</th>
                                            <th>Remarque STAH</th>
                                            <th class="text-center" style="width: 120px;text-transform: capitalize ">Date Avis STAH </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $b = new STAH_Service();
                                                $id=$_GET['id'];
                                                $avis = $b->findById($id);   
                                                echo '<td class="text-center"><span class="badge badge-pill badge-success">'.$avis->getid_pr().'</span></td>';
                                            ?>
                                            <td>
                                                <?php $b = new STAH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo '<p class="font-w600 mb-5"><span class="badge badge-pill badge-danger">'.$avis->getavis_stah().'</span></p>';
                                                ?>
                                            </td>
                                            <td >
                                                <?php $b = new STAH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getremarque_sup_stah();
                                                ?>
                                            </td>
                                            <td class="text-right">
                                                <?php $b = new STAH_Service();
                                                    $id=$_GET['id'];
                                                    $avis = $b->findById($id);
                                                    echo $avis->getdate_avis_stah();
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Table -->

                            <!-- Footer -->
                            
                            <!-- END Footer -->
                        </div>

                        
                    </div>

                   
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Oumaima Sabi <i class="fa fa-heart text-pulse"></i></a>
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

         <!-- leaflet  -->
         <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


        <!-- leaflet parametrage -->
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>

        <script>
            var prj2 = new L.GeoJSON.AJAX("http://localhost/projectpfe/datageojson/data_prj_geojson_id.php?id="+id );
            var map = L.map('map', {fullscreenControl: {pseudoFullscreen: true}, measureControl: true }).setView([31.630000,-8.008889], 11);

            /*layer googleStreets */
            var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
            });
            googleStreets.addTo(map);

            /*layer google satellites */
            var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            });
            googleSat.addTo(map);

            /*layer watercolormap */
            var Stamen_Watercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
            attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            minZoom: 1,
            maxZoom: 16,
            ext: 'jpg'
            });
            Stamen_Watercolor.addTo(map);

            // Open Street Map base map
            var osm = L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a>'
            }).addTo(map);

            /*fonction de l'envenement click*/
            function onMapClick(e) {
            popup
            .setLatLng(e.latlng)
            .setContent('You clicked the map at ' + e.latlng.toString())
            .openOn(map);
            };

            // Geosearch
            L.Control.geocoder().addTo(map);

            //drawedit
            let editableLayers = new L.FeatureGroup();

            editableLayers.on("click", function (e) {
            console.log("editableLayers click");
            console.log(e);
            });

            editableLayers.on("touchstart", function (e) {
            console.log("editableLayers touchstart");
            console.log(e);
            });

            map.addLayer(editableLayers);

            let drawControl = new L.Control.Draw({
            position: "topright",
            draw: {
            polyline: true,
            polygon: {
            allowIntersection: true,
            drawError: {
            color: "#e1e100",
            message: "<strong>Oh snap!<strong> you can't draw that!"
            },
            shapeOptions: {
            color: "#bada55",
            clickable: true
            }
            },
            circle: true,
            circlemarker: true,
            rectangle: {
            shapeOptions: {
            clickable: true 
            } 
            },

            marker: true 
            },

            edit: {
            featureGroup: editableLayers,
            remove: true 
            } 
            });
            map.addControl(drawControl);

            map.on(L.Draw.Event.CREATED, function (e) {
            let layer = e.layer;
            editableLayers.addLayer(layer);
            layer.on("click", function (e) {
            console.log("layer click");
            console.log(e);
            });
            layer.on("touchstart", function (e) {
            console.log("layer touchstart");
            console.log(e);
            });
            editableLayers.on("click", function (e) {
            console.log("editableLayers2 click");
            console.log(e);
            });
            editableLayers.on("touchstart", function (e) {
            console.log("editableLayers2 touchstart");
            console.log(e);
            });
            });

            L.Measure = {
            linearMeasurement: "Distance measurement",
            areaMeasurement: "Area measurement",
            start: "1",
            meter: "m",
            kilometer: "km",
            squareMeter: "m²",
            squareKilometers: "km²",
            };

            var measure = L.control.measure({position: 'topleft'}).addTo(map);

            //Print
            L.control.browserPrint().addTo(map);

            //Echelle
            L.control.scale().addTo(map);


            //base layers
            var baseLayers = {
            "Google Map":googleStreets,
            "Satellite":googleSat,
            "Water Color":Stamen_Watercolor,
            "OpenStreetMap": osm,
            };
            
            //affichage des projests d'inverstissements  
            var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/datageojson/data_prj_gejson.php",{onEachFeature: function(feature, layer) {
                    layer.bindPopup("<p>"+feature.properties.intitule_projet+"</p>");
            }});
            
            var over_projet = {
                maxZoom: 16,
                tolerance: 1,
                debug: 3,
                style: {
                fillColor: "red",
                color: "red",
                },
            };

            var overlays = {"projet": $prj};
            L.control.layers(baseLayers,overlays).addTo(map);

            var id= <?php echo $_GET['id'] ?>;

            
            // console.log($prj1);

            var Locations = "http://localhost/projectpfe/datageojson/data_prj_geojson_id.php?id="+id;

            var polygonsWithCenters = L.layerGroup();

            var geo =new L.GeoJSON.AJAX(Locations, {
                onEachFeature: function (feature, layer) {
                if (feature.geometry.type === "MultiPolygon") {
                var center = layer.getBounds().getCenter();
                var marker = L.marker(center).bindPopup("voilà l'emplacement du projet d'investissement ");
                var polygonAndItsCenter = L.layerGroup([layer, marker]);
                polygonAndItsCenter.addTo(polygonsWithCenters);
                }
            },
            });
            console.log(geo);
            // geoJsonLayer.addTo(map);  // No!!
            polygonsWithCenters.addTo(map);

            var prj1 = new L.GeoJSON.AJAX("http://localhost/projectpfe/datageojson/data_prj_geojson_id.php?id="+id);
            var laglong= new L.GeoJSON.AJAX("http://localhost/projectpfe/datageojson/data_prj_geojson_id.php?id="+id,{
                onEachFeature :function (feature){
                    if (feature.geometry.type === "MultiPolygon")
                    {
                        var polygone = feature.geometry.coordinates;

                    } 
                }
            });
            // console.log(laglong);
            // console.log(prj1);
            // console.log(L.polygon(prj1).getBounds().getCenter());
            var polygon1 = L.polygon(prj1).addTo(map);

            
        </script>
    </body>
</html>