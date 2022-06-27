<?php
/**
* OUMAIMA SABI
* DATE:25/06/2022
*/
require_once '../couche_service/Classe.Service.t_avis_abht.php';

$id = htmlspecialchars($_GET["id"]);
$idprj = htmlspecialchars($_GET["idprj"]);
$ss = new ABHT_Service();
$ss->supprimer($id);
header("Location:Projet_details1.php?id=$idprj");