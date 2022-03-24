<?php 
/**
* OUMAIMA SABI
* DATE:23/02/2022
*/

require_once '../Couche_Service/Service_type_projet.php';

$b = new Type_projet_Service();
$bb = $b->findpetitprojet();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "type_projet"=>$row['type_projet']
   );
}

// Response
$response = array(
   "data1" => $data
);

echo json_encode($response);