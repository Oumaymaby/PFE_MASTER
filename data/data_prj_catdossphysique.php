<?php 
/**
* OUMAIMA SABI
* DATE:23/02/2022
*/

require_once '../Couche_Service/Service_categorie.php';

$b = new Categorie_Service();
$bb = $b->finddossphy();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
	  "categorie"=>$row['categorie'],
	  "gid"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      
   );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);

