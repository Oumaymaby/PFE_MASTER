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

	<style>
		#map {
			width: 100%;
			height: 100vh;
			align: center;
		}

		.info {
			padding: 15px 15px;
			font: 12px 'Rubik', sans-serif;
			/* background: white; */
			background-color: rgba(255, 255, 255, 0.9);
			box-shadow: 0 0 15px rgba(0,0,0,0.2);
			border-radius: 5px;
			max-width: 1000px;
			max-height: 500px;
			/* position:absolute; */
			bottom: 0;
			
		}

		.info h3{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			color:black;
			font-weight: bold;
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
			width:200px;
		}
		.legend i {
			width: 18px;
			height: 18px;
			float: left;
			margin-right: 8px;
			opacity: 0.7;
		}

		.d-sm-table-cell{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			color:black;
			font-weight: bold;
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

		.badge-primary:link{
			color:white !important ;
		}

		

		#panel {
			position: absolute;
			top: 10px;
			right: 10px;
			z-index: 1000;
			background: white;
			padding: 10px;
			width:400px ;
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
				
				<div id="map"></div>
				<div id="panel" class="leaflet-bar">
					Neighborhoods
					<select name="relation" id="relationSelect">
						<option value="within">Within<options>
						<option value="contains">Contains<options>
						<option value="intersects">Intersects<options>
						<option value="overlaps">Overlaps<options>
					</select>
					<select name="geometry" id="geometrySelect">
						<option value="bounds">Bounds<options>
						<option value="point">Point<options>
						<option value="line">Line<options>
						<option value="polygon">Polygon<options>
					</select>
					<a>djfkdjk</a>
				</div>
				<!-- <button id="refreshButton">Refresh Button</button> -->
         	</main>
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
	var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{style: {color: "green"},onEachFeature: function(feature, layer) {
			layer.bindPopup(`<div class="popup"><div>`);
	}});

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
		"Projet": $prj,
		"Projet En cours":$nprj,
        "Projet cloturés":$cprj,
		
	};


	L.control.layers(baseLayers,overlays,{position: 'bottomright'}).addTo(map);


		var info = L.control({ position: "bottomleft" });

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
					var dems ='<h3 class="block-title">Statistique de chaque projet d\'investisement</h3><div class="block-options"></div><div class="block-content"><table class="table table-vcenter"><thead><tr><th class="master">'+props.intitule_projet+'</th><th class="d-none d-sm-table-cell" style="width:40%;">Information </th></tr></thead><tbody><tr><td>Identifiant du projet </td><td class="d-none d-sm-table-cell">'+props.gid+'</td></tr><tr><td>Date de dépôt du dossier</td><td class="d-none d-sm-table-cell">'+props.date_arrivee_abht+'</td></td></tr><tr><td>Numéro du dossier </td><td class="d-none d-sm-table-cell">'+props.numero_dossier+'</td></tr><tr><td>Numero d\'archive</td><td class="d-none d-sm-table-cell">'+props.numero_archive+'</td></td><tr><td>Type du dossier</td><td class="d-none d-sm-table-cell">'+props.type_dossier+'</td></td></tr><tr><td>Etat du dossier</td><td class="d-none d-sm-table-cell">'+props.etatdossier+'</td></td></tr></tbody></table></div><a type="button" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details1.php?id='+props.gid+'" class="badge badge-pill badge-primary">+ Plus</a>';
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
				color: 'yellow',
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
		function displayelement() {
			info;
		}

		function onEachFeature(feature, layer) {
			console.log('onEachFeature was entered');
			layer.on({
				mouseover: highlightFeature,
				mouseout: resetHighlight,
				// mouseout:displayelement,
			});
		}

		$.getJSON ("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php", function(data) {
			console.log('geojson retrieved');
			geojson = L.geoJson(data, {
				style: style,
				onEachFeature: onEachFeature
			}).addTo(map);
		});


		// var legend = L.control({ position: "bottomleft" });

		// legend.onAdd = function(map) {
		// var div = L.DomUtil.create("div", "legend");
		// div.innerHTML += '<H4>Chart Etat des Projets</H4>';
		// div.innerHTML += '<canvas class="" id="pieChart" ></canvas>';
		
		

		// return div;
		// };

        // legend.addTo(map);


		// get references to our <select> elements
		







		
	</script>
</body>
</html>
