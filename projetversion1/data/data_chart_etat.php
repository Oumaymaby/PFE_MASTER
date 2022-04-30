<?php 
/**
* OUMAIMA SABI
* DATE:28/02/2022
*/

require_once '../Couche_Service/Service_etat.php';

$b = new Etat_Service();
$bb = $b->chartsetat();

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