<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';
$b = new Avis_Service();
$bb = $b->findSTAH();

$data = array();

foreach ($bb as $row) {
   $data[] = array(
      "avis"=>$row['avis'],
	  "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "remarque_sup_stah"=>$row['remarque_sup_stah'],
      "date_avis_stah"=>$row['date_avis_stah'],
      "valide_par_stah"=>$row['valide_par_stah'],
      "approuve_par_stah"=>$row['approuve_par_stah'],


   );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);


