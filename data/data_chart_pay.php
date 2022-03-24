<?php 
/**
* OUMAIMA SABI
* DATE:28/02/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->chartpay();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
      'nombre'=>$row["count"],
      'payement'=>$row['payement'],
      'color'=>'#'.rand(100000,999999).''
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);