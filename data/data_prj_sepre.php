<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';

$b = new Avis_Service();
$bb = $b->findSEPRE();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
      "avis"=>$row["avis"],
      "id"=>$row['gid'],
	  "numero_dossier"=>$row['numero_dossier'],
	  "commune"=>$row['commune'],
	  "province"=>$row['province'],
	  "maitre_ouvrage"=>$row['maitre_ouvrage'],
	  "intitule_projet"=>$row['intitule_projet'],
      "remarque_bet_besoin_eau"=>$row['remarque_bet_besoin_eau'],
      "remarques_sup_sepre"=>$row['remarques_sup_sepre'],
      "date_avis_sepre"=>$row['date_avis_sepre']

      
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);