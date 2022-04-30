<?php 
/**
* OUMAIMA SABI
* DATE:05/04/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb = $b->number_prj_ann_mois_nouveau();
// $bb1 = $b->nombre();

$data = array();
// $data1 = array();

foreach ($bb as $row) {
    $data[] = array(
        "nombre"=>$row['count'],
        "mois"=>$row['mois'],
        "annee"=>$row['annee'],
        'color'=>'#7cbfa0',
        'date'=>$row['mois'].'-'.$row['annee'],
    );
}

// foreach ($bb1 as $row) {
//     $data1[] = array(
//         "nombretotal"=>$row['count'],
//     );
// }

// $result = array_merge($data1, $data);

// Response
$response = array(
   "data" => $data,
);

echo json_encode($response);