<?php
/**
* OUMAIMA SABI
* DATE:25/03/2022
*/
require_once '../Couche_Service/Service_Projet.php';

$id = htmlspecialchars($_GET["id"]);
$ss = new Projet_Service();
$ss->supprimer($ss->findById($id));
header("Location:accueil.php?message=supprimer");

