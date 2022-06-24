<?php 
/**
* OUMAIMA SABI
* DATE:21/06/2022
*/

require_once '../couche_service/Classe.Service.layers.php';
$id=$_GET['id'];
$distance=$_GET['dist'];
$b = new Layer_Service();
$a= $b->distance_reseau($distance,$id);

$features =[];
$geometry = [];

foreach ($a as $row) {
    $geometry=[
        "projet"=>$row['geojson1'],
        "reseau"=>$row['geojson'],
    ]; 
    unset($row['geojson']);
    unset($row['geojson1']);
    $feature=["type"=>"Feature",
              "geometry"=>$geometry,
              "properties"=>[
                "id"=>$row['gid'],
                "numero_dossier"=>$row['numero_dossier'],
                "numero_archive"=>$row['numero_archive'],
                "date_arrivee_abht"=>$row['date_arrivee_abht'],
                "date_bet"=>$row['date_arrivee_bet'],
                "commune"=>$row['commune'],
                "province"=>$row['province'],
                "douar_localite"=>$row['douar_localite'],
                "maitre_ouvrage"=>$row['maitre_ouvrage'],
                "architecte"=>$row['architecte'],
                "intitule_projet"=>$row['intitule_projet'],
                "titre_foncier"=>$row['titre_foncier'],
                "superficie"=>$row['superficie'], 
                "type_projet"=>$row['type_projet'], 
                "payement"=>$row['payement'], 
                "date_payement"=>$row['date_payement'], 
                "montant_payer"=>$row['montant_payer'], 
                "fond_dossier"=>$row['fond_dossier'],
                "dates_commissions"=>$row['dates_commissions'], 
                "categories"=>$row['categories'], 
                "surface_batie"=>$row['surface_batie'], 
                "type_dossier"=>$row['type_dossier'],
                "etat_dossier"=>$row['etatdossier'],
                "sepre"=>$row['sepre'],
                "sqe"=>$row['sqe'],
                "stah"=>$row['stah'],
                "sgdph"=>$row['sgdph'],
                "name"=>$row['name'],
              ]
             ];
    array_push($features,$feature);
}

$featureCollection=[
    "type"=>"FeatureCollection",
    "features"=>$features
];

echo json_encode($featureCollection);


// foreach ($a as $row) {
//     $data[] = array(
//         "id"=>$row['gid'],
//         "numero_dossier"=>$row['numero_dossier'],
//         "numero_archive"=>$row['numero_archive'],
//         "date_arrivee_abht"=>$row['date_arrivee_abht'],
//         "date_bet"=>$row['date_arrivee_bet'],
//         "commune"=>$row['commune'],
//         "province"=>$row['province'],
//         "douar_localite"=>$row['douar_localite'],
//         "maitre_ouvrage"=>$row['maitre_ouvrage'],
//         "architecte"=>$row['architecte'],
//         "intitule_projet"=>$row['intitule_projet'],
//         "titre_foncier"=>$row['titre_foncier'],
//         "superficie"=>$row['superficie'], 
//         "type_projet"=>$row['type_projet'], 
//         "payement"=>$row['payement'], 
//         "date_payement"=>$row['date_payement'], 
//         "montant_payer"=>$row['montant_payer'], 
//         "fond_dossier"=>$row['fond_dossier'], 
//         "geojson1"=>$row['geojson1'], 
//         "dates_commissions"=>$row['dates_commissions'], 
//         "categories"=>$row['categories'], 
//         "surface_batie"=>$row['surface_batie'], 
//         "type_dossier"=>$row['type_dossier'],
//         "etat_dossier"=>$row['etatdossier'],
//         "sepre"=>$row['sepre'],
//         "sqe"=>$row['sqe'],
//         "stah"=>$row['stah'],
//         "sgdph"=>$row['sgdph'],
//         "wkb_geometry"=>$row['geojson'],
//         "name"=>$row['name'],
//     );
// }

// // Response
// $response = array(
//    "data" => $data
// );

// echo json_encode($response);