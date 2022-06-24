<?php /**
    * OUMAIMA SABI
    * DATE:20/05/2022
    */
require_once 'fonctionnalities/Session.php';


$b= new ABHT_Service();
$id_abht=$_GET['id'];
$user=$_SESSION['user_id'];

echo 'lkqhfhsdf';
$b->update_approuvee_abht($user,$id_abht);
$bb=$b->findById($id_abht);
$a=$bb->getid_prj();

if(isset($a)){
    header("Location:Projet_details1.php?id=".$a);
}

?>