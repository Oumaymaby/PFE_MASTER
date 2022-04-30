<?php 
/**
* OUMAIMA SABI
* DATE:24/02/2022
*/

require_once '../Couche_Service/Service_categorie.php';


$b = new Categorie_Service();
$bb = $b->findcrui();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "categorie"=>$row['categorie']
   );
}

// Response
$response = array(
   "Data" => $data
);

echo json_encode($response);
