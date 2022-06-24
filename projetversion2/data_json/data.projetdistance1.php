<?php 
/**
* OUMAIMA SABI
* DATE:04/05/2022
*/


require_once '../couche_service/Classe.Service.layers.php';
$id=$_GET['id'];
$distance=$_GET['dist'];
$b = new Layer_Service();
$a= $b->distance_reseau2($distance,$id);

$features =[];

foreach ($a as $row) {
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