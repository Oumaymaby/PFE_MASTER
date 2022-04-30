<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Categorie_Classe.php';

class Categorie_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_categorie (id,categorie) values (?,?)');
 	 	if ($st->execute(array($cat->getid_cat(),$cat->getcategorie()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_categorie');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_prj_categorie where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new Categorie($row->id,$row->categorie);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_categorie set id=? , categorie=? where id=?');
	 	if ($st->execute(array($cat->getid_cat(),$cat->getcategorie())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_categorie where id=?');
	 	if ($st->execute(array($cat->getid_cat()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_categorie');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet selon categorie avec des attributs
	function findAttributes()
 	{

	 	$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,cat.categorie FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
 	
	//selection nombre de projet avec [dossier physique]
	function nbdossphy(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='Dossier physique'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec [Rokhas]
	function nbpRokhas(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='Rokhas'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
	//selection nombre de projet avec [CRUI]
	function nbcrui(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='CRUI'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet selon categorie [dossier physique] avec des attributs
	function finddossphy()
 	{

	 	$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,cat.categorie FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='Dossier physique'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

	//selection des projet selon categorie [Rokhas] avec des attributs
	function findrokhas()
 	{

	 	$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,cat.categorie FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='Rokhas'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

	//selection des projet selon categorie [CRUI] avec des attributs
	function findcrui()
 	{

	 	$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,cat.categorie FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_categorie cat where inv.categories=cat.id and cat.categorie='CRUI'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 


}

// $b = new Categorie_Service();
// $a= new Categorie(5,"cat1");
// $bb=$b->add($a);

// $b = new Categorie_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Categorie_Service();
// $bb = $b->findById(1);
// echo print_r($bb);


