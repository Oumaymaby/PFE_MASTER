<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Mode_Assainissement_Classe.php';

class ModeAssain_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($mode)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_mode_assainissement (id,mode_assainissement) values (?,?)');
 	 	if ($st->execute(array($mode->getid_assn(),$mode->getmode_assn()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_mode_assainissement');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.ls_prj_mode_assainissement where id=?');
		// var_dump(print_r($st));
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new mode_Assainissement($row->id,$row->mode_assainissement);

			

		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($mode)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_mode_assainissement set id=? ,mode_assainissement=? where id=?');
	 	if ($st->execute(array($mode->getid_assn(),$mode->getmode_assn())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($mode)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_mode_assainissement where id=?');
	 	if ($st->execute(array($mode->getid_assn()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_mode_assainissement');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// //selection nombre de projet avec [dossier physique]
	// function nbdossphy(){
	// 	$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='dossier physique'");
	//  	if ($st->execute()) {
	//  	 		return $st->fetchAll();
	//  		}
	//  	 	else{
	//  	 		return null;
	//  	 	}
	// }

	// //selection nombre de projet avec [Rokhas]
	// function nbpRokhas(){
	// 	$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='Rokhas'");
	//  	if ($st->execute()) {
	//  	 		return $st->fetchAll();
	//  		}
	//  	 	else{
	//  	 		return null;
	//  	 	}
	// }
	// //selection nombre de projet avec [CRUI]
	// function nbcrui(){
	// 	$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='CRUI'");
	//  	if ($st->execute()) {
	//  	 		return $st->fetchAll();
	//  		}
	//  	 	else{
	//  	 		return null;
	//  	 	}
	// }

 	

}


// $b = new ModeAssain_Service();
// $bb = $b->findById(1);
// echo print_r($bb);

// $b = new ModeAssain_Service();
// $a= new mode_Assainissement(4,"assai4");
// $bb=$b->add($a);


// $b = new ModeAssain_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }


