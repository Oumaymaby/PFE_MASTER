<?php
/**
* OUMAIMA SABI
* DATE:18/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Province_Classe.php';

class Province_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($com)
 	{
 	 	$st =	$this->db->prepare('insert into gen.ls_province(id,geom,province_a,province,province_ar,coderegion,codeprovince) values (?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($com->getid(),$com()->getgeom(),$com()->getprovince_ar(),$com()->getprovince_a(),$com()->getcodeprovince(),$com()->getcoderegion(),$com()->getprovince()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select * from gen.ls_Province');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * from gen.ls_Province where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new Province($row->id,$row->geom,$row->province_a,$row->province,$row->province_ar,$row->coderegion,$row->codeprovince);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($com)
 	{
 	 	$st =$this->db->prepare('update gen.ls_Province set id=?,geom=?,province_a=?,province=?,province_ar=?,coderegion=?,codeprovince=? where id=?');
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

	 	$st =	$this->db->prepare('delete from gen.ls_Province where id=?');
	 	if ($st->execute(array($com->getid()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('select count(*) from gen.ls_Province');
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