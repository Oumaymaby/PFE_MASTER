<?php
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/

require_once '../couche_service/Classe.Service.projet.php';
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.css"/>
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
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
		<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.min.js"></script>
    

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
        left: 150px;
        z-index: 400;
        max-width: 1000px;
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
        }
        #inf{
            /* font-family: 'Rubik', serif !important; */
            font-weight: 1000 !important;
            font-size: 19px;
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
        	<main id="main-container">
				
				<div id="map"><button class="leaflet-bar"><i class="fa fa-map-o"></i></button></div>
                
				<div id="time-ranges" class="leaflet-bar">
                    <form action="#" id="form">
                        <label for="from" id="res" class="select1">
                            Réseau hydrographique près du Projet
                            <select id="projet" name="" class="etaat">
                            <option value="">--Choisir--</option>
                            <?php 
                            $prj= new Projet_Service();
                            $aa=$prj->findAll();
                            
                            foreach($aa as $row){
                                echo '
                                
                                <option value="'.$row['gid'].'">'.$row['intitule_projet'].'</option>
                                ';
                            }    
                            
                            ?>
                            </select>
                            
                            
                        </label>
                        <label for="to" id="dist" class="select1">
                            Distance(m)
                            <select id="distance" name="" class="etaat">
                                <option value="volvo">--Choisir--</option>
                                <option value="0.003">30</option>
                                <option value="0.004">40</option>
                                <option value="0.005">50</option>
                                <option value="0.006">60</option>
                                <option value="0.007">70</option>
                            </select>
                        </label>
                    </form>
                </div>
                <div id="time-ranges1" class="leaflet-bar">
                    <form action="#" id="form1">
                        <label for="from" id="select1" class="select1">
                        Projet selon l'état
                        <select id="etaat" name="" class="etaat">
                            <option value="volvo">--Choisir--</option>
                            <option value="encour">Projet en cours</option>
                            <option value="cloturee">Projet cloturé</option>
                        </select>
                    </form>
                </div>
                <!-- <div id="info-pane" class="leaflet-bar">
                        <div id="badge" class="block-content">
                            <p id="inf" class="text-white">Information du Projet</p>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-4 text-right border-r" id="col4">
                                    <div class="" data-toggle="appear" data-class="animated fadeInLeft">
                                        <div id="num" class="font-size-h3 font-w600 ">63250</div>
                                        <div id="mut1" class="font-w600">Numéro du Dossier</div>
                                    </div>
                                    <div class="" data-toggle="appear" data-class="animated fadeInLeft">
                                        <div id="numid" class="font-size-h3 font-w600">97%</div>
                                        <div id="mut2" class="font-w600">Identifiant</div>
                                    </div>
                                </div>
                                <div class="col-4 text-right border-r" id="col42">
                                    <div class="" data-toggle="appear" data-class="animated fadeInLeft">
                                        <div id="intiti" class="font-size-h5 font-w600">Intitulé du projet</div>
                                        <div class="font-size-sm font-w600 text-black">dgfxdg </div>
                                    </div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="" data-toggle="appear" data-class="">
                                        <div class="progress push">
                                            <div class="progress-bar" role="progressbar" style="width: 30%; height: 8px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> -->
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

        /*layer google satellites */
        var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        });
        // googleSat.addTo(map);

        /*layer googleStreets */
        var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
        });
        googleStreets.addTo(map);


	// // Geosearch
	// L.Control.geocoder().addTo(map);

	//Print
	L.control.browserPrint().addTo(map);
	

	//Echelle
	L.control.scale().addTo(map);

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
		
	};


	L.control.layers(baseLayers,overlays,{position: 'bottomright'}).addTo(map);



    

    var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{style: {color: "#0b5394",opacity: 0.65, weight:1}}).addTo(map);

    
    var oldId;

    // $prj.on('mouseout', function (e) {
    //     document.getElementById('info-pane').innerHTML = '';
    //     $prj.resetFeatureStyle(oldId);
    // });

    // $prj.on('click', function (e) {
    //     oldId = e.layer.feature.gid;
    //     var labels = ['sepre', 'stah','sgdph','sqe'];
    //     var data = [e.layer.feature.properties.sepre, e.layer.feature.properties.sqe,e.layer.feature.properties.stah,e.layer.feature.properties.sgdph];
    //     var h1= '<div id="badge" class="block-content"><p id="inf" class="text-white">Information du Projet</p></div>';
    //     h1+='<div class="block-content block-content-full"><div class="row"><div class="col-4 text-left border-r" id="col4">';
    //     h1+='<div class="" data-toggle="appear" data-class="animated fadeInLeft"><div id="num" class="font-size-h5 font-w600 ">Numéro du dossier</div><div id="mut1" class="font-w600">'+e.layer.feature.properties.numero_dossier+'</div>';
    //     h1+='</div><div class="" data-toggle="appear" data-class="animated fadeInLeft"><br><div id="numid" class="font-size-hr font-w600">Identifiant</div><div id="mut2" class="font-w600">'+e.layer.feature.properties.gid+'</div>';
    //     h1+='</div></div><div class="col-4 text-right border-r" id="col42"><div class="" data-toggle="appear" data-class="animated fadeInLeft"><div id="intiti" class="font-size-h5 font-w600">Intitulé du projet</div>';
    //     h1+='<div class="font-size-sm font-w600 text-black">'+e.layer.feature.properties.intitule_projet+'</div></div></div><div class="col-4 text-right"><div class="" data-toggle="appear" data-class="">';
    //     h1+='<div class="progress push"><div class="progress-bar" role="progressbar" style="width: 30%; height: 8px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div></div>';
    //     h1+='<canvas id="myChart" width="300" height="300"></canvas><div id="legend"></div></div></div></div>';
    //     document.getElementById('info-pane').innerHTML = h1;
    //     newChart(labels, data);
        
    // });


    

    document.getElementById("etaat").onchange = function(){
        if (this.value == 'encour') {
            var $nprj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.new.php",{style: {color: "red"}});
            $nprj.addTo(map)

        }
        if (this.value == 'cloturee') {
            var $cprj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.cloturer.php",{style: {color: "green"}});
            $cprj.addTo(map);
        }
    }


    // document.getElementById("projet").onchange = function(){
    //     document.getElementById("projet").onchange = function(){

    //     }
    // }

    const prj = document.getElementById('projet');
    const dist = document.getElementById('distance');
        prj.addEventListener('change', (e) => {
            
            dist.addEventListener('change', (ev) => {
                if(e.target.value=="" || ev.target.value==""){
                    map.on('load', onMapLoad);
                }else{
                    var $pdis = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projetdistance1.php?id="+e.target.value+"&dist="+ev.target.value+"",{style: {color: "red"}});
                    var oum= $pdis.addTo(map);
                    var $pdis1 = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projetdistance.php?id="+e.target.value+"&dist="+ev.target.value+"",{style: {color: "blue"}});
                    var oum1= $pdis1.addTo(map);
                }
                
                console.log(e.target.value);
                console.log(ev.target.value);
            }, false);

        }, false);

    // create custom button
    const customControl = L.Control.extend({
    // button position
    options: {
        position: "topleft",
    },

    // method
    onAdd: function (map) {
        // create button
        const btn = L.DomUtil.create("button");
        btn.className = "load";
        btn.id = "load";
        btn.setAttribute(
        "style",
        "width: 34px; height: 30px; border-radius:5px;border:none; display: flex; cursor: pointer; justify-content: center; font-size: 2rem;"
        );

        btn.onclick = function () {

        };
        return btn;
    },
    });

    // adding new button to map controll
    L.Routing.control({
    waypoints: [
        L.latLng(31.630000,-8.008889),
        L.latLng(31.630000,-7.008889),
    ],
    routeWhileDragging: true,
    lineOptions: {
        styles: [{ color: "red", opacity: 0.7, weight: 8 }],
    },position:'bottomleft'
    }).addTo(map);





	</script>
</body>
</html>
