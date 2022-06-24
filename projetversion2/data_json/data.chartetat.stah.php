<?php 
/**
* OUMAIMA SABI
* DATE:28/02/2022
*/

require_once '../couche_service/Classe.Service.etat.php';

$b = new Etat_Service();
$bb = $b->chartsetatstah();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
      'nombre'=>$row["count"],
      'etat'=>$row['etatdossier'],
      'color'=>'#'.rand(100000,999999).''
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);