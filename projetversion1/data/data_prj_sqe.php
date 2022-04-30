<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';

$b = new Avis_Service();
$bb = $b->findSQE();

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
      "remarque_bet_assainissement"=>$row['remarque_bet_assainissement'],
      "remarque_sup_sqe"=>$row['remarque_sup_sqe'],
      "date_avis_sqe"=>$row['date_avis_sqe'],
      "approuve_par_sqe"=>$row["approuve_par_sqe"],
      "valide_par_sqe"=>$row["valide_par_sqe"],

      
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);