<?php
/**
* OUMAIMA SABI
* DATE:30/03/2022
*/
require_once '../Couche_Service/Service_Projet.php';
require_once '../Couche_Service/Service_province.php';
require_once '../Couche_Service/Service_type_projet.php';
require_once '../Couche_Service/Service_Commune.php';
require_once '../Couche_Service/Service_province.php';
require_once '../Couche_Service/Service_abht.php';
require_once '../Couche_Service/Service_sepre.php';
require_once '../Couche_Service/Service_SQE.php';
require_once '../Couche_Service/Service_SGDPH.php';
require_once '../Couche_Service/Service_stah.php';
require_once '../Couche_Service/Service_avis.php';
require_once '../Couche_Service/Service_user.php';
require_once '../Couche_Service/Service_OrigineAep.php';
require_once '../Couche_Service/Service_modeAssain.php';
require_once '../Couche_Service/Service_typeceau.php';
require_once '../Couche_Service/Service_NatureCeau.php';


if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);
    $ss = new Projet_Service();
    $tc = $ss->findById($id);
    $id1=$tc->getid_pr(); 

    if (is_null($tc)) {
        $message="Le projet est introuvable";
        header("Loation:Avis_prj.php?message=$message");
    }else{
        $b = new ABHT_Service();
        $bb=$b->findById($id);
        $rem_gen1 = $bb->getrem_general();
        $avis_abht1 = $bb->getavis_abht();
        $etabli_abht1 =$bb->getetabli_par() ;
        $valide_abht1 = $bb->getvalide_par();
        $approuve_abht1 = $bb->getapprouve_par();

        $b1= new STAH_Service();
        $bb1=$b1->findById($id);
        $avis_stah1=$bb1->getavis_stah();
        $avis_abht_amen1=$bb1->getavis_abht_amen();
        $date_avis_stah1=$bb1->getdate_avis_stah();
        $valide_par_stah1=$bb1->getvalide_par_stah();
        $approuve_par_stah1=$bb1->getapprouve_par_stah();
        $rem_sup_stah1=$bb1->getremarque_sup_stah();
        $amen_prop1=$bb1->getamena_prop();
        $superfi_bv1=$bb1->getsuperficie_bv();

        $b2=new SQE_Service();
        $bb2=$b2->findById($id);
        $avis_sqe1=$bb2->getavis_sqe();
        $date_avis_sque1=$bb2->getdate_avis_sqe();
        $valide_sqe1=$bb2->getvalide_par_sqe();
        $approuve_par_sqe1=$bb2->getapprouve_par_sqe();
        $remarque_sup_sqe1=$bb2->getremarque_sup_sqe();
        $remarque_bet_assai1=$bb2->getremarque_bet_assai();
        $volume_eau_use1=$bb2->getvolume_eau_use();
        $modeassai1=$bb2->getmodeassai();
        $reut_qeu1=$bb2->getreut_qeu();
        $niv_trait1=$bb2->getniv_trait();
        $niv_piezo1=$bb2->getniv_piezo();
        $date_piezo1=$bb2->getdate_piezo();
        $coord_x1=$bb2->getcoord_x();
        $coord_y1=$bb2->getcoord_y();
        $trat_boue1=$bb2->gettrait_boue();

        $b3=new SEPRE_Service();
        $bb3=$b3->findById($id);
        $remarque_sup_sepre1=$bb3->getremarques_sup_sepre();
        $avis_sepre1=$bb3->getavis_sepre();
        $date_avis_sepre1=$bb3->getdate_avis_sepre();
        $remarque_bet_besoin_eau1=$bb3->getremarque_bet_besoin_eau();
        $origine_eau_pot1=$bb3->getorigine_eau_pot();
        $origine_autre1=$bb3->getorigine_autre();
        $bet_eau_dom1=$bb3->getbes_eau_dom();
        $bes_eau_irrg1=$bb3->getbes_eau_irrg();

        $b4=new SGDPH_Service();
        $bb4=$b4->findById($id);
        $rem_sgdoh1 = $bb4->getremarque_sup_sgdph();
        $rem_bet1=$bb4->getremarque_bet_sgdph();
        $avis_sgdph1 =$bb4->getavis_sgdph();
        $valide_sgdph1 =$bb4->getvalide_par_sgdph();
        $approuve_sgdph1 = $bb4->getapprouve_par_sgdph();
        $type_cours1 = $bb4->gettype_cours_eau();
        $nom_cours1 = $bb4->getnom_cours_eau();
        $debit_cours1 =$bb4->getcrue_100();
        $nature_cours1 = $bb4->getnature_cours();
        $servitude1 =$bb4->getservitude();
        $origine_eaux1 =$bb4->getorigine_x();
        $origine_eauy1 =$bb4->getorigine_y();
        $aut_creus1=$bb4->getaut_creus();
        $aut_prele1=$bb4->getaut_prelev();
        $aut_dev1=$bb4->getaut_dever(); 
        $aut_occ1=$bb4->getaut_occu_dph();  
        $date_aut_creus1 = $bb4->getdate_creus();
        $date_aut_prelev1 =$bb4->getdate_prelev();
        $date_aut_dev1 = $bb4->getdate_dever();
        $date_aut_occ1 = $bb4->getdate_occup_dph();
        $num_aut_creus1 = $bb4->getnum_creus();
        $num_aut_prelev1 = $bb4->getnum_prelev();
        $num_aut_dev1 = $bb4->getnum_devers();
        $num_aut_occ1 = $bb4->getnum_occup();
        $autre_autorisation1 = $bb4->getautre_aut();
    }
}
if(isset($_POST['abht'])){
    //filtre et validation du formulaire
    $id_abht = htmlspecialchars($_POST["id_abht"]);
    $rem_gen = htmlspecialchars($_POST["rem_gen"]);
    $avis_abht = htmlspecialchars($_POST["avis_abht"]);
    $etabli_abht = htmlspecialchars($_POST["etabli_abht"]);
    $valide_abht = htmlspecialchars($_POST["valide_abht"]);
    $approuve_abht = htmlspecialchars($_POST["approuve_abht"]);
    $date_abht=date("Y-m-d");
    $etatdossier=3;
    $avis_ab = new ABHT($id_abht,$avis_abht,$date_abht,$etabli_abht,$valide_abht,$approuve_abht ,$rem_gen,$etatdossier);
    $p= new ABHT_Service();
    if($p->update($avis_ab)){
        header("Location: details.php?id=".$id_abht); }
    
}

if(isset($_POST['sepre'])){
    //filtre et validation du formulaire
    $id_sepre = htmlspecialchars($_POST["id_sepre"]);
    $orig_aep = htmlspecialchars($_POST["orig_aep"]);
    $besoin_domes = htmlspecialchars($_POST["besoin_domes"]);
    $speci_autre = htmlspecialchars($_POST["speci_autre"]);
    $besoin_irr = htmlspecialchars($_POST["besoin_irr"]);
    $rem_bet = htmlspecialchars($_POST["rem_bet"]);
    $rem_sepre = htmlspecialchars($_POST["rem_sepre"]);
    $avis_sepre = htmlspecialchars($_POST["avis_sepre"]);
    $date_sepre=date("Y-m-d");
    $avis_st = new SEPRE($id_sepre,$rem_sepre,$avis_sepre,$date_sepre,$rem_bet,$orig_aep,$speci_autre,$besoin_domes,$besoin_irr);
    // var_dump($avis_st);
    $p= new SEPRE_Service();
    if($p->update($avis_st)){
        header("Location: details.php?id=".$id_sepre); }
    
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
    if($p->update($avis_sdh)){
        header("Location: details.php?id=".$id_sgdph); }  
}

if(isset($_POST['sqe'])){
    //filtre et validation du formulaire
    $id_sqe = htmlspecialchars($_POST["id_sqe"]);
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
    $avis_sq = new SQE($id_sqe,$avis_sqe,$date_sqe,$valide_sqe,$approuve_sqe,$rem_sqe,$rem_bet,$volum,$mode_assai,$reutil,$niv_trat,$niveau_piezo,$datenivea,$coord_x,$coord_y,$trat_boue);
    var_dump($avis_sq);
    $p= new SQE_Service();
    if($p->update($avis_sq)){
        header("Location: details.php?id=".$id_sqe); }
    
}

if(isset($_POST['stah'])){
    //filtre et validation du formulaire
    $id_stah = htmlspecialchars($_POST["id_stah"]);
    $super_bv = htmlspecialchars($_POST["super_bv"]);
    $rem_stah = htmlspecialchars($_POST["rema_stah"]);
    $rem_bet = htmlspecialchars($_POST["rema_bet"]);
    $avis_amng = htmlspecialchars($_POST["avis_amng"]);
    $avis_stah = htmlspecialchars($_POST["avis_stah"]);
    $valide_stah = htmlspecialchars($_POST["valide_stah"]);
    $approuve_stah = htmlspecialchars($_POST["approuve_stah"]);
    $date_stah=date("Y-m-d");
    $avis_st = new STAH($id_stah,$avis_stah,$avis_amng,$date_stah,$valide_stah,$approuve_stah,$rem_stah,$rem_bet,$super_bv);
    $p= new STAH_Service();
    if($p->update($avis_st)){
        header("Location: details.php?id=".$id_stah); }
    
}

?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Ajouter Projet</title>

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
        padding: 20px 20px;
        }

        legend {
        color: #000;
        /* margin: auto; */
        font-size: small;
        font-weight: bolder;
        }

        .form-control[readonly]{
            background-color: gray;
            border-bottom: 1px dashed #ccc;
            box-shadow: none;
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
                <!-- Page Content -->
                <div class="content">

                    <!-- Validation Wizards -->
                    <h2 class="content-heading">Ajouter un nouveau projet</h2>
                    <div class="row justify-content-center py-20">
                       
                        <div class="col-lg-12">
                            <!-- Block Tabs Animated Slide Up -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-animated-slideup-ABHT">ABHT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SEPRE">SEPRE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-STAH">STAH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SQE">SQE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SGDPH">SGDPH</a>
                                    </li>
                                    <li class="nav-item ml-auto">
                                        <a class="nav-link" href="#btabs-animated-slideup-settings"><i class="si si-settings"></i></a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content overflow-hidden">
                                    <div class="tab-pane show active" id="btabs-animated-slideup-ABHT"  role="tabpanel">
                                        <div class="block-content">
                                        <form action="Prj_ajouter.php" method="post">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" value="<?php if(isset($id1)) {echo $id1;} ?>" name="id_abht" readonly>
                                                        <label for="register2-username">Identifiant du projet</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="contact2-msg" name="rem_gen" rows="4"  <?php if($rem_gen1!=="0"){echo "readonly";} ?> > <?php if($rem_gen1!=="0") {echo $rem_gen1;} ?></textarea>
                                                        <label for="contact2-msg">Remarque</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="avis_abht" size="1">
                                                            
                                                            <?php
                                                                $ss = new Avis_Service();
                                                                $tc = $ss->findAll();
                                                                if($avis_abht1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($avis_abht1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Avis ABHT</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="etabli_abht" size="1">
                                                            <?php
                                                                $ss = new User_Service();
                                                                $tc = $ss->findAll();
                                                                if($avis_abht1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($etabli_abht1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">établi par</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="valide_abht" size="1">
                                                            <?php
                                                                $ss = new User_Service();
                                                                $tc = $ss->findAll();
                                                                if($avis_abht1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($valide_abht1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Validé par</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="form-material">
                                                        <select class="form-control" id="contact2-subject" name="approuve_abht" size="1">
                                                            <?php
                                                                $ss = new User_Service();
                                                                $tc = $ss->findAll();
                                                                if($avis_abht1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($approuve_abht1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="contact2-subject">Approuvée par</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                <?php 
                                                    if($avis_abht1 !=="0"){ 
                                                        echo '<button class="btn btn-alt-success" name="abht">
                                                            <i class="fa fa-check mr-5"></i>Avis Ajouté
                                                        </button>';  
                                                    } else {
                                                        echo '<button type="submit" class="btn btn-alt-success" name="abht">
                                                        <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                    </button>'; 
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-animated-slideup-SEPRE" href="#btabs-animated-slideup-SEPRE" role="tabpanel">
                                        <div class="block-content">
                                            <form action="Prj_ajouter.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="id_sepre" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="orig_aep" size="1">
                                                                <?php
                                                                
                                                                    $ss = new OrigineAep_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($orig_aep1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($orig_aep1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="register2-username">Origine de l'eau potable </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="besoin_domes" value="<?php if($bet_eau_dom1!=="0") {echo $bet_eau_dom1;} ?>" <?php if($avis_sepre1!=="0") {echo "readonly";} ?> >
                                                            <label for="register2-username">Besoin en eau domestique</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="speci_autre" rows="4"  <?php if($avis_sepre1!=="0") {echo "readonly";} ?> ><?php if($origine_autre1!=="0"){echo $origine_autre1;} ?></textarea>
                                                            <label for="contact2-msg">Specifier si autre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="besoin_irr" rows="4" <?php if($avis_sepre1!=="0") {echo "readonly";} ?> ><?php if($origine_autre1!=="0"){echo $origine_autre1;} ?> </textarea>
                                                            <label for="contact2-msg">Besoin en eau d'irrigation</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" <?php if($remarque_bet_besoin_eau1!=="0") {echo "readonly";} ?> ><?php if($remarque_bet_besoin_eau1!=="0"){echo $remarque_bet_besoin_eau1;} ?> </textarea>
                                                            <label for="contact2-msg">Remarques de BET sur les besoins en eau</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_sepre" rows="4" <?php if($remarque_sup_sepre1!==NULL) {echo "readonly";} ?> ><?php if($remarque_sup_sepre1!==NULL){echo $remarque_sup_sepre1;} ?></textarea>
                                                            <label for="contact2-msg">Remarques Supplémentaires du SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sepre" size="1">
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($avis_sepre1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($avis_sepre1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <?php 
                                                            if($avis_sepre1!=="0"){ 
                                                                echo '<button class="btn btn-alt-success" name="sepre">
                                                                    <i class="fa fa-check mr-5"></i>Avis déjà Ajouté
                                                                </button>';
                                                            }else{
                                                                echo '<button type="submit" class="btn btn-alt-success" name="sepre">
                                                                <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                            </button>'; 
                                                            }

                                                        ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-animated-slideup-STAH" role="tabpanel">
                                        <div class="block-content">
                                            <form action="Prj_ajouter.php" method="post" >
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="id_stah" value="<?php if(isset($id1)){echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rema_bet_stah" rows="4" <?php if($rem_sup_stah1!==NULL) {echo "readonly";} ?> ><?php if($rem_sup_stah1!==NULL){echo var_dump($remarque_bet_assai1);} ?></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire STAH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rema_stah" rows="4" <?php if($amen_prop1!==NULL) {echo "readonly";} ?> ><?php if($amen_prop1!==NULL){echo $amen_prop1;} ?></textarea>
                                                            <label for="contact2-msg">Amengaments Proposés</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_stah" size="1">
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($avis_stah1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($avis_stah1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis STAH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_stah" size="1">
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($avis_stah1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($valide_par_stah1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_stah" size="1">>
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($avis_stah1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($valide_par_stah1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvée par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <?php 
                                                            if(isset($avis_abht1)){ 
                                                                echo '<button class="btn btn-alt-success" name="stah">
                                                                    <i class="fa fa-check mr-5"></i>Avis déjà Ajouté
                                                                </button>';
                                                            }else{
                                                                echo '<button type="submit" class="btn btn-alt-success" name="stah">
                                                                <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                            </button>'; 
                                                            }

                                                        ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-animated-slideup-SQE" role="tabpanel">
                                        <div class="block-content">
                                            <form action="Prj_ajouter.php" method="post" >
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="id_sqe" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="volume_use" value="<?php if($volume_eau_use1!==NULL) {echo $volume_eau_use1;} ?>" <?php if($volume_eau_use1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Volumes des eaux usées</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="mode_assai" size="1">
                                                            <?php
                                                                $ss = new ModeAssain_Service();
                                                                $tc = $ss->findAll();
                                                                if($modeassai1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($modeassai1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                            <label for="register2-username">Mode d'assainissement</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" value=" <?php if($reut_qeu1!==NULL) {echo $reut_qeu1;} ?> " name="reutil" <?php if($reut_qeu1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Réutilisation QEU</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="niv_trat" value="<?php if($niv_trait1!==NULL) {echo $niv_trait1;} ?>" <?php if($niv_trait1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Niveau de traitement</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="niveau_piezo" value="<?php if($niv_piezo1!==NULL) {echo $niv_piezo1;} ?>" <?php if($niv_piezo1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Niveau Piézométrique</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="datenivea" value="<?php if($date_piezo1!==NULL) {echo $date_piezo1;} ?>" <?php if($date_piezo1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Date Niveau Piézométrique</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="coord_x" value="<?php if($coord_x1!==NULL) {echo $coord_x1;} ?>" <?php if($coord_x1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Coordonnées X du périmètre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="coord_y" value="<?php if($coord_y1!==NULL) {echo $coord_y1;} ?>" <?php if($coord_y1!==NULL) {echo "readonly";} ?>>
                                                            <label for="register2-username">Coordonnées Y du périmètre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="trat_boue" value="<?php if($trat_boue1!==NULL) {echo $trat_boue1;}?>" <?php if($trat_boue1!==NULL) {echo "readonly";} ?> >
                                                            <label for="register2-username">Traitement de la boue</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" <?php if($remarque_bet_assai1!==NULL) {echo "readonly";} ?> ><?php if($remarque_bet_assai1!==NULL) {echo $remarque_bet_assai1;}  ?></textarea>
                                                            <label for="contact2-msg">Remarque du BET</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_sqe" rows="4" <?php if($remarque_sup_sqe1!==NULL) {echo "readonly";} ?>><?php if($remarque_sup_sqe1!==NULL) {echo $remarque_sup_sqe1;}  ?></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaires du SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sqe" size="1">
                                                            <?php
                                                                $ss = new Avis_Service();
                                                                $tc = $ss->findAll();
                                                                if($avis_sqe1!=="0"){
                                                                    foreach($tc as $row) {
                                                                        if($avis_sqe1== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SQE</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_sqe" size="1">
                                                            
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($avis_sqe1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($valide_sqe1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_sqe" size="1">
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    if($approuve_par_sqe1!=="0"){
                                                                        foreach($tc as $row) {
                                                                            if($approuve_par_sqe1== $row[0]){
                                                                                echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                            }else{
                                                                                echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo "<option></option>";
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvé par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="sqe">
                                                                <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                            </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-animated-slideup-SGDPH" role="tabpanel">
                                        <div class="block-content">
                                            <form action="Prj_ajouter.php" method="post">
                                                <fieldset class="inputTextWrap">
                                                    <legend>informations</legend>
                                                    <div class="form-group row">
                                                
                                                        <div class="col-4">
                                                            <div class="form-material ">
                                                                <input type="text" class="form-control" id="register2-username" name="id_sgdph" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                                <label for="register2-username">Identifiant du projet</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="type_cours" size="1">
                                                                    <?php
                                                                        $ss = new TypeCEau_Service();
                                                                        $tc = $ss->findAll();
                                                                        if($type_cours1!=="0"){
                                                                            foreach($tc as $row) {
                                                                                if($type_cours1== $row[0]){
                                                                                    echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                                }else{
                                                                                    echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                                }
                                                                            }
                                                                        }else{
                                                                            echo "<option></option>";
                                                                            foreach($tc as $row) {
                                                                                echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <label for="register2-username">Type du cours d'eau</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="nom_cours" value="<?php if($nom_cours1!=="0" || $nom_cours1!==NULL ) {echo $nom_cours1;} ?>" <?php if($nom_cours1!=="0" || $nom_cours1!==NULL ) {echo "readonly";} ?>>
                                                                <label for="register2-username">Nom du cours d'eau</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="debit_cours" value="<?php if($debit_cours1!=="0" || $debit_cours1!==NULL) {echo $debit_cours1;} ?>" <?php if($debit_cours1!=="0" || $debit_cours1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Débit centennale (m3/s)</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="nature_cours" size="1">
                                                                    <?php
                                                                        $ss = new NatureCeau_Service();
                                                                        $tc = $ss->findAll();
                                                                        if($nature_cours1!=="0"){
                                                                            foreach($tc as $row) {
                                                                                if($nature_cours1== $row[0]){
                                                                                    echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                                }else{
                                                                                    echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                                }
                                                                            }
                                                                        }else{
                                                                            echo "<option></option>";
                                                                            foreach($tc as $row) {
                                                                                echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <label for="register2-username">Nature du cours d'eau</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="servitude" value="<?php if($servitude1!==NULL || $servitude1!=="0" ) {echo $servitude1;} ?>" <?php if($servitude1!==NULL || $servitude1!=="0" ) {echo "readonly";} ?>>
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
                                                                <input type="text" class="form-control" id="register2-username" name="origine_eaux" value="<?php if($origine_eaux1!=NULL || $origine_eaux1="0") {echo $origine_eaux1;} ?>" <?php if($origine_eaux1!=NULL || $origine_eaux1="0") {echo "readonly";} ?>>
                                                                <label for="register2-username">Origine de l'eau potable Puits X</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="origine_eauy" value="<?php if($origine_eauy1!=NULL || $origine_eauy1="0") {echo $origine_eauy1;} ?>" <?php if($origine_eauy1!=NULL || $origine_eauy1="0") {echo "readonly";} ?>>
                                                                <label for="register2-username">Origine de l'eau potable Puits Y</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_creus" value="<?php if($date_aut_creus1!==NULL) {echo $date_aut_creus1;} ?>" <?php if($date_aut_creus1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Date d'autorisation de creusement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_creus" value="<?php if($num_aut_creus1 !==NULL) {echo $num_aut_creus1;} ?>" <?php if($num_aut_creus1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Numéro d'autorisation de creusement  </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="css-control css-control-success css-switch disabled">
                                                                <input type="checkbox" class="css-control-input" id="box" name="aut1" <?php if($aut_creus1!==NULL) { if($aut_creus1="1"){echo "checked disabled"; } } ?>>
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
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_prelev" value="<?php if($date_aut_prelev1!==NULL) {echo $date_aut_prelev1;} ?>" <?php if(isset($date_aut_prelev1)) {echo "readonly";} ?>>
                                                                <label for="register2-username">Date d'autorisation de prelevelement  </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_prelev" value="<?php if($num_aut_prelev1!==NULL) {echo $num_aut_prelev1;} ?>" <?php if($num_aut_prelev1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Numéro d'autorisation de prelevelement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="css-control css-control-success css-switch disabled">
                                                                <input type="checkbox" class="css-control-input" name="aut_prele" <?php if($aut_prele1!==NULL) { if($aut_prele1="1"){echo "checked"; } } ?>>
                                                                <span class="css-control-indicator"></span> Autorisation de prelevelement 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="inputTextWrap">
                                                    <legend>informations de deversement</legend>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_dev" value="<?php if($avis_sgdph1!==NULL) {echo $date_aut_dev1;} ?>" <?php if($date_aut_dev1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Date d'autorisation de deversement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_dev" value="<?php if($num_aut_dev1!==NULL) {echo $num_aut_dev1;} ?>" <?php if($num_aut_dev1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Numéro d'autorisation de deversement</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="css-control css-control-success css-switch disabled">
                                                                <input type="checkbox" class="css-control-input" name="aut_dev"  <?php if($aut_dev1!==NULL) { if($aut_dev1="1"){echo "checked"; } } ?>>
                                                                <span class="css-control-indicator"></span> Autorisation de deversement 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="inputTextWrap">
                                                    <legend>informations d'occupation de DPH</legend>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_occ" value="<?php if($date_aut_occ1!==NULL) {echo $date_aut_occ1;} ?>" <?php if($date_aut_occ1!==NULL) {echo "readonly";} ?> >
                                                                <label for="register2-username">Date d'autorisation de l'occupation du dph </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_occ" value="<?php if($num_aut_occ1!==NULL) {echo $num_aut_occ1;} ?>" <?php if($num_aut_occ1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Numéro d'autorisation de l'occupation du dph</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="css-control css-control-success css-switch disabled">
                                                                <input type="checkbox" class="css-control-input" name="aut_occ"  <?php if($aut_occ1!==NULL) { if($aut_occ1="1"){echo "checked"; } } ?>>
                                                                <span class="css-control-indicator"></span> Autorisation de l'occupation du dph
                                                            </label>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="autre_autorisation" value="<?php if($autre_autorisation1!==NULL) {echo $autre_autorisation1;} ?>" <?php if($autre_autorisation1!==NULL) {echo "readonly";} ?>>
                                                                <label for="register2-username">Autre autorisation</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="inputTextWrap">
                                                    <legend>Avis et Remarques</legend>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <textarea class="form-control" id="contact2-msg" name="rem_sgdph" rows="4" <?php if($rem_sgdoh1!==NULL) {echo "readonly";} ?> ><?php if($rem_sgdoh1!==NULL) {echo $rem_sgdoh1;}  ?></textarea>
                                                                <label for="contact2-msg">Remarque Supplémentaires du SGDPH</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" <?php if($rem_bet1!==NULL) {echo "readonly";} ?> ><?php if($rem_bet1!==NULL) {echo $rem_bet1;}  ?></textarea>
                                                                <label for="contact2-msg">Remarque BET su le DPH</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="avis_sgdph" size="1">
                                                                    <?php
                                                                        $ss = new Avis_Service();
                                                                        $tc = $ss->findAll();
                                                                        if($avis_sgdph1!==NULL){
                                                                            foreach($tc as $row) {
                                                                                if($avis_sgdph1== $row[0]){
                                                                                    echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                                }else{
                                                                                    echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                                }
                                                                            }
                                                                        }else{
                                                                            echo "<option></option>";
                                                                            foreach($tc as $row) {
                                                                                echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <label for="contact2-subject">Avis SGDPH</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="valide_sgdph" size="1">

                                                                    <?php
                                                                        $ss = new User_Service();
                                                                        $tc = $ss->findAll();
                                                                        if($valide_sgdph1!==NULL){
                                                                            foreach($tc as $row) {
                                                                                if($valide_sgdph1== $row[0]){
                                                                                    echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                                }else{
                                                                                    echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                                }
                                                                            }
                                                                        }else{
                                                                            echo "<option></option>";
                                                                            foreach($tc as $row) {
                                                                                echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <label for="contact2-subject">Validé par</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="approuvee_sgdph" size="1">
                                                                    <?php
                                                                        $ss = new User_Service();
                                                                        $tc = $ss->findAll();
                                                                        if($approuve_sgdph1!==NULL){
                                                                            foreach($tc as $row) {
                                                                                if($approuve_sgdph1== $row[0]){
                                                                                    echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                                }else{
                                                                                    echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                                }
                                                                            }
                                                                        }else{
                                                                            echo "<option></option>";
                                                                            foreach($tc as $row) {
                                                                                echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                            }
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
                                                            <button type="submit" class="btn btn-alt-success" name="sgdph">
                                                                <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                            </button>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
        </div>
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
        <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_forms_wizard.js"></script>
    </body>
</html>