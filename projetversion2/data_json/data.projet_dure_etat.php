<?php 
/**
* OUMAIMA SABI
* DATE:09/03/2022
*/

require_once '../couche_service/Classe.Service.projet.php';

$b = new Projet_Service();
$bb1 = $b->dureedayetatprj10();
$bb2=$b->dureedayetatprj30();
$bb3=$b->dureedayetatprjplus30();

$data1 = array();
$data2 = array();
$data3 = array();

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

foreach ($bb2 as $row) {
    $data2[] = array(
        "action"=>'En retard',
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

foreach ($bb3 as $row) {
    $data3[] = array(
        "action"=>'Etat critique',
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

$response=array_merge($data3,$data1, $data2);
$r=array(
       "data" => $response
    );

echo json_encode($r);