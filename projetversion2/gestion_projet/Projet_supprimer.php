<?php
/**
* OUMAIMA SABI
* DATE:25/03/2022
*/
require_once '../couche_service/Classe.Service.projet.php';

$id = htmlspecialchars($_GET["id"]);
$ss = new Projet_Service();
$ss->supprimer($ss->findById($id));
header("Location:Projet_tableau_bord.php?message=supprimer");