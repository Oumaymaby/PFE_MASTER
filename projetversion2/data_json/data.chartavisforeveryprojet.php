<?php 
/**
* OUMAIMA SABI
* DATE:08/04/2022
*/

require_once '../couche_service/Classe.Service.projet.php';

$b = new Projet_Service();
$id=$_GET['id'];
$bb1 = $b->nombre_sepre($id);
$bb2=$b->nombre_stah($id);
$bb3=$b->nombre_sgdph($id);
$bb4=$b->nombre_sqe($id);

$data1 = array();
$data2 = array();
$data3 = array();
$data4 = array();

foreach ($bb1 as $row) {
    $data1 = array(
        "nombre_sepre"=>$row['count'],
        "id"=>$row['gid'],
        "sepre"=>$row['sepre'],
        "stah"=>$row['stah'],
        "sgdph"=>$row['sgdph'],
        "sqe"=>$row['sqe'],
    );
}

foreach ($bb2 as $row) {
    $data2 = array(
        "nombre_stah"=>$row['count'],
    );
}

foreach ($bb3 as $row) {
    $data3 = array(
        "nombre_sgdph"=>$row['count'],
    );
}

foreach ($bb4 as $row) {
    $data4 = array(
        "nombre_sqe"=>$row['count'],
    );
}


$response=array_merge($data3,$data1, $data2,$data4);
$r=array(
       "data" => $response
    );

echo json_encode($r);