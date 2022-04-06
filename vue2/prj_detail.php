<?php
/**
* OUMAIMA SABI
* DATE:01/04/2022
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

        <title>Details projets</title>

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
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-modern main-content-boxed">
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
                                    <a href="Prj_ajouter.php"><i class="si si-compass"></i><span class="sidebar-mini-hide">Nouveau Projet</span></a>
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
                

                <!-- Blog and Sidebar -->
                <div class="content">
                    <h2 class="content-heading d-print-none">
                        <button type="button" class="btn btn-sm btn-rounded btn-primary float-right"><i class="fa fa-file-word-o"></i> Document WORD</button>
                         Projet d'investissement 
                    </h2>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Posts -->
                        <div class="col-xl-8">
                            
                            <div class="mb-50">
                                
                                <h3 class="h4 font-w700 text-uppercase mb-5">AVIS ABHT</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<i class="fa fa-fw fa-calendar mr-5"></i>'.$avis->getdate_avis_abht();
                                        ?>
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getapprouve_par();
                                        ?>
                                    </a>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getorigine_aep();
                                        ?>
                                    </a>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getetabli_par();
                                        ?>
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <?php $b = new ABHT_Service();
                                              $id=$_GET['id'];
                                              $avis = $b->findById($id);
                                              echo '<i class="fa fa-fw fa-tag mr-5"></i>'.$avis->getavis_abht();
                                        ?>
                                    </a>
                                </div>
                                <?php $b = new ABHT_Service();
                                    $id=$_GET['id'];
                                    $avis = $b->findById($id);
                                    echo '<p>'.$avis->getorigine_aep().'</p>';
                                ?>
                                
                                
                            </div>
                            <div class="mb-50">
                                <h3 class="h4 font-w700 text-uppercase mb-5">Avis SQE</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <?php $b = new SQE_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-calendar mr-5"></i>'.$avis->getdate_avis_sqe();
                                        ?>
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new SQE_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getvalide_par_sqe();
                                        ?>
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <?php $b = new SQE_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-tag mr-5"></i>'.$avis->getavis_sqe();
                                        ?>
                                        
                                    </a>
                                </div>
                                <?php $b = new SQE_Service();
                                    $id=$_GET['id'];
                                    $avis = $b->findById($id);
                                     echo '<p>'.$avis->getremarque_sup_sqe().'</p>';
                                ?>
                                
                            </div>
                            <div class="mb-50">
                                <h3 class="h4 font-w700 text-uppercase mb-5">Avis SEPRE</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <?php $b = new SEPRE_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-calendar mr-5"></i>'.$avis->getdate_avis_sepre();
                                        ?>
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <i class="fa fa-fw fa-user mr-5"></i>
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <?php $b = new SEPRE_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-tag mr-5"></i>'.$avis->getavis_sepre();
                                        ?>
                                    </a>
                                </div>
                                <?php $b = new SEPRE_Service();
                                    $id=$_GET['id'];
                                    $avis = $b->findById($id);
                                    echo '<p>'.$avis->getremarques_sup_sepre().'</p>';
                                ?>    
                            </div>
                            <div class="mb-50">
                                <h3 class="h4 font-w700 text-uppercase mb-5">Avis SGDPH</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <?php $b = new SGDPH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);   
                                            echo '<i class="fa fa-fw fa-calendar mr-5"></i>'.$avis->getdate_avis_sgdph();
                                        ?>
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new SGDPH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getvalide_par_sgdph();
                                        ?>
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <?php $b = new SGDPH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-tag mr-5"></i>'.$avis->getavis_sgdph();
                                        ?>
                                    </a>
                                </div>
                                <?php $b = new SGDPH_Service();
                                    $id=$_GET['id'];
                                    $avis = $b->findById($id);
                                    echo '<p>'.$avis->getremarque_sup_sgdph().'</p>';
                                ?> 
                            </div>
                            <div class="mb-50">
                                <h3 class="h4 font-w700 text-uppercase mb-5">avis stah</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <?php $b = new STAH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-calendar mr-5"></i>'.$avis->getdate_avis_stah();
                                        ?>
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <?php $b = new STAH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-user mr-5"></i>'.$avis->getvalide_par_stah();
                                        ?>
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <?php $b = new STAH_Service();
                                            $id=$_GET['id'];
                                            $avis = $b->findById($id);
                                            echo '<i class="fa fa-fw fa-tag mr-5"></i>'.$avis->getavis_stah();
                                        ?>
                                    </a>
                                </div>
                                <?php $b = new STAH_Service();
                                    $id=$_GET['id'];
                                    $avis = $b->findById($id);
                                    echo '<p>'.$avis->getremarque_sup_stah().'</p>';
                                ?>
                                
                                
                            </div>
                            <hr class="d-xl-none">
                        </div>
                        <!-- END Posts -->

                        <!-- Sidebar -->
                        <div class="col-xl-4">
                            <!-- Categories -->
                            <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">
                                        <i class="fa fa-fw fa-list mr-5"></i> Information 
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <ul class="nav nav-pills flex-column push">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                            <span><i class="fa fa-fw fa-book mr-5"></i>Details du projet d'investissement</span>
                                                
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <?php $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    echo '<span>'. $bb->getintitule_pr().'</span>';
                                                ?>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <?php $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    echo '<span>Province :'.$bb->getprovince().'</span>';
                                                ?>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <?php $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    echo '<span>Commune :'.$bb->getcom().'</span>';
                                                ?>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <?php $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    echo '<span>Superficie :'.$bb->getsupf().'</span>';
                                                ?>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <?php $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    $bb1=$b->dureeprj($id);
                                                    echo '<span>la date d\'arrivée au BET :'.$bb->getdate_arr_bet().'</span>';
                                                    echo '<span class="badge badge-pill badge-secondary">'.$bb1->getdate_arr_bet().' jours </span>';
                                                ?>
                                                
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- END Categories -->

                            <!-- Twitter Feed -->
                            <!-- <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">les intervenants</h3>
                                </div>
                                <div class="block-content">
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar13.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. <a class="text-elegance" href="javascript:void(0)">#startup</a> <a class="text-elegance" href="javascript:void(0)">#life</a></p>
                                            <div class="font-size-sm text-muted">10 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                            <div class="font-size-sm text-muted">15 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                            <div class="font-size-sm text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar16.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum <a href="javascript:void(0)">nunc</a> ac nisi vulputate fringilla. <a class="text-elegance" href="javascript:void(0)">#web</a> <a class="text-elegance" href="javascript:void(0)">#stuff</a></p>
                                            <div class="font-size-sm text-muted">5 days ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/img/avatars/avatar8.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                            <div class="font-size-sm text-muted">1 week ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END Twitter Feed -->

                            

                        </div>
                        <!-- END Sidebar -->
                    </div>
                </div>
                <!-- END Blog and Sidebar -->

                
            </main>
            <!-- END Main Container -->

            
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

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                Codebase.helpers('slick');
            });
        </script>
    </body>
</html>