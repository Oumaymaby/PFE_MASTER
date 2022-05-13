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
		<title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
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
		<script src="http://www.chartjs.org/assets/Chart.js"></script>
		
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
        <script type="text/javascript" src="assets/js/map/measure.js"></script>
		<script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
        <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
		<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    	<script type="text/javascript" src="http://www.chartjs.org/assets/Chart.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<style>
		#map {
			width: 100%;
			height: 760px;
			align: center;
		}

		.info {
			padding: 16px 10px;
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

	</style>
</head>
<body>
	<div id="map"></div>

	
	<!-- <script src="assets/js/core/jquery.min.js"></script> -->
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
                                'rgba(153, 102, 255, 0.9)',
                                'rgba(255, 159, 64, 0.9)'];
        var colors = [];
        for (var i = 0; i < dataLength; i++) {
            colors.push(backgroundColors[i]);
        };
        console.log('newChart colors', colors);
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Services',
                        data: data,
                        backgroundColor: colors,
                        borderColor: colors,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
    };

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
		

	//Print
	L.control.browserPrint().addTo(map);

	//Echelle
	L.control.scale().addTo(map);

	L.Control.geocoder().addTo(map);


	//base layers
	var baseLayers = {
	"Satellite":googleSat,
	"Google Map":googleStreets,

	};

	// custom popup image + text
	// const customPopup = ;

	//affichage des projests d'inverstissements  
	var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{style: {color: "green"},onEachFeature: function(feature, layer) {
			layer.bindPopup(`<div class="popup"><div>`);
	}});

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
		"Projet": $prj,
		
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
					var dems ='<div class="block"><div class="block-header block-header-default"><h3 class="block-title">Statitistique de chaque projet d\'investisement</h3><div class="block-options"><a type="button" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+props.gid+'" class="btn btn-rounded btn-noborder btn-primary min-width-125 mb-10">More info</a><button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button><button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button></div><div class="block-options"><div class="block-options-item"></div></div></div><div class="block-content"><table class="table table-sm table-vcenter"><thead><tr><th >'+props.intitule_projet+'</th><th class="d-none d-sm-table-cell" style="width: 60%;">Information </th></tr></thead><tbody><tr><td>Identifiant du projet </td><td class="d-none d-sm-table-cell"><span class="badge badge-danger">'+props.gid+'</span></td></tr><tr><td>Numéro du dossier </td><td class="d-none d-sm-table-cell"><span class="badge badge-primary">'+props.numero_dossier+'</span></td></tr><tr><td>Numero d\'archive</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.numero_archive+'</span></td></td></tr><tr><td>Numéro du dossier </td><td class="d-none d-sm-table-cell"><span class="badge badge-primary">'+props.numero_dossier+'</span></td></tr><tr><td>Type du dossier</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.type_dossier+'</span></td></td></tr><tr><td>Etat du dossier</td><td class="d-none d-sm-table-cell"><span class="badge badge-info">'+props.etatdossier+'</span></td></td></tr></tbody></table></div></div>';
                    
                    dems += '<canvas id="myChart" width="10" height="10"></canvas>';
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

		$.getJSON ("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php", function(data) {
			console.log('geojson retrieved');
			geojson = L.geoJson(data, {
				style: style,
				onEachFeature: onEachFeature
			}).addTo(map);
		});
		
	</script>
</body>
</html>
