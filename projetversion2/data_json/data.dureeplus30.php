<?php 
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/

require_once '../couche_service/Classe.Service.projet.php';

$b = new Projet_Service();
$bb = $b->dureedayetatprjplus30();

$data = array();

foreach ($bb as $row) {
    $data[] = array(
    "action"=>'Etat critique',
    "id"=>$row['gid'],
	"numero_dossier"=>$row['numero_dossier'],
	"commune"=>$row['commune'],
	"province"=>$row['province'],
	"maitre_ouvrage"=>$row['maitre_ouvrage'],
	"intitule_projet"=>$row['intitule_projet'],
    "duree"=>$row['duree'],
    "etat_dossier"=>$row['etatdossier']

    );
}

// Response
$response = array(
   "data" => $data
);

echo json_encode($response);