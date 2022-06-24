<?php 
/**
* OUMAIMA SABI
* DATE:04/05/2022
*/

require_once '../couche_service/Classe.Service.etat.php';

$b = new Etat_Service();
$bb = $b->projnew1();

$features =[];

foreach ($bb as $row) {
    unset($row['geom']);
    $geometry=$row['geojson']=json_decode($row['geojson']);

    unset($row['geojson']);
    $feature=["type"=>"Feature",
              "geometry"=>$geometry,
              "properties"=>$row
             ];
    array_push($features,$feature);
}

$featureCollection=[
    "type"=>"FeaturCollection",
    "features"=>$features
];

echo json_encode($featureCollection);