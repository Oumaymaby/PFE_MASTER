<?php
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/
require_once '../couche_service/Classe.Service.etat.php';
require_once '../couche_service/Classe.Service.projet.php';
require_once '../couche_service/Classe.Service.type_projet.php';
require_once '../couche_service/Classe.Service.Typedossier.php';
require_once '../couche_service/Classe.Service.commune.php';
require_once '../couche_service/Classe.Service.categorie.php';
require_once '../couche_service/Classe.Service.province.php';
require_once '../couche_service/Classe.Service.origineaep.php';
require_once '../couche_service/Classe.Service.avis.php';
require_once '../couche_service/Classe.Service.avis_abht.php';
require_once '../couche_service/Classe.Service.avis_sepre.php';
require_once '../couche_service/Classe.Service.avis_sqe.php';
require_once '../couche_service/Classe.Service.avis_stah.php';
require_once '../couche_service/Classe.Service.avis_sgdph.php';
require_once '../couche_service/Classe.Service.user.php';
require_once '../couche_service/Classe.Service.modeassin.php';
require_once '../couche_service/Classe.Service.type_ceau.php';
require_once '../couche_service/Classe.Service.natureceau.php';


if(isset($_GET['id'])){
    // Récupérer des informations de l'exercice en question qui seront par la suite afficher dans le formulaire en bas
          $id1 = htmlspecialchars($_GET['id']);
          $ss = new Projet_Service();
          $tc = $ss->findById($id1);
    // Parcourir les lignes de résultat
    if (is_null($tc)) {
      $message="Le projet est introuvable";
      header("Location:GestioN Stagiaire.php?message=$message");
    }else{
        $id2=$tc->getid_pr();
        $num_oss=$tc->getnum_oss();
        $num_archv=$tc->getnum_archv();
        $date_arr_abht=$tc->getdate_arr_abht();
        // $date_arr_bet=$tc->getdate_arr_bet();
        $com=$tc->getcom();
        $province=$tc->getprovince();
        $douar_loc=$tc->getdouar_loc();
        $maitre_ouv=$tc->getmaitre_ouv();
        $intitule_pr=$tc->getintitule_pr();
        $architect=$tc->getarchitecte();
        $titre_foncier=$tc->gettitre_foncier();
        $supf=$tc->getsupf();
        $type_projet=$tc->gettype_projet();
        $fondoss=$tc->getfond_doss();
        $geom=$tc->getgeom();
        $date_com=$tc->getdate_comm();
        $cat=$tc->getcatg();
        $surf_bat=$tc->getsurf_bat();
        $type_doss=$tc->gettype_doss();
        $etat_doss=$tc->getetat_dossier();
        
        $sepre1=$tc->getsepre();
        $sqe1=$tc->getsqe();
        $stah1=$tc->getstah();
        $sgdph1=$tc->getsgdph();	
        if ($sepre1==true) {
            $sepre=1;
        }else{
            $sepre=0;
        }

        if ($sqe1==true) {
            $sqe1=1;
        }else{
            $sqe1=0;
        }

        if ($stah1==true) {
            $stah1=1;
        }else{
            $stah1=0;
        }

        if ($sgdph1==true) {
            $sgdph1=1;
        }else{
            $sgdph1=0;
        }
    }
}

if(isset($_POST['modifier'])){
    
    
        extract($_POST);
        $id= htmlspecialchars($_POST["id_prj"]);
        $numero_dossier = htmlspecialchars($_POST["num_doss"]);
        $numero_archive = htmlspecialchars($_POST["num_archive"]);
        $date_arrivee_abht=htmlspecialchars($_POST["date_abht"]);
        $date_arrivee_bet= date('d-m-y');
        $commune = htmlspecialchars($_POST["commune"]);
        $province = htmlspecialchars($_POST["province"]);
        $douar_localite = htmlspecialchars($_POST["douar_localite"]);
        $maitre_ouv = htmlspecialchars($_POST["Maitre_ouvr"]);
        $intitule_projet = htmlspecialchars($_POST["intitule_projet"]);
        $architecte= htmlspecialchars($_POST["architecte"]);
        $titre_foncier = htmlspecialchars($_POST["titre_foncier"]);
        $superficie = htmlspecialchars($_POST["superficie"]);
        $type_prj = htmlspecialchars($_POST["type_projet"]);
        $fond_dossier= htmlspecialchars($_POST["fond_dossier"]);
        $geom = htmlspecialchars($_POST["geometrie"]);
        $dates_commissions=htmlspecialchars($_POST["date_comm"]);
        $categ = htmlspecialchars($_POST["categorie"]);
        $surface_batie=htmlspecialchars($_POST["surface_batie"]);
        $type_doss = htmlspecialchars($_POST["type_doss"]);
        $etatdossier = 1;
        if(isset($_POST["sepre1"])){
        }else{
            $_POST["sepre"]="0";
            
        }
    
        if(isset($_POST["sqe"])){
           
        }else{
            $_POST["sqe"]="0";
            
        }
        if(isset($_POST["stah"])){
           
        }else{
            $_POST["stah"]="0";
            
        }
        if(isset($_POST["sgdph"])){
            
        }else{
            $_POST["sgdph"]="0";
            
        }
        $geom1=$geom;
        $projet = new ProjetInv($id,$numero_dossier,$numero_archive,$date_arrivee_abht,$date_arrivee_bet,$commune,$province,$douar_localite,$maitre_ouv,$intitule_projet,$architecte,$titre_foncier,$superficie,$type_prj,$fond_dossier,$geom1,$dates_commissions,$categ,$surface_batie,$type_doss,$etatdossier,$_POST["sepre"],$_POST["sqe"],$_POST["stah"],$_POST["sgdph"],NULL,NULL,NULL);
        
        $ss = new Projet_Service();
        if($ss->update($projet)){
            header("Location: Projet_tableau_bord.php"); } 
}

if(isset($_POST['sepre'])){
    //filtre et validation du formulaire
    // $id_sepre = htmlspecialchars($_POST["id_sepre"]);
    $orig_aep = htmlspecialchars($_POST["orig_aep"]);
    $speci_autre = htmlspecialchars($_POST["speci_autre"]);
    $besoin_domes = htmlspecialchars($_POST["besoin_domes"]);
    $besoin_irr = htmlspecialchars($_POST["besoin_irr"]);
    $rem_bet = htmlspecialchars($_POST["rem_bet"]);
    $rem_sepre = htmlspecialchars($_POST["rem_sepre"]);
    $avis_sepre = htmlspecialchars($_POST["avis_sepre"]);
    $date_sepre=date("Y-m-d");
    $date_avis_bet_sepre=date("Y-m-d");
    $id_prj=htmlspecialchars($_POST["id_prj"]);
    $avis_st = new SEPRE($avis_sepre,$rem_bet,$rem_sepre,$date_sepre,$orig_aep,$speci_autre,$besoin_domes,$besoin_irr,$date_avis_bet_sepre,$id_prj);
    var_dump($avis_st);
    var_dump($id_prj);
    $p= new SEPRE_Service();
    if($p->add($avis_st)){
        header("Location: Projet_details.php?id=".$id_prj); }
    
}

if(isset($_POST['stah'])){
    //filtre et validation du formulaire
    // $id_stah = htmlspecialchars($_POST["id_stah"]);
    $super_bv = htmlspecialchars($_POST["super_bv"]);
    $rem_stah = htmlspecialchars($_POST["rema_stah"]);
    $rem_bet = htmlspecialchars($_POST["rema_bet"]);
    $avis_amng = htmlspecialchars($_POST["avis_amng"]);
    $avis_stah = htmlspecialchars($_POST["avis_stah"]);
    $valide_stah = htmlspecialchars($_POST["valide_stah"]);
    $approuve_stah = htmlspecialchars($_POST["approuve_stah"]);
    $date_stah=date("Y-m-d");
    $date_avis_bet_stah=date("Y-m-d");
    $id_prj=htmlspecialchars($_POST["id_prj"]);
    $avis_st = new STAH($avis_stah,$avis_amng,$date_stah,$valide_stah,$approuve_stah,$rem_stah,$rem_bet,$super_bv,$date_avis_bet_stah,$id_prj);
    $p= new STAH_Service();
    if($p->add($avis_st)){
        header("Location:Projet_details.php?id=".$id_prj); }
    
}

if(isset($_POST['sqe'])){
    //filtre et validation du formulaire
    // $id_sqe = htmlspecialchars($_POST["id_sqe"]);
    $rem_sqe = htmlspecialchars($_POST["rem_sqe"]);
    $avis_sqe = htmlspecialchars($_POST["avis_sqe"]);
    $valide_sqe = htmlspecialchars($_POST["valide_sqe"]);
    $approuve_sqe = htmlspecialchars($_POST["approuve_sqe"]);
    $rem_sqe= htmlspecialchars($_POST["rem_sqe"]);
    $rem_bet= htmlspecialchars($_POST["rem_bet"]);
    $volum= htmlspecialchars($_POST["volume_use"]);
    $mode_assai= htmlspecialchars($_POST["mode_assai"]);
    $reutil= htmlspecialchars($_POST["reutil"]);
    $niv_trat= htmlspecialchars($_POST["niv_trat"]);
    $niveau_piezo= htmlspecialchars($_POST["niveau_piezo"]);
    $datenivea= htmlspecialchars($_POST["datenivea"]);
    $coord_x= htmlspecialchars($_POST["coord_x"]);
    $coord_y= htmlspecialchars($_POST["coord_y"]);
    $trat_boue= htmlspecialchars($_POST["trat_boue"]);
    $date_sqe=date("Y-m-d");
    $date_sqe_bet=date("Y-m-d");
    $id_prj=htmlspecialchars($_POST["id_prj"]);
    $avis_sq = new SQE($avis_sqe,$date_sqe,$valide_sqe,$approuve_sqe,$rem_sqe,$rem_bet,$volum,$mode_assai,$reutil,$niv_trat,$niveau_piezo,$datenivea,$coord_x,$coord_y,$trat_boue,$date_sqe_bet,$id_prj);
    // var_dump($avis_sq);
    $p= new SQE_Service();
    if($p->add($avis_sq)){
        header("Location:Projet_details.php?id=".$id_prj); }
    
}

if(isset($_POST['sgdph'])){
    //filtre et validation du formulaireif
    // $id_sgdph = htmlspecialchars($_POST["id_sgdph"]);
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
        
    }else{
        $_POST["aut1"]="0";
    }
    if(isset($_POST["aut_dev"])){
    }else{
        $_POST["aut_dev"]="0";
    }
    if(isset($_POST["aut_occ"])){
    }else{
        $_POST["aut_occ"]="0";
    }
    if(isset($_POST["aut_prele"])){

    }else{
        $_POST["aut_prele"]="0";
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
    $date_sgdph_bet=date("Y-m-d");
    $id_prj=htmlspecialchars($_POST["id_prj"]);
    $avis_sdh = new SGDPH($rem_sgdoh,$rem_bet,$avis_sgdph,$date_sgdph,$valide_sgdph,$approuve_sgdph,$type_cours,$nom_cours,$debit_cours,$nature_cours,$servitude,$origine_eaux,$origine_eauy,$_POST["aut1"],$_POST["aut_prele"],$_POST["aut_dev"],$_POST["aut_occ"],$date_aut_creus,$date_aut_prelev ,$date_aut_dev ,$date_aut_occ,$num_aut_creus,$num_aut_prelev,$num_aut_dev,$num_aut_occ,$autre_autorisation,$date_sgdph_bet,$id_prj);
    var_dump($avis_sdh);
    $p= new SGDPH_Service();
    if($p->add($avis_sdh)){
        header("Location:Projet_details.php?id=".$id_prj); }  
}

?>


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
                                        <span class="font-size-xl text-dual-primary-dark">Hydro</span><span class="font-size-xl text-primary">leader</span>
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
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Sabi</a>
                                    </li>
                                    <li class="list-inline-item">
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
                        </div>
                        <div class="content-side content-side-full">
                            
                            <ul class="nav-main">
                                <li>
                                    <a href="Projet_tableau_bord.php"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Tableau de bord</span></a>
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
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
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
                
           