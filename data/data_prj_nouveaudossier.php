<?php
/**
* OUMAIMA SABI
* DATE:22/02/2022
*/

require_once '../Couche_Service/Service_etat.php';
$b = new Etat_Service();
$bb2 = $b->projnew();

$data = array();

foreach ($bb2 as $row) {
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
$response2 = array(
   "data" => $data
);

echo json_encode($response2);