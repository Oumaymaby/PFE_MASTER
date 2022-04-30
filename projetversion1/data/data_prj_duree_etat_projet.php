<?php 
/**
* OUMAIMA SABI
* DATE:01/03/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->dureedayetatprj();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
    "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
    "duree"=>$row['duree'],
    "etat_dossier"=>$row['etatdossier']

    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);