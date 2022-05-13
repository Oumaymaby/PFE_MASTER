<?php
/**
* OUMAIMA SABI
* DATE:19/02/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.type_dossier.php';

class Type_Dossier_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($typed)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_type_dossier (id,type_dossier) values (?,?)');
 	 	if ($st->execute(array($typed->getid_ty(),$typed->gettype_d()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_type_dossier');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_prj_type_dossier where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new Typedossier($row->id,$row->type_dossier);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($typed)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_type_dossier set id=? , type_dossier=? where id=?');
	 	if ($st->execute(array($typed->getid_ty(),$typed->gettype_d())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($typed)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_type_dossier where id=?');
	 	if ($st->execute(array($typed->getid_ty()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_type_dossier');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet avec leur type de dossier
	function findattribute(){
		$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,d.type_dossier FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_type_dossier d where inv.type_dossier=d.id ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

 	//selection des projet avec type de dossier [projet d'investissement]
	function findprojet_inv(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,d.type_dossier FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_type_dossier d where inv.type_dossier=d.id and d.type_dossier='Projet d''investissement'" );
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection des projet avec dossier [Equipement publique]
	function findequipub(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,d.type_dossier FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_type_dossier d where inv.type_dossier=d.id and d.type_dossier='Equipement publique'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec type dossier [projet d'investissement]
	function nbprojet_inv(){
		$st =	$this->db->prepare("select count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_type_dossier d where inv.type_dossier=d.id and d.type_dossier='Projet d''investissement'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec dossier [Equipement publique]
	function nbequipub(){
		$st =	$this->db->prepare("select count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_type_dossier d where inv.type_dossier=d.id and d.type_dossier='Equipement publique'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

 	

}

// $b = new Type_Dossier_Service();
// $a= new Typedossier(3,"typedossier1");
// $bb=$b->add($a);

// $b = new Type_Dossier_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Type_Dossier_Service();
// $bb = $b->findById(1);
// echo print_r($bb);
