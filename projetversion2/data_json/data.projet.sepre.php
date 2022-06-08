<?php 
/**
* OUMAIMA SABI
* DATE:09/03/2022
*/

require_once '../couche_service/Classe.Service.avis_sepre.php';

$b = new SEPRE_Service();
$bb1 = $b->find_prj_sepre();

$data1 = array();

foreach ($bb1 as $row) {
    $data1[] = array(
        "action"=>'bon état',
        "id"=>$row['gid'],
        "numero_dossier"=>$row['numero_dossier'],
        "commune"=>$row['commune'],
        "province"=>$row['province'],
        "maitre_ouvrage"=>$row['maitre_ouvrage'],
        "intitule_projet"=>$row['intitule_projet'],
        "duree"=>$row['duree'],
        "etat_dossier"=>$row['etatdossier'],
        "sepre"=>$row['sepre'],
        "sqe"=>$row['sqe'],
        "stah"=>$row['stah'],
        "sgdph"=>$row['sgdph'],
    );
}


// Response
// $response1 = array(
//    "data" => $data1
// );

// $response2 = array(
//     "data" => $data2
// );

// $response3 = array(
//     "data" => $data3
// );


$r=array(
       "data" => $data1
    );

echo json_encode($r);