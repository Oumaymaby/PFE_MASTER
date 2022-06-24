<?php /**
    * OUMAIMA SABI
    * DATE:20/05/2022
    */
require_once 'fonctionnalities/Session.php';


$b= new SGDPH_Service();
$id_sgdph=$_GET['id'];
$user=$_SESSION['user_id'];

echo 'lkqhfhsdf';
$b->update_approuvee_sgdph($user,$id_sgdph);
$bb=$b->findById($id_sgdph);
$a=$bb->getid_prj();

if(isset($a)){
    header("Location:Projet_details1.php?id=".$a);
}

?>