<?php 
/**
* OUMAIMA SABI
* DATE:22/02/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->projpaye();

$data1 = array();

foreach ($bb as $row) {
   $data1[] = array(
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "payement"=>$row['payement']='payé'
   );
}

// Response
$response = array(
   "data2" => $data1
);

echo json_encode($response);