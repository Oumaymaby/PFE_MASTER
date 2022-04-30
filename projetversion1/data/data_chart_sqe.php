<?php 
/**
* OUMAIMA SABI
* DATE:25/02/2022
*/

require_once '../Couche_Service/Service_avis.php';

$b = new Avis_Service();
$bb = $b->chartabht();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
      'nombre'=>$row["count"],
      'avis'=>$row['avis'],
      'color'=>'#'.rand(100000,999999).''
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);


