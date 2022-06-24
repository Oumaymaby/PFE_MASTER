<?php 
/**
* OUMAIMA SABI
* DATE:20/05/2022
*/
require_once 'fonctionnalities/Session.php';


$b= new SQE_SERVICE();
$id_sqe=$_GET['id'];
$user=$_SESSION['user_id'];

echo 'lkqhfhsdf';
$b->update_approuvee_sqe($user,$id_sqe);
$bb=$b->findById($id_sqe);
$a=$bb->getid_prj();

if(isset($a)){
    header("Location:Projet_details1.php?id=".$a);
}

?>