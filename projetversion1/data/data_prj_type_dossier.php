<?php 
/**
* OUMAIMA SABI
* DATE:24/02/2022
*/

require_once '../Couche_Service/Service_type_dossier.php';


$b = new Type_Dossier_Service();
$bb = $b->findattribute();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
      "typedossier"=>$row['type_dossier'],
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      
   );
}

// Response
$response = array(
   "Data" => $data
);

echo json_encode($response);