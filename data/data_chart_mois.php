<?php 
/**
* OUMAIMA SABI
* DATE:01/02/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->nb_prj_by_m_a_etat();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
        "nombre"=>$row['count'],
        "mois"=>$row['mois'],
        "annee"=>$row['annee'],
        "etat_dossier"=>$row['etatdossier'],
        'color'=>'#'.rand(100000,999999).'',
        'mois_annee'=>$row['mois'].'-'.$row['annee'].':'.$row['etatdossier'],
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);