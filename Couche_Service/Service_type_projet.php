<?php
/**
* OUMAIMA SABI
* DATE:19/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Type_projet_Classe.php';

class Type_projet_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($typep)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_type (id,type_projet) values (?,?)');
 	 	if ($st->execute(array($typep->getid_typep(),$typep->gettype_projet()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select * from prj_inv.ls_prj_type');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.ls_prj_type where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new Type_projet($row->id,$row->type_projet);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($typep)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_type set id=? , type_projet=? where id=?');
	 	if ($st->execute(array($typep->getid_typep(),$typep->gettype_projet())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($typep)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_type where id=?');
	 	if ($st->execute(array($typep->getid_ty()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('select count(*) from prj_inv.ls_prj_type');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet avec un type de projet grand/petit projet
	function findattribute(){
		$st =	$this->db->prepare('
		select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,tp.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type tp where inv.type_projet = tp.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

 	//selection des projet grand 
	function findgrandprojet(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,tp.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type tp where inv.type_projet = tp.id and tp.type_projet='Grand projet'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection des projet petit
	function findpetitprojet(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,tp.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type tp where inv.type_projet = tp.id and tp.type_projet='Petit projet'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet grand
	function nbprjgd(){
		$st =	$this->db->prepare("select count(*) from prj_inv.projets_investissement inv , prj_inv.ls_prj_type tp where inv.type_projet = tp.id and tp.type_projet='Grand projet'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet petit
	function nbprjpt(){
		$st =	$this->db->prepare("select count(*) from prj_inv.projets_investissement inv , prj_inv.ls_prj_type tp where inv.type_projet = tp.id and tp.type_projet='Petit projet'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}



}

// $b = new Type_projet_Service();
// $bb= $b->findattribute();
// echo $bb[0];


// $b = new Type_projet_Service();
// $a= new Type_projet(3,"projet1");
// $bb=$b->add($a);

// $b = new Type_projet_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Type_projet_Service();
// $bb = $b->findById(1);
// echo print_r($bb);
