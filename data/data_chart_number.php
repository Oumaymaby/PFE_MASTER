<?php 
/**
* OUMAIMA SABI
* DATE:09/03/2022
*/

require_once '../Couche_Service/Service_Projet.php';

$b = new Projet_Service();
$bb1 = $b->dureechartprj10();
$bb2=$b->dureechartprj10_30();
$bb3=$b->dureechartprj30();

$data1 = array();
$data2 = array();
$data3 = array();

foreach ($bb1 as $row) {
    $data1[] = array(
    "nombre"=>$row["number1"],
    "description"=>'moins de 10 jours',
    'color'=>'#'.rand(100000,999999).''
    );
}

foreach ($bb2 as $row) {
    $data2[] = array(
        "nombre"=>$row["number2"],
        "description"=>'entre 10 jours et 30 jours',
        'color'=>'#'.rand(100000,999999).''

    );
}

foreach ($bb3 as $row) {
    $data3[] = array(
        "nombre"=>$row["number3"],
        "description"=>'plus de 30 jours',
        'color'=>'#'.rand(100000,999999).''

    );
}


// Response
// $response1 = array(
//    "data" => $data1
// );

// $response2 = array(
//     "data" => $data2
// );

// $response3 = array(
//     "data" => $data3
// );

$response=array_merge($data1, $data2,$data3);
$r=array(
       "data" => $response
    );

echo json_encode($r);