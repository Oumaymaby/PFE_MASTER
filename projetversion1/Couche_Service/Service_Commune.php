<?php
/**
* OUMAIMA SABI
* DATE:18/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Commune_Classe.php';

class Commune_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($com)
 	{
 	 	$st =	$this->db->prepare('insert into gen.ls_commune(id,geom,commune,codecommune,commune_ar,codeprovince,zonel) values (?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($com->getid(),$com->getgeom(),$com->getcommune(),$com->getcodecommune(),$com->getcommune_ar(),$com->getcodeprovince(),$com->getzone()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select * from gen.ls_commune');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * from gen.ls_commune where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new TypeCEau($row->id,$row->geom,$row->commune,$row->codecommune,$row->commune_ar,$row->codeprovince,$row->zonel);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($com)
 	{
 	 	$st =$this->db->prepare('update gen.ls_commune set id=? , geom=?,commune=?,codecommune=?,commune_ar=?,codeprovince=?,zonel=? where id=?');
	 	if ($st->execute(array($com->getid(),$com()->getgeom(),$com()->getprovince_ar(),$com()->getprovince_a(),$com()->getcodeprovince(),$com()->getcoderegion(),$com()->getprovince())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($com)
 	{

	 	$st =	$this->db->prepare('delete from gen.ls_commune where id=?');
	 	if ($st->execute(array($com->getid()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('select count(*) from gen.ls_commune');
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