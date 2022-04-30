<?php 
/**
* OUMAIMA SABI
* DATE:10/03/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$id=$_GET['id'];
$bb = $b->findById($id);


// echo $bb->getid_pr();
$features =[];
$feature1=[ 
    "id"=>$bb->getid_pr(),  
    "dat"=>$bb->getdate_arr_bet() , 
    "com"=>$bb->getcom(), 
    "province"=>$bb->getprovince(),
    "maitre"=>$bb->getmaitre_ouv() ,
    "intitule"=>$bb->getintitule_pr(), 
    "architecte"=>$bb->getarchitecte() ,
    "superficie"=>$bb->getsupf(),


];
$geometry=json_decode($bb->getgeom());

$feature=["type"=>"Feature",
              "geometry"=>$geometry,
              "properties"=>$feature1
             ];

//     unset($bb['geom']);
//     

//     unset($bb['geojson']);
//     $feature=["type"=>"Feature",
//               "geometry"=>$geometry,
//               "properties"=>$bb
//              ];

array_push($features,$feature);

$featureCollection=[
    "type"=>"FeaturCollection",
    "features"=>$features
];

echo json_encode($featureCollection);