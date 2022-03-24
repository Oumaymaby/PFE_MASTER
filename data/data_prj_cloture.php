<?php 
/**
* OUMAIMA SABI
* DATE:22/02/2022
*/

require_once '../Couche_Service/Service_etat.php';
$b = new Etat_Service();
$bb = $b->projcloture();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "etatdossier"=>$row['etatdossier']
   );
}

// Response
$response = array(
   "aaData" => $data
);

echo json_encode($response);