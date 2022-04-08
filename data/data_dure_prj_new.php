<?php 
/**
* OUMAIMA SABI
* DATE:08/04/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb1 = $b->dureedayetatprj10_new();
$bb2=$b->dureedayetatprj30_new();
$bb3=$b->dureedayetatprjplus30_new();

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
        "avis_sepre"=>$row['avis_sepre'],
        "avis_sqe"=>$row['avis_sqe'],
        "avis_sgdph"=>$row['avis_sgdph'],
        "avis_stah"=>$row['avis_stah'],
        "avis_abht"=>$row['avis_abht']
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
        "avis_sepre"=>$row['avis_sepre'],
        "avis_sqe"=>$row['avis_sqe'],
        "avis_sgdph"=>$row['avis_sgdph'],
        "avis_stah"=>$row['avis_stah'],
        "avis_abht"=>$row['avis_abht']

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
        "avis_sepre"=>$row['avis_sepre'],
        "avis_sqe"=>$row['avis_sqe'],
        "avis_sgdph"=>$row['avis_sgdph'],
        "avis_stah"=>$row['avis_stah'],
        "avis_abht"=>$row['avis_abht']

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