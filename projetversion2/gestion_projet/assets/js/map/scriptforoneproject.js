// $("#map").height($('#showmap1').height());
var map = L.map('map', {fullscreenControl: {pseudoFullscreen: true}, }).setView([31.630000,-8.008889], 4);


    /*layer google satellites */
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 5,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    googleSat.addTo(map);

    /*layer googleStreets */
    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 5,
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

	map.invalidateResize(true);


