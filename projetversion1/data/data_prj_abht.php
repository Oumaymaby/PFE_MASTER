<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';

$b = new Avis_Service();
$bb = $b->findABHT();

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
      "remarques_generales_bet"=>$row['remarques_generales_bet'],
      "date_avis_abht"=>$row['date_avis_abht'],
      "etabli_par"=>$row['etabli_par'],
      "approuve_par"=>$row["approuve_par"],
      
      
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);