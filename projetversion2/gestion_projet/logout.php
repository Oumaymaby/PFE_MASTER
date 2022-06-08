<?php 
require_once '../couche_service/Classe.Service.user.php';
session_start();
$con= new User_Service();
$c=$con->logout();
?>