<?php
    /**
    * OUMAIMA SABI
    * DATE:04/05/2022
    */
    require_once 'Map.home.php';
?>        
    <div id="map" style='height: 100vh'></div>
    </main>
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">oumaima sabi</a> &copy; <span class="js-year-copy">2022</span>
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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
         <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/pages/be_tables_datatables.js"></script>
        <script>
            jQuery(function () {
            Codebase.helpers('table-tools');
            });

            

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

                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.php",
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
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:c,
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"bar",
                        data: data3,
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

            /*fonction de l'envenement click*/
            function onMapClick(e) {
            popup
            .setLatLng(e.latlng)
            .setContent('You clicked the map at ' + e.latlng.toString())
            .openOn(map);
            };

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

            var prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{style: {color: "green"}
                
            });

            prj.on('mouseout', function (e) {
            document.getElementById("info").innerHTML ="oumaima";
            });

            prj.on('mouseover', function (e) {
                document.getElementById("info").innerHTML =e.layer.feature.properties.numero_dossier;
                // url="http://localhost/projectpfe/projetversion2/data_json/data.chartavisforeveryprojet.php?id="+e.layer.feature.properties.gid;

            });

            $.ajax({
                url:"http://localhost/projectpfe/projetversion2/data_json/data.chartavisforeveryprojet.php?id=1",
                type:"GET",
                data:'data',
                success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;
                        var n = [];
                        n.push(d.data[0].nombre_sepre);
                        n.push(d.data[1].nombre_stah);
                        n.push(d.data[1].nombre_sgdph);
                        n.push(d.data[1].nombre_sqe);
                        
                        var ctxt=$("#myChart").get(0).getContext('2d');
                        var data3={
                        labels : ["sepre","stah","sgdph","sqe"],
                        datasets : [
                            {
                            data: n,
                            backgroundColor:['#99D77E','#D7A67E','#D7C47E','55BFCB']
                            }
                        ]
                        }
                        var chart1= new Chart ( ctxt , {
                        type:"bar",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                },
            });

            // prj.on('load', function (e) {
            //     myFunction(e.layer.feature.properties.gid);

            // });;


            prj.addTo(map);

            // prj.on('mouseout', function (e) {
            //     document.getElementById('chart').innerHTML = 'oumaima';
            // });

          
                

            

    const legend = L.control({ position: "bottomleft" });

    legend.onAdd = function () {
    let div = L.DomUtil.create("div", "description");
    L.DomEvent.disableClickPropagation(div);
    const text ='<div id="chart" class="block block-rounded block-bordered"><div class="block-header block-header-default border-b"><h3 class="block-title"><small> Chart des nombre d\'avis du projet d\'investissement selon les services  </small></h3></div><div class="block-content block-content-full"><div id="info"></div><div class="pull-all pt-50"><canvas class="" id="myChart"><canvas></div></div></div>';
    div.insertAdjacentHTML("beforeend", text);
    return div;
    };

    legend.addTo(map);

</script>
    

    </body>
</html>