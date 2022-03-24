<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';
$b = new Avis_Service();
$bb = $b->findSGDPH();

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
      "remarque_bet_protection_inondations"=>$row['remarque_bet_protection_inondations'],
      "remarque_sup_sgdph"=>$row['remarque_sup_sgdph'],
      "date_avis_sgdph"=>$row['date_avis_sgdph'],
      "valide_par_sgdph"=>$row['valide_par_sgdph'],
      "approuve_par_sgdph"=>$row['approuve_par_sgdph'],


   );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);