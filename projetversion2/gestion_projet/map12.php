<?php
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/

require_once '../couche_service/Classe.Service.projet.php';
require_once '../couche_service/Classe.Service.t_avis_sepre.php';
require_once '../couche_service/Classe.Service.t_avis_sgdph.php';
require_once '../couche_service/Classe.Service.t_avis_sqe.php';
require_once '../couche_service/Classe.Service.t_avis_stah.php';
require_once '../couche_service/Classe.Service.t_avis_abht.php';
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
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
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Carte dynamique</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.css"/>
        
        
		

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		<title>Leaflet Layers Control Example</title>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
		<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.min.js"></script>
        <script src="https://unpkg.com/leaflet.minichart/dist/leaflet.minichart.min.js"></script>

	<style>
        body{
            /* font-family: 'Roboto Condensed', sans-serif !important; */
        }
		#map {
			width: 100%;
			height: 100vh;
			align: center;
		}

        

        

        .leaflet-touch .leaflet-bar a {
            background-color: #D0DBE3;
            border-color: #D0DBE3;
            box-shadow: 0 0px 0px rgba(0,0,0,0.2);
            color:black;
        }

        #time-ranges {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1000;
            padding: 1em;
            background: #36464e;
            border-radius: 0px;
        }

.etaat {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: #5c6664;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:#fff;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
.etaat::-ms-expand {
   display: none;
}


.select1::after {
   content: '\25BC';
   position: relative;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   transition:.25s all ease;
}
.select1:hover::after {
   color: #23b499;
}
        #time-ranges input {
            display: inline-block;
            border: 1px solid #999;
            font-size: 14px;
            border-radius: 4px;
            height: 28px;
            line-height: 28px;
        }
        #time-ranges input[type='submit'] {
            box-sizing: content-box;
            padding:0.2 1em;
            color: white;
            background: #47AEA7;
            border-color: #47AEA7;
        }
        #res{
            color:white;
        }

        #dist{
            color:white; 
        }

        #time-ranges1{
            position: absolute;
            top: 10px;
            left: 60px;
            z-index: 1000;
            padding: 1em;
            background: #36464e;
            margin-left: 50px; 
            border-radius: 0px;
        }
        #select1{
            color:white;
        }

        #time-ranges1 select {
            display: inline-block;
            border: 1px solid #999;
            font-size: 14px;
            border-radius: 4px;
            height: 28px;
            line-height: 28px;
        }
        .valider{
            box-sizing: content-box;
            padding:0.5 1em;
            color: white;
            background: #47AEA7;
            border-color: #47AEA7;
            border-radius: 5px;
        }

        #info-pane {
        position: absolute;
        bottom: 10px;
        top:10px;
        left: 950px;
        z-index: 400;
        width: 400px;
        height: 590px;
        border-radius: 0px;
        background-color: white;
        
        }




        
        .load{
            background-image:url("assets/img/load.png") ;
            background-position: center;
            background-repeat: no-repeat;
        }

        #badge{
            background-color: #36464e;
            padding-bottom: 5px;
        }
        #inf{
           
            padding-bottom:0px;
            font-size: 14px;
            padding-left: 5px;
            padding-top: 10px;
            font-size: 20px;
        }

        #num{
            color:#5c5557;
            font-weight: bolder !important;
            /* font-weight: bolder !important; */
        }

        #numid{
            color:#5c5557;
            font-weight: bolder !important;
            /* font-weight: bolder !important; */
        }

        #col4{
            /* border-color:#36464e !important; */
            /* border-width:2px !important; */
        }

        #col42{
            /* border-color:#36464e !important; */
            /* border-width:2px !important; */
        }

        #mut1{
            color:#5c5656;
        }
        #mut2{
            color:#5c5656;
        }

        #intiti{
            color:#5c5557;
            font-weight: bolder !important;
        }

        li {
            list-style-type: none;
        }

        .label {
            margin-left: 15px;
            font-family: 'Source Sans Pro', sans-serif;
            color: #666666;
            font-size: 14px;
        }

        .legendValue {
            float: left;
            height: 25px;  
        }

        .clear {
            clear: both
        }

        .block-header{
            display:inline-flex;
        }

        .leaflet-control-layers .leaflet-control-layers-list{
            overflow-y: scroll;
            height: 250px;
        }
         
        #panel {
            position: absolute;
            bottom: 10px;
            right: 700px;
            z-index: 1000;
            background: white;
            padding: 10px;
        }

    
            


	</style>
</head>
<body>
            
<div id="page-container" class="sidebar-mini sidebar-o side-overlay-o  side-scroll page-header-modern main-content-boxed">
            

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
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" > </a>
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
            <!-- END Side Overlay -->
            
        	<main id="main-container">
           
				
				<div id="map"></div>
                
                    <div class="block block-bordered leaflet-bar" id="info-pane">
                        <div class="block-header" style="background-color:#36464e">
                                <h3 style="color:white" class="block-title">Information</h3>
                                <div class="block-options">
                                    
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                        </div>
                        <div class="block-content " data-toggle="slimscroll" data-height="500px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                        <div class="table-responsive">
                                            <table class="table table-borderless text-left ">
                                                <?php
                                                    $b = new Projet_Service();
                                                    $id=$_GET['id'];
                                                    $bb = $b->findById($id);
                                                    echo '<tbody>
                                                        <tr>
                                                            <td class="font-w600 text-left" style="width:150px">Identifiant du projet</td>
                                                            <td>'.$bb->getid_pr().'</td>
                                                        </tr>
                                                        <tr>
                                                        <td class="font-w600 text-left">Numéro du dossier</td>
                                                            <td>'.$bb->getnum_oss().'</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 text-left">Etat du projet</td>';
                                                            if ($bb->getetat_dossier()===1){
                                                                echo '<td><span class="badge badge-pill badge-danger">En Cours</span></td>';
                                                            }else{
                                                                echo '<td><span class="badge badge-pill badge-danger">Dossier Cloturé</span></td>'; 
                                                            }
                                                            
                                                        echo '</tr>
                                                        <tr>
                                                            <td class="font-w600 text-left">Durée du projet</td>
                                                            <td>'.$bb->getdate_arr_bet().'</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 text-left">Intitulé du projet</td>
                                                            <td>'.$bb->getintitule_pr().'</td>
                                                        </tr>
                                                    
                                                        <tr>
                                                            <td class="font-w600 text-left">Affectation</td>
                                                            <td>';
                                                            if($bb->getsepre()===true){
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sepre" class="si si-check text-success"></i>&nbsp';
                                                            }else{
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sepre" class="si si-close text-danger"></i>&nbsp';
                                                            }
                                                            if($bb->getsqe()===true){
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sqe" class="si si-check text-success"></i>&nbsp';
                                                            }else{
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sqe" class="si si-close text-danger"></i>&nbsp';
                                                            }
                                                            if($bb->getstah()===true){
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="stah" class="si si-check text-success"></i>&nbsp';
                                                            }else{
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="stah" class="si si-close text-danger"></i>&nbsp';
                                                            }
                                                            if($bb->getsgdph()===true){
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sgdph" class="si si-check text-success"></i>&nbsp';
                                                            }else{
                                                                echo '<i data-toggle="tooltip" data-placement="top" title="sgdph" class="si si-close text-danger"></i>&nbsp';
                                                            }
                                                            echo '</td>
                                                        </tr>
                                                    
                                                    </tbody>';
                                                ?>  
                                                
                                            </table>
                                        
                                
                                
                                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                                    <h4> Statistique d'état d'avancement des avis des services</h4>
                                                    
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $b1=new SEPRE_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $bb1=$b1->number_sepre_count_avisnull($id);
                                                        $cc=$b1->sepre_count_avis($id);
                                                        foreach($cc as $r){
                                                            if($bb->getsepre()===true){
                                                                if($r[0]>0){
                                                                    foreach($bb1 as $row){
                                                                        if($row[0]<1){
                                                                        echo   '<div class="col-6 col-md-4">
                                                                                    <div data-toggle="tooltip" data-placement="bottom" title="Dernier avis traité" class="js-pie-chart pie-chart" data-percent="70%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                        <span>70%<br><small class="text-muted">SEPRE</small></span>
                                                                                    </div>
                                                                                </div>';
                                                                        }else{
                                                                            echo '<div class="col-6 col-md-4">
                                                                                    <div data-toggle="tooltip" data-placement="bottom" title="Nouveau avis non traité" class="js-pie-chart pie-chart" data-percent="30%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                        <span>30%<br><small class="text-muted">SEPRE</small></span>
                                                                                    </div>
                                                                                </div>';
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo            '<div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Attente d\'ajout d\'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="10" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                                                            <span>10%<br><small class="text-muted">SEPRE</small></span>
                                                                                        </div>
                                                                                    </div>';
                                                                }
                                                            }
                                                        }
                                                        $b3=new SQE_Service();
                                                        $bb3=$b3->number_sqe_count_avisnull($id);
                                                        $cc1=$b3->sqe_count_avis($id);
                                                        foreach($cc1 as $r){
                                                            if($bb->getsqe()===true){
                                                                if($r[0]>0){
                                                                    foreach($bb3 as $row){
                                                                        if($row[0]<1){
                                                                            echo '<div class="col-6 col-md-4">
                                                                                    <div data-toggle="tooltip" data-placement="bottom" title="Dernier avis traité" class="js-pie-chart pie-chart" data-percent="70%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                        <span>70%<br><small class="text-muted">SQE</small></span>
                                                                                    </div>
                                                                                </div>';
                                                                        }else{
                                                                            echo '<div class="col-6 col-md-4">
                                                                                    <div data-toggle="tooltip" data-placement="bottom" title="Nouveau avis non traité" class="js-pie-chart pie-chart" data-percent="30%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                        <span>30%<br><small class="text-muted">SQE</small></span>
                                                                                    </div>
                                                                                </div>';
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo   '<div class="col-6 col-md-4">
                                                                                <div data-toggle="tooltip" data-placement="bottom" title="Attente d\'ajout d\'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="10" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                                                    <span>10%<br><small class="text-muted">SQE</small></span>
                                                                                </div>
                                                                            </div>';
                                                                }
                                                            }
                                                        }

                                                        $b4=new STAH_Service();
                                                        $bb4=$b4->number_stah_count_avisnull($id);
                                                        $cc2=$b4->stah_count_avis($id);
                                                            foreach($cc2 as $r){
                                                                if($bb->getstah()===true){
                                                                    if($r[0]>0){
                                                                        foreach($bb4 as $row){
                                                                            if($row[0]<1){
                                                                                echo '<div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Dernier avis traité" class="js-pie-chart pie-chart" data-percent="70%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                            <span>70%<br><small class="text-muted">STAH</small></span>
                                                                                        </div>
                                                                                    </div>';
                                                                            }else{
                                                                                echo '<div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Nouveau avis non traité" class="js-pie-chart pie-chart" data-percent="30%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                            <span>30%<br><small class="text-muted">STAH</small></span>
                                                                                        </div>
                                                                                    </div>';
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo '<div class="col-6 col-md-4">
                                                                                <div data-toggle="tooltip" data-placement="bottom" title="Attente d\'ajout d\'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="10" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                                                    <span>10%<br><small class="text-muted">STAH</small></span>
                                                                                </div>
                                                                              </div>';
                                                                    }
                                                                }
                                                            }

                                                        $b2=new SGDPH_Service();
                                                        $bb2=$b2->number_sgdph_count_avisnull($id);
                                                        $cc3=$b2->sgdph_count_avis($id);
                                                        foreach($cc3 as $r){
                                                                if($bb->getsgdph()===true){
                                                                    if($r[0]>0){
                                                                        foreach($bb2 as $row){
                                                                            if($row[0]<1){
                                                                                echo '<div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Dernier avis traité" class="js-pie-chart pie-chart" data-percent="70%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                            <span>70%<br><small class="text-muted">SGDPH</small></span>
                                                                                        </div>
                                                                                    </div>';
                                                                            }else{
                                                                                echo '<div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Nouveau avis non traité" class="js-pie-chart pie-chart" data-percent="30%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                            <span>30%<br><small class="text-muted">SGDPH</small></span>
                                                                                        </div>
                                                                                    </div>';
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo ' <div class="col-6 col-md-4">
                                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Attente d\'ajout d\'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="10" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                                                            <span>10%<br><small class="text-muted">SGDPH</small></span>
                                                                                        </div>
                                                                               </div>';
                                                                    }
                                                                }
                                                        }


                                                        $b5=new ABHT_Service();
                                                        $bb5=$b5->number_abht_count_avisnull($id);
                                                        $cc4=$b5->abht_count_avis($id);
                                                        foreach($cc4 as $r){
                                                            if($r[0]>0){
                                                                foreach($bb2 as $row){
                                                                    if($row[0]<1){
                                                                        echo '<div class="col-6 col-md-4">
                                                                                <div data-toggle="tooltip" data-placement="bottom" title="Dernier avis traité" class="js-pie-chart pie-chart" data-percent="70%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                    <span>70%<br><small class="text-muted">Avis générale</small></span>
                                                                                </div>
                                                                            </div>';
                                                                    }else{
                                                                        echo '<div class="col-6 col-md-4">
                                                                                <div data-toggle="tooltip" data-placement="bottom" title="Nouveau avis non traité" class="js-pie-chart pie-chart" data-percent="30%" data-line-width="10" data-size="100" data-bar-color="yellow" data-track-color="#e9e9e9">
                                                                                    <span>30%<br><small class="text-muted">Avis générale</small></span>
                                                                                </div>
                                                                            </div>';
                                                                    }
                                                                }
                                                            }else{
                                                                echo '<div class="col-6 col-md-4">
                                                                                <div data-toggle="tooltip" data-placement="bottom" title="Attente d\'ajout d\'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="10" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                                                    <span>10%<br><small class="text-muted">Avis générale</small></span>
                                                                                </div>
                                                                        </div>';
                                                            }
                                                        }
                                                        
                                                    ?>
                                                
                                    </div>

                                    <!-- <div class="row items-push-2x text-center invisible" data-toggle="appear">
                                        <h4> Statisttique d'état d'avancement des avis des services</h4>
                                        <div class="col-6 col-md-4">
                                            
                                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="10" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                                <span>25mb<br><small class="text-muted">/100mb</small></span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            
                                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                                <span>50%</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            
                                            <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                                <span>90<br><small class="text-muted">/100</small></span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                           
                                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9">
                                                <span>25mb<br><small class="text-muted">/100mb</small></span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            
                                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                                                <span>50%</span>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            
                                            <div data-toggle="tooltip" data-placement="bottom" title="Attente d'ajout d'avis" class="js-pie-chart pie-chart" data-percent="10" data-line-width="4" data-size="100" data-bar-color="red" data-track-color="#e9e9e9">
                                                <span>10%<br><small class="text-muted">SEPRE</small></span>
                                            </div>
                                        </div>
                                    </div> -->
                                
                            </div>
                        </div>
                    </div>
                    
				<!-- <button id="refreshButton">Refresh Button</button> -->
         	</main>
	</div>
        <!-- <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script> -->
        <script src="assets/js/pages/be_comp_charts.js"></script>
		<script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
        <!-- Page JS Code -->
        <script src="assets/js/pages/be_comp_charts.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                Codebase.helpers('easy-pie-chart');
            });
        </script>
		
	<script type="text/javascript">

    var newChart = function(labels, data) {
        var dataLength = labels ? labels.length : 0;
        console.log
        console.log('we\'re in newChart', labels, data);
        var backgroundColors = ['rgba(235,127,134, 0.9)',
                                'rgba(206,102,147, 0.9)',
                                'rgba(129,55,83, 0.9)',
                                'rgba(211,156,131, 0.9)',
                            ];
        var colors = [];
        for (var i = 0; i < dataLength; i++) {
            colors.push(backgroundColors[i]);
        };
            console.log('newChart colors', colors);
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: labels,
                        data: data,
                        backgroundColor: colors,
                        borderColor: colors,
                        borderWidth: 1
                    }]
                },
                options: {
                    legend: {
                        display: false,
                        },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            // $('#legend').prepend(myChart.generateLegend());
    };

    
	

    var map = L.map('map', {fullscreenControl: {pseudoFullscreen: true}, }).setView([31.630000,-8.008889], 11);

        
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
        
    
    
	// // Geosearch
	// L.Control.geocoder().addTo(map);

	//Print
	
	

	//Echelle
	L.control.scale({position: 'bottomleft'}).addTo(map);
    const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const osmURL = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
    const orm = L.tileLayer(osmURL, { attribution }).addTo(map);

    //Plugin magic goes here! Note that you cannot use the same layer object again, as that will confuse the two map controls

    const osm2 = new L.TileLayer(osmURL, { minZoom: 0, maxZoom: 13, attribution });
    const miniMap = new L.Control.MiniMap(osm2, { toggleDisplay: true,position:'bottomleft' }).addTo(map);

    L.control.browserPrint({position: 'bottomleft'}).addTo(map);
    map.zoomControl.setPosition('bottomleft');

	//base layers
	var baseLayers = {
	"Satellite":googleSat,
	"Google Map":googleStreets,
	};

	//affichage des projests d'inverstissements  
	

	var $nprj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.new.php",{style: {color: "green"},onEachFeature: function(feature, layer) {
			layer.bindPopup(`<div class="popup"><div>`);
	}});

	var $cprj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.cloturer.php",{style: {color: "green"},onEachFeature: function(feature, layer) {
			layer.bindPopup(`<div class="popup"><div>`);
	}});

	var $commune = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.commune.fetchallgeoson.php",{style: {color: "red"},onEachFeature: function(feature, layer) {
			layer.bindPopup("<p>"+feature.properties.Commune+"</p>");
	}});

	var $province = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.province.fetchallgeoson.php",{style: {color: "yellow"}});

	var $re = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.reseau.hydrau.fetchallgeoson.php",{style: {color: "#0b5394",opacity: 0.65, weight: 5}});

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

    // var $prj = new L.GeoJSON.AJAX("",{style: {color: "#0b5394",opacity: 0.65, weight:1}});

    var center = [31.630000,-8.008889];
    // Let us generate fake data
    function fakeData() {
    return [Math.random(), Math.random(), Math.random()];
    }

    
    

    var Location1 = "http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php";

    // var polygonsWithCenters1 = L.layerGroup();
    var polygonsWithCenters = L.layerGroup();

    var $prj =new L.GeoJSON.AJAX(Location1,{style: {color: "#0b5394",opacity: 0.65, weight:1}}, {
        onEachFeature: function (feature, layer) {
        
        if (feature.geometry.type === "MultiPolygon") {
        var center = layer.getBounds().getCenter();
        var myBarChart = L.minichart(center,{data: fakeData()});
        var polygonAndItsCenter = L.layerGroup([layer, myBarChart]);
        polygonAndItsCenter.addTo(polygonsWithCenters);
        }
       },
    });



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
		"Projet En cours":$nprj,
        "Projet cloturés":$cprj,
        "Projet":$prj,
		
	};

    L.control.layers(baseLayers,overlays,{position: 'topleft'}).addTo(map);

    id1=<?php echo $_GET['id'] ?>;

    var Locations = "http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchidgeson.php?id="+id1;

    var polygonsWithCenters = L.layerGroup();
    const funny = L.icon({
        iconUrl: "http://grzegorztomicki.pl/serwisy/pin.png",
        iconSize: [50, 58], // size of the icon
        iconAnchor: [20, 58], // changed marker icon position
        popupAnchor: [0, -60], // changed popup position
    });

    var $prjid =new L.GeoJSON.AJAX(Locations, {
        onEachFeature: function (feature, layer) {
           
        if (feature.geometry.type === "MultiPolygon") {
        var center = layer.getBounds().getCenter();
        var marker = L.marker(center,{icon: funny}).bindPopup("voilà l'emplacement du projet d'investissement ");
        var polygonAndItsCenter = L.layerGroup([layer, marker]);
        polygonAndItsCenter.addTo(polygonsWithCenters);
        }
    },
    });
   
    polygonsWithCenters.addTo(map);

    
    

    





	</script>
</body>
</html>
