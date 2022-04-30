<?php
/**
* OUMAIMA SABI
* DATE:19/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/NatureCEau_Classe.php';

class NatureCeau_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($nate)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_nature_ceau (id,avis) values (?,?)');
 	 	if ($st->execute(array($nate->getid_nature(),$nate->getnature()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_nature_ceau');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_prj_nature_ceau where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new NatureCeau($row->id,$row->avis);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($nate)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_nature_ceau id=? , avis=? where id=?');
	 	if ($st->execute(array($nate->getid_nature(),$nate->getnature())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($nate)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_nature_ceau where id=?');
	 	if ($st->execute(array($nate->getid_nature()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_nature_ceau');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
    
	//selection avec attributs tout les projet avec une nature de cour eau
	function findAttribute()
 	{

	 	$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,n.avis FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}
	 
	//selection des projets avec nature de courbure [DPH]
	function findDPH(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,n.avis FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='DPH'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection des projets avec nature de courbure [Non DPH]
	function findnonDPH(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,n.avis FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='Non DPH'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
	
	//selection des projets avec nature de courbure [ORMVA]
	function findORMVA(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,n.avis from prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='ORMVA'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec nature de courbure [Non ORMVA]
	function findnonORMVA(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,n.avis FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='Non ORMVA'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function nbdbh(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='DPH'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function nbdnonbh(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='Non DPH'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function nbormva(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='ORMVA'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function nbnonormva(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_nature_ceau n where inv.nature_cours_eau=n.id and n.avis='Non ORMVA'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
 	

}

// $b = new NatureCeau_Service();
// $a= new NatureCeau(5,"natureeau");
// $bb=$b->add($a);

// $b = new NatureCeau_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new NatureCeau_Service();
// $bb = $b->findById(1);
// echo print_r($bb);


