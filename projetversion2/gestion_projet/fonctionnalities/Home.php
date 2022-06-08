
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Accueil</title>
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
         <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
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
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
        <style>
            fieldset {
            margin:14px ;
            border: 1px solid #ccc;
            padding: 20px 20px;
            }

            legend {
            color: gray;
            /* margin: auto; */
            font-size:larger;
            font-weight: bolder;
            }

            .form-control[readonly]{
                background-color: gray;
                border-bottom: 1px dashed #ccc;
                box-shadow: none;
            }

            .leaflet-control-layers-toggle {
                width: 20px;
                height: 36px;
                background-color: black;
                border-radius: 15px;
                color:white;
            }
            .description {
                width: 250px;
                font-size: 16px;
                color: #333;
                padding: 10px 14px;
                background-color: hsla(0, 0%, 100%, 0.8);
                box-shadow: 0 0 15px rgb(0 0 0 / 20%);
                border-radius: 5px;
                line-height: 120%;
                border: 1px solid grey;
                }

                .info {
                    padding: 16px 10px;
                    font: 14px/16px Arial, Helvetica, sans-serif;
                    background: white;
                    background: rgba(255,255,255,0.8);
                    box-shadow: 0 0 15px rgba(0,0,0,0.2);
                    border-radius: 5px;
		        }
		.info h4 {
			margin: 0 0 5px;
			color: 'white';
		}

		.legend {
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
		.button1 {
            position:absolute;
            top:410px;
		}
        
        </style>
    </head>
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <div class="content-header content-header-fullrow px-15">
                            <div class="content-header-section sidebar-mini-visible-b">
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">H</span><span class="text-primary">L</span>
                                </span>
                            </div>
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="accueil.php">
                                        <span class="font-size-xl text-dual-primary-dark"><i class="si si-drop"></i>Hydro</span><span class="font-size-xl text-primary">leader</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                        
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="Projet_profile.php"><?php echo $_SESSION['user_name'];?> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark"  href="logout.php">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-side content-side-full">
                            
                            <ul class="nav-main">
                                <li>
                                    <a href="Projet_tableau_bord.php"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Tableau de bord</span></a>
                                </li>
                                <li>
                                    <a href="Projet_nouveau.php"><i class="fa fa-product-hunt"></i><span class="sidebar-mini-hide">Nouveau Projet</span></a>
                                </li>
                                <li>
                                    <a href="map.php"><i class="fa fa-map"></i><span class="sidebar-mini-hide">Carte</span></a>
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
                    </div>
                </div>
            </nav>

            <header id="page-header">
                <div class="content-header">
                    <div class="content-header-section">
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                    <div class="content-header-section">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <?php echo $_SESSION['user_name']; ?> <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="Projet_profile.php">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a type="button" class="dropdown-item" href ="logout.php" >
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </header>

            <main id="main-container">
                
           