<?php 
/**
* OUMAIMA SABI
* DATE:04/04/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->number_lastweek();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
        "nombre"=>$row['noon'],
        "date"=>$row['date_arrivee_bet'],
        "jour"=>$row['daye'],
        "etatdossier"=>"en cours",
        'color'=>'#7cbfa0',
    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);