<?php 
/**
* OUMAIMA SABI
* DATE:24/02/2022
*/

require_once '../Couche_Service/Service_typeceau.php';

$b = new TypeCEau_Service();
$bb = $b->findkhettara();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
      "type_cours_eau"=>$row['type_cours_eau'],
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
   "data" => $data
);

echo json_encode($response);