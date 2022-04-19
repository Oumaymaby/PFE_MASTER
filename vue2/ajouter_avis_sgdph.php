<?php
/**
* OUMAIMA SABI
* DATE:31/03/2022
*/
require_once '../Couche_Service/Service_Projet.php';
require_once '../Couche_Service/Service_abht.php';
require_once '../Couche_Service/Service_sepre.php';
require_once '../Couche_Service/Service_SQE.php';
require_once '../Couche_Service/Service_SGDPH.php';
require_once '../Couche_Service/Service_stah.php';
require_once '../Couche_Service/Service_avis.php';
require_once '../Couche_Service/Service_user.php';
require_once '../Couche_Service/Service_typeceau.php';
require_once '../Couche_Service/Service_NatureCeau.php';


if(isset($_GET['id'])){

    $id = htmlspecialchars($_GET['id']);
    $ss = new Projet_Service();
    $tc = $ss->findById($id);
    $id1=$tc->getid_pr(); 
    
}

if(isset($_POST['sgdph'])){
    //filtre et validation du formulaireif
    $id_sgdph = htmlspecialchars($_POST["id_sgdph"]);
    $rem_sgdoh = htmlspecialchars($_POST["rem_sgdph"]);
    $rem_bet=htmlspecialchars($_POST["rem_sgdph"]);
    $avis_sgdph = htmlspecialchars($_POST["avis_sgdph"]);
    $valide_sgdph = htmlspecialchars($_POST["valide_sgdph"]);
    $approuve_sgdph = htmlspecialchars($_POST["approuvee_sgdph"]);
    $type_cours = htmlspecialchars($_POST["type_cours"]);
    $nom_cours = htmlspecialchars($_POST["nom_cours"]);
    $debit_cours = htmlspecialchars($_POST["debit_cours"]);
    $nature_cours = htmlspecialchars($_POST["nature_cours"]);
    $servitude = htmlspecialchars($_POST["servitude"]);
    $origine_eaux = htmlspecialchars($_POST["origine_eaux"]);
    $origine_eauy = htmlspecialchars($_POST["origine_eauy"]);

    if(isset($_POST["aut1"])){
        var_dump($_POST["aut1"]);
    }else{
        $_POST["aut1"]="0";
        var_dump($_POST["aut1"]);
    }

    if(isset($_POST["aut_dev"])){
        var_dump($_POST["aut_dev"]);
    }else{
        $_POST["aut_dev"]="0";
        var_dump($_POST["aut_dev"]);
    }
    if(isset($_POST["aut_occ"])){
        var_dump($_POST["aut_occ"]);
    }else{
        $_POST["aut_occ"]="0";
        var_dump($_POST["aut_occ"]);
    }
    if(isset($_POST["aut_prele"])){
        var_dump($_POST["aut_prele"]);
    }else{
        $_POST["aut_prele"]="0";
        var_dump($_POST["aut_prele"]);
    }   
    $date_aut_creus = htmlspecialchars($_POST["date_aut_creus"]);
    $date_aut_prelev = htmlspecialchars($_POST["date_aut_prelev"]);
    $date_aut_dev = htmlspecialchars($_POST["date_aut_dev"]);
    $date_aut_occ = htmlspecialchars($_POST["date_aut_occ"]);
    $num_aut_creus = htmlspecialchars($_POST["num_aut_creus"]);
    $num_aut_prelev = htmlspecialchars($_POST["num_aut_prelev"]);
    $num_aut_dev = htmlspecialchars($_POST["num_aut_dev"]);
    $num_aut_occ = htmlspecialchars($_POST["num_aut_occ"]);
    $autre_autorisation = htmlspecialchars($_POST["autre_autorisation"]);
    $date_sgdph=date("Y-m-d");
    $avis_sdh = new SGDPH($id_sgdph,$rem_sgdoh,$rem_bet,$avis_sgdph,$date_sgdph,$valide_sgdph,$approuve_sgdph,$type_cours,$nom_cours,$debit_cours,$nature_cours,$servitude,$origine_eaux,$origine_eauy,$_POST["aut1"],$_POST["aut_prele"],$_POST["aut_dev"],$_POST["aut_occ"],$date_aut_creus,$date_aut_prelev ,$date_aut_dev ,$date_aut_occ,$num_aut_creus,$num_aut_prelev,$num_aut_dev,$num_aut_occ,$autre_autorisation);
    $p= new SGDPH_Service();
    //var_dump($avis_sdh);
    //var_dump($p->update($avis_sdh));
    if($p->update($avis_sdh)){
        header("Location: prj_detail.php?id=".$id_sgdph); }
    // echo "id_sgdph";
    // echo "rem_sgdoh";
    // echo "rem_bet";
    // echo "avis_sgdph";
    // echo "date_sgdph";
    // echo "valide_sgdph";
    // echo "approuve_sgdph";
    // echo "type_cours";
    // echo "nom_cours";
    // echo "debit_cours";
    // echo "nature_cours";
    // echo "servitude";
    // echo "origine_eaux";
    // echo "origine_eauy";
    // echo "aut1";
    // echo "aut_prele";
    // echo "aut_dev";
    // echo "aut_occ";
    // echo "date_aut_creus";
    // echo "date_aut_prelev ";
    // echo "date_aut_dev";
    // echo "date_aut_occ";
    // echo "num_aut_creus";
    // echo "num_aut_prelev";
    // echo "num_aut_dev";
    // echo "num_aut_occ";
    // echo "autre_autorisation";

    // var_dump($id_sgdph);
    // var_dump($rem_sgdoh);
    // var_dump($rem_bet);
    // var_dump($avis_sgdph);
    // var_dump($date_sgdph);
    // var_dump($valide_sgdph);
    // var_dump($approuve_sgdph);
    // var_dump($type_cours);
    // var_dump($nom_cours);
    // var_dump($debit_cours);
    // var_dump($nature_cours);
    // var_dump($servitude);
    // var_dump($origine_eaux);
    // var_dump($origine_eauy);
    // var_dump($_POST["aut1"]);
    // var_dump($_POST["aut_prele"]);
    // var_dump($_POST["aut_dev"]);
    // var_dump($_POST["aut_occ"]);
    // var_dump($date_aut_creus);
    // var_dump($date_aut_prelev);
    // var_dump($date_aut_dev);
    // var_dump($date_aut_occ);    
    // var_dump($num_aut_creus);
    // var_dump($num_aut_prelev);
    // var_dump($num_aut_dev);
    // var_dump($num_aut_occ);
    // var_dump($autre_autorisation);    
}

?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Ajouter un Avis </title>

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

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
        <style>
        fieldset {
        margin:14px ;
        border: 1px solid #ccc;
        padding: 10px 10px;
        }

        legend {
        color: #000;
        /* margin: auto; */
        font-size: small;
        font-weight: bolder;
        }
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
                                            <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Carol Ray
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar14.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Ralph Murray
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar3.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Carol White
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                            <i class="fa fa-circle text-danger"></i> Scott Young
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
                                J. Smith<i class="fa fa-angle-down ml-5"></i>
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
                    <!-- Register Forms -->
                    <h2 class="content-heading">Veuillez rajouter des remarques pour les projets d'investissement</h2>
                    <div class="row justify-content-center py-20">
                        <div class="col-md-12">
                            <!-- Material Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Volet SGDPH</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="ajouter_avis_sgdph.php" method="post">
                                        <fieldset class="inputTextWrap">
                                            <legend>informations</legend>
                                            <div class="form-group row">
                                        
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="id_sgdph" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                        <label for="register2-username">Identifiant du projet</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="type_cours" size="1">
                                                            <option value=''></option>
                                                            <?php
                                                                $ss = new TypeCEau_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="register2-username">Type du cours d'eau</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="nom_cours" >
                                                        <label for="register2-username">Nom du cours d'eau</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="debit_cours" >
                                                        <label for="register2-username">Débit centennale (m3/s)</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="nature_cours" size="1">
                                                            <option value=''></option>
                                                            <?php
                                                                $ss = new NatureCeau_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="register2-username">Nature du cours d'eau</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="servitude" >
                                                        <label for="register2-username">Servitude</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations de creusement</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="origine_eaux" >
                                                        <label for="register2-username">Origine de l'eau potable Puits X</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="origine_eauy" >
                                                        <label for="register2-username">Origine de l'eau potable Puits Y</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="register2-username" name="date_aut_creus" >
                                                        <label for="register2-username">Date d'autorisation de creusement </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="num_aut_creus" >
                                                        <label for="register2-username">Numéro d'autorisation de creusement  </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label class="css-control css-control-success css-switch">
                                                        <input type="checkbox" class="css-control-input" id="box" name="aut1" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Autorisation de creusement
                                                    </label>
                                                </div>
                                            </div>
                                                        
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations de prelevelement</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="register2-username" name="date_aut_prelev" >
                                                        <label for="register2-username">Date d'autorisation de prelevelement  </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="num_aut_prelev" >
                                                        <label for="register2-username">Numéro d'autorisation de prelevelement </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label class="css-control css-control-success css-switch">
                                                        <input type="checkbox" class="css-control-input" name="aut_prele" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Autorisation de prelevelement 
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations de creusement</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="register2-username" name="date_aut_dev" >
                                                        <label for="register2-username">Date d'autorisation de deversement </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="num_aut_dev" >
                                                        <label for="register2-username">Numéro d'autorisation de deversement</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label class="css-control css-control-success css-switch">
                                                        <input type="checkbox" class="css-control-input" name="aut_dev" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Autorisation de deversement 
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations de creusement</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="register2-username" name="date_aut_occ" >
                                                        <label for="register2-username">Date d'autorisation de l'occupation du dph </label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="num_aut_occ" >
                                                        <label for="register2-username">Numéro d'autorisation de l'occupation du dph</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label class="css-control css-control-success css-switch">
                                                        <input type="checkbox" class="css-control-input" name="aut_occ" value=<?php echo true; ?> >
                                                        <span class="css-control-indicator"></span> Autorisation de l'occupation du dph
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="autre_autorisation" >
                                                        <label for="register2-username">Autre autorisation</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations de creusement</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="contact2-msg" name="rem_sgdph" rows="4" ></textarea>
                                                        <label for="contact2-msg">Remarque Supplémentaires du SGDPH</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" ></textarea>
                                                        <label for="contact2-msg">Remarque BET su le DPH</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="avis_sgdph" size="1">
                                                            <option value=''></option>
                                                            <?php
                                                                $ss = new Avis_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Avis SGDPH</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="valide_sgdph" size="1">
                                                            <option value=''></option>
                                                            <?php
                                                                $ss = new User_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Validé par</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="approuvee_sgdph" size="1">
                                                            <option value=''></option>
                                                            <?php
                                                                $ss = new User_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Approuvée par</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" name ="sgdph" class="btn btn-alt-success">
                                                        <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                    </button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Material Register -->
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
    </body>
</html>