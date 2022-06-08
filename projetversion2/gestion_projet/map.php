<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Carte dynamique</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

         <!-- <link rel="stylesheet" href="assets/css/map/stylemap.css"/> -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link href='assets/css/map/leaflet.fullscreen.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.css" />
        
		

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		<title>Leaflet Layers Control Example</title>
        <link rel="stylesheet" type="text/css"
      href="https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12.0.0/dist/css/tabby-ui.min.css">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/tabby@12.0.0/dist/js/tabby.polyfills.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
		<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    </head>
    <style>
		#map {
			width: 100%;
			height: 100vh;
			align: center;
		}

		.info {
			padding: 30px 30px;
			font: 14px/16px Arial, Helvetica, sans-serif;
			/* background: white; */
			background: #f4f1f1;
			
			box-shadow: 0 0 15px rgba(0,0,0,0.2);
			border-radius: 5px;
			max-width: 500px;
			max-height: 500px;
			overflow: scroll;
		}
		
		.info h4 {
			margin: 0 0 5px;
			color: 'white';
		}

		.info h5 {
			margin: 0 0 5px;
			color: 'white';
		}

		.legend {
			right:0px;
			text-align: left;
			line-height: 18px;
			color: #555;
		}
		.legend i {
			width: 18px;
			height: 18px;
			float: left;
			margin-right: 8px;
			opacity: 0.7;
		}
		button {
			position:absolute;
			top:410px;
		}

		.legend {
		padding: 6px 8px;
		font: 14px Arial, Helvetica, sans-serif;
		background: white;
		background: rgba(255, 255, 255, 0.8);
		/*box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);*/
		/*border-radius: 5px;*/
		line-height: 24px;
		color: #555;
		}
		.legend h4 {
		text-align: center;
		font-size: 16px;
		margin: 2px 12px 8px;
		color: #777;
		}

		.legend span {
		position: relative;
		bottom: 3px;
		}

		.legend i {
		width: 18px;
		height: 18px;
		float: left;
		margin: 0 8px 0 0;
		opacity: 0.7;
		}

		.legend i.icon {
		background-size: 18px;
		background-color: rgba(255, 255, 255, 1);
		}

        img {
        display: block;
        width: 100%;
        height: auto;
        }

        .tabs-example {
        margin-top: -45px !important;
        position: absolute;
        }

        [role="tab"][aria-selected="true"] {
        color: #0084ff !important;
        text-decoration: underline;
        }

        [role="tab"] {
        background: #fff !important;
        color: gray !important;
        }

        .customPopup .leaflet-popup-content-wrapper,
        .customPopup .leaflet-popup-tip {
        background: #000;
        color: #fff;
        }

        .customPopup a {
        color: salmon;
        text-decoration: none;
        }

        .customPopup a:hover {
        text-decoration: underline;
        }



	</style>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern">
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
                                            <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Alice Moore
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Jose Wagner
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar5.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Melissa Rice
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Jeffrey Shaw
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
                                    <a class="link-effect font-w700" href="index.html">
                                        <span class="font-size-xl text-dual-primary-dark"><i class="si si-drop"></i>Hydro</span><span class="font-size-xl text-primary">leader</span>
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
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
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
                                    <a href="Projet_tableau_bord.php"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Tableau de bord</span></a>
                                </li>
                                <li>
                                    <a href="Projet_nouveau.php"><i class="fa fa-product-hunt"></i><span class="sidebar-mini-hide">Nouveau Projet</span></a>
                                </li>
                                <li>
                                    <a href="Projet_map.php"><i class="fa fa-map"></i><span class="sidebar-mini-hide">Carte</span></a>
                                </li>

                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Utilisateurs</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_forum_categories.html">Ajouter un utilisateur</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-gears"></i><span class="sidebar-mini-hide">Paramètrage</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_pages_forum_categories.html">Categories</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_forum_topics.html">Type projet</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_forum_discussion.html">Avis</a>
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
            <main id="main-container">
                
                <div class="content">

                <div id="map"></div>
    

                    
                </div>
                <!-- END Page Content -->
               
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right"></a>
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

        <script type="text/javascript">

                // var newChart = function(labels, data) {
                //     var dataLength = labels ? labels.length : 0;
                //     console.log
                //     console.log('we\'re in newChart', labels, data);
                //     var backgroundColors = ['rgba(235,127,134, 0.9)',
                //                             'rgba(206,102,147, 0.9)',
                //                             'rgba(129,55,83, 0.9)',
                //                             'rgba(211,156,131, 0.9)',
                //                             'rgba(153, 102, 255, 0.9)',
                //                             'rgba(255, 159, 64, 0.9)'];
                //     var colors = [];
                //     for (var i = 0; i < dataLength; i++) {
                //         colors.push(backgroundColors[i]);
                //     };
                //     console.log('newChart colors', colors);
                //     var ctx = document.getElementById("myChart");
                //     var myChart = new Chart(ctx, {
                //             type: 'bar',
                //             data: {
                //                 labels: labels,
                //                 datasets: [{
                //                     label: 'Services',
                //                     data: data,
                //                     backgroundColor: colors,
                //                     borderColor: colors,
                //                     borderWidth: 1
                //                 }]
                //             },
                //             options: {
                //                 scales: {
                //                     yAxes: [{
                //                         ticks: {
                //                             beginAtZero:true
                //                         }
                //                     }]
                //                 }
                //             }
                //         });
                // };

                $.ajax({
                                url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.php",
                                type:"GET",
                                data:'data',
                                success:function(data){
                                    var d =JSON.parse(data);
                                    var d1= Object.keys(d.data).length;

                                    var n = [];
                                            var e = [];
                                    var c=[];
                                    for(var count = 0; count <d1; count++)
                                            {
                                                n.push(d.data[count].nombre);
                                                e.push(d.data[count].etat);
                                                c.push(d.data[count].color);
                                            }
                                    
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
                                    data: data2,
                                    options: { plugins: {legend: {display:false} }},
                                    }
                                    );
                                },
                            });

                var map = L.map('map', {fullscreenControl: {pseudoFullscreen: true}, }).setView([31.630000,-8.008889], 11);

                    /*layer google satellites */
                    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                        maxZoom: 20,
                        subdomains:['mt0','mt1','mt2','mt3']
                    });
                    googleSat.addTo(map);

                    /*layer googleStreets */
                    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                    maxZoom: 20,
                    subdomains:['mt0','mt1','mt2','mt3']
                    });
                    googleStreets.addTo(map);


                // Geosearch
                L.Control.geocoder().addTo(map);

                //Print
                L.control.browserPrint().addTo(map);


                //Echelle
                L.control.scale().addTo(map);

                //base layers
                var baseLayers = {
                "Satellite":googleSat,
                "Google Map":googleStreets,

                };

                // custom popup image + text
                // const customPopup = ;

                //affichage des projests d'inverstissements  
                
                var $commune = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.commune.fetchallgeoson.php",{style: {color: "red"},onEachFeature: function(feature, layer) {
                        layer.bindPopup("<p>"+feature.properties.Commune+"</p>");
                }});

                var $province = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.province.fetchallgeoson.php",{style: {color: "yellow"}});

                var $re = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.reseau.hydrau.fetchallgeoson.php",{style: {color: "blue"}});

                var $sources = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.source.fetchallgeoson.php",{style: {color: "gray"}});

                var $Saguia = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.saguia.fetchallgeoson.php",{style: {color: "pink"}});

                var $planam = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.planamenag.fetchallgeojson.php",{style: {color: "purple"}});

                var $dayas = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.dayas.fetchallgeoson.php",{style: {color: "green"}});

                var $khettars = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.khettaras.fetchallgeoson.php",{style: {color: "green"}});

                var $nappe = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.nappe.fetchallgeoson.php",{style: {color: "green"}});

                var $zonehynondable= new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.zonehynon.fetchallgeoson.php",{style: {color: "green"}});

                var $zone_ormvah=new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.zoneormvah.fetchallgeoson.php",{style: {color: "green"}});

                var $zonedi=new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.zoneaedificandi.fetchallgeojson.php",{style: {color: "green"}});

                var $zones_protection=new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.zonepro.fetchallgeoson.php",{style: {color: "green"}});


                var overlays = {
                    "Sources":$sources,
                    "Saguia":$Saguia,
                    "Les plans d'aménagement":$planam,
                    "Dayas":$dayas,
                    "Khettaras":$khettars,
                    "nappe":$nappe,
                    "zone innondable" : $zonehynondable,
                    "zones protection": $zones_protection,
                    "zone non aedificandi": $zonedi,
                    "zone ormvah":$zone_ormvah,
                    "Réseau Hydraulique":$re,
                    "commune":$commune,
                    "province":$province,
                    
                };


                L.control.layers(baseLayers,overlays).addTo(map);


                    var info = L.control();

                    info.onAdd = function(map) {
                        this._div = L.DomUtil.create('div', 'info');
                        this.update();
                        return this._div;
                    };
                    
                    info.update = function(props) {
                        if (props) {
                                var labels = ['sepre', 'stah','sgdph','sqe'];
                                var data = [props.sepre, props.stah,props.sgdph,props.sqe];
                                console.log('labels', labels, 'data', data);
                                var dems ='<div class="block"><div class="block-header block-header-default"><h3 class="block-title">Statitistique de chaque projet d\'investisement</h3><div class="block-options"><a type="button" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+props.gid+'" class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5"><i class="fa fa-info"></i></a><button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button><button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button></div><div class="block-options"><div class="block-options-item"></div></div></div><div class="block-content"><table class="table table-borderless table-vcenter"><thead><tr><th >'+props.intitule_projet+'</th><th class="d-none d-sm-table-cell" style="width: 60%;">Information </th></tr></thead><tbody><tr><td>Identifiant du projet </td><td class="d-none d-sm-table-cell"><span class="badge badge-danger">'+props.gid+'</span></td></tr><tr><td>Date de dépôt du dossier</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.date_arrivee_abht+'</span></td></td></tr><tr><td>Numéro du dossier </td><td class="d-none d-sm-table-cell"><span class="badge badge-primary">'+props.numero_dossier+'</span></td></tr><tr><td>Numero d\'archive</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.numero_archive+'</span></td></td><tr><td>Type du dossier</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.type_dossier+'</span></td></td></tr><tr><td>Etat du dossier</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.etatdossier+'</span></td></td></tr></tbody></table></div></div>';
                                // dems += '<canvas id="myChart" width="10" height="10"></canvas>';
                                this._div.innerHTML = dems;
                                newChart(labels, data);
                        }

                            console.log('props:', props);
                    };

                    info.addTo(map);

                    

                    function style_1(feature){
                        return{
                            weight: 1,
                            opacity: 1,
                            color: 'white',
                        };
                    }

                    function style(feature) {
                        return {
                            weight: 0.6,
                            opacity: 0.4,
                            color: 'red',
                            fillOpacity: 0.8,
                        };
                    }


                    function highlightFeature(e) {
                        console.log('highlightFeature was entered');
                        var layer = e.target;

                        layer.setStyle({
                            weight: 1.5,
                            color: 'red',
                            dashArray: '',
                            fillOpacity: 0.7
                        });

                        if (!L.Browser.ie && !L.Browser.opera) {
                            layer.bringToFront();
                        }

                        info.update(layer.feature.properties);
                    }

                    var geojson;

                    function resetHighlight(e) {
                        geojson.resetStyle(e.target);
                        info.update();
                    }

                    function onEachFeature(feature, layer) {
                        console.log('onEachFeature was entered');
                        layer.on({
                            mouseover: highlightFeature,
                            mouseout: resetHighlight
                        });
                    }

                    // $.getJSON ("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php", function(data) {
                    //     console.log('geojson retrieved');
                    //     geojson = L.geoJson(data, {
                    //         style: style,
                    //         onEachFeature: onEachFeature
                    //     }).addTo(map);
                    // });
                    const customPopup = `<div class="customPopup">
                    <ul class="tabs-example" data-tabs>
                    <li><a data-tabby-default href="#sukiennice">Sukiennice</a></li>
                    <li><a href="#town-hall-tower">Town Hall Tower</a></li>
                    </ul>
                    <div id="sukiennice">
                    <figure><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/A-10_Sukiennice_w_Krakowie_Krak%C3%B3w%2C_Rynek_G%C5%82%C3%B3wny_MM.jpg/1920px-A-10_Sukiennice_w_Krakowie_Krak%C3%B3w%2C_Rynek_G%C5%82%C3%B3wny_MM.jpg"><figcaption>Source: wikipedia.org</figcaption></figure><div>Kraków,[a] also written in English as Krakow and traditionally known as Cracow, is the second-largest and one of the oldest cities in Poland. Situated on the Vistula River in Lesser Poland Voivodeship... <a href="https://en.wikipedia.org/wiki/Krak%C3%B3w" target="_blank">→ show more</a></div>
                    </div>
                    <div id="town-hall-tower">
                    <figure><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Krak%C3%B3w_-_Town_Hall_Tower_01a.jpg/315px-Krak%C3%B3w_-_Town_Hall_Tower_01a.jpg" style="height: 202px; width: auto; margin: auto;"></figure>
                    <figcaption>Source: wikipedia.org</figcaption>
                    <div>Town Hall Tower in Kraków, Poland (Polish: Wieża ratuszowa w Krakowie) is one of the main focal points of the Main Market Square in the Old Town district of Kraków. The Tower is the only... <a href="https://en.wikipedia.org/wiki/Town_Hall_Tower,_Krak%C3%B3w" target="_blank">→ show more</a></div>
                    </div>
                    </div>`;

                    // specify popup options
                    const customOptions = {
                    minWidth: "220", // set max-width
                    keepInView: true, // Set it to true if you want to prevent users from panning the popup off of the screen while it is open.
                    };

                    var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{style: {color: "green"},onEachFeature: function(feature, layer) {
                        layer.bindPopup(customPopup, customOptions)
                        .on("click", runTabs);
                    }});

                    $prj.addTo(map);

                    function runTabs() {
                    const tabs = new Tabby("[data-tabs]");
                    }

                    var legend = L.control({ position: "bottomleft" });

                    legend.onAdd = function(map) {
                    var div = L.DomUtil.create("div", "legend");
                    div.innerHTML += "<h4>Statistique de l'état du projet</h4>";
                    div.innerHTML += '<canvas id="pieChart" width="10" height="10"></canvas>';
                    
                    

                    return div;
                    };

                    legend.addTo(map);


                    //-------------------------------------------------------
                //sidebar------------------------------------------------

                const menuItems = document.querySelectorAll(".menu-item");
                const sidebar = document.querySelector(".sidebar");
                const buttonClose = document.querySelector(".close-button");

                menuItems.forEach((item) => {
                item.addEventListener("click", (e) => {
                const target = e.target;

                if (
                    target.classList.contains("active-item") ||
                    !document.querySelector(".active-sidebar")
                ) {
                    document.body.classList.toggle("active-sidebar");
                }

                showContent(target.dataset.item);
                addRemoveActiveItem(target, "active-item");
                });
                });

                buttonClose.addEventListener("click", () => {
                closeSidebar();
                });


                function addRemoveActiveItem(target, className) {
                const element = document.querySelector(`.${className}`);
                target.classList.add(className);
                if (!element) return;
                element.classList.remove(className);
                }


                function showContent(dataContent) {
                const idItem = document.querySelector(`#${dataContent}`);
                addRemoveActiveItem(idItem, "active-content");
                }


                document.addEventListener("keydown", function (event) {
                if (event.key === "Escape") {
                closeSidebar();
                }
                });


                document.addEventListener("click", (e) => {
                if (!e.target.closest(".sidebar")) {
                closeSidebar();
                }
                });

                function closeSidebar() {
                document.body.classList.remove("active-sidebar");
                const element = document.querySelector(".active-item");
                const activeContent = document.querySelector(".active-content");
                if (!element) return;
                element.classList.remove("active-item");
                activeContent.classList.remove("active-content");
                }
        </script>
    </body>
</html>