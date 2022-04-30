<?php
/**
* OUMAIMA SABI
* DATE:19/02/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.typeceau.php';

class TypeCEau_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($typep)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_type_cours_eau (id,type_cours_eau) values (?,?)');
 	 	if ($st->execute(array($typep->getid_type(),$typep->gettypeceau()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select * from prj_inv.ls_prj_type_cours_eau');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.ls_prj_type_cours_eau where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new TypeCEau($row->id,$row->type_cours_eau);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($typep)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_type_cours_eau set id=? , type_cours_eau=? where id=?');
	 	if ($st->execute(array($typep->getid_type(),$typep->gettypeceau())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($typep)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_type_cours_eau where id=?');
	 	if ($st->execute(array($typep->getid_type()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('select count(*) from prj_inv.ls_prj_type_cours_eau');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet avec un type eau cours
	function findattribute(){
		$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.type_cours_eau from prj_inv.ls_prj_type_cours_eau o , prj_inv.projets_investissement inv where inv.type_cours_eau=o.id ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

 	//selection des projet avec type eau cours [Oued/Chaabat]
	function findoued(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.type_cours_eau from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Oued/Chaabat'" );
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection des projet avec type [Khettara]
	function findkhettara(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.type_cours_eau from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Khettara'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avce type [Saguia/Mesref]
	function findsaguia(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.type_cours_eau from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Saguia/Mesref'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec type cours [Oued/Chaabat]
	function nboued(){
		$st =	$this->db->prepare("select count(*) from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Oued/Chaabat'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec type cours [Khettara]
	function nbkhett(){
		$st =	$this->db->prepare("select count(*) from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Khettara'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet avec type cours [Saguia/Mesref]
	function nbsaguia(){
		$st =	$this->db->prepare("select count(*) from prj_inv.ls_prj_type_cours_eau o,prj_inv.projets_investissement inv where inv.type_cours_eau=o.id and o.type_cours_eau='Saguia/Mesref'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

 	

}

// $b = new TypeCEau_Service();
// $a= new TypeCEau(4,"type1ceau");
// $bb=$b->add($a);

// $b = new TypeCEau_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new TypeCEau_Service();
// $bb = $b->findById(1);
// echo print_r($bb);