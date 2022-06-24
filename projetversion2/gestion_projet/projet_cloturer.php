<?php /**
    * OUMAIMA SABI
    * DATE:20/05/2022
    */
require_once 'fonctionnalities/Session.php';


$b= new ABHT_Service();
$id_prj=$_GET['id'];
$b->update_etatdossier($id_prj);
header("Location:Project.information.php?id=".$id_prj);
?>