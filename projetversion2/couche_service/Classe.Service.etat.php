<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.etatdossier.php';
class Etat_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_etat_dossier (id,etatdossier) values (?,?)');
 	 	if ($st->execute(array($cat->getid_etat(),$cat->getetat_dossier()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_etat_dossier');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_etat_dossier where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new Etat($row->id,$row->etatdossier);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_etat_dossier set id=? , etatdossier=? where id=?');
	 	if ($st->execute(array($cat->getid_etat(),$cat->getetat_dossier())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_etat_dossier where id=?');
	 	if ($st->execute(array($cat->getid_etat()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_etat_dossier');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	

    //selection nombre dossier au cours de traitement
	function nbtrait(){
		$st =	$this->db->prepare("select count(etat.etatdossier) from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='traitement en cours'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection le nombre des dossier en etat[Nouveau dossier]
	function nbnew(){
		$st =	$this->db->prepare("select count(*)
		from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier etat 
		where inv.etatdossier = etat.id and etat.etatdossier='Nouveau dossier'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
    
	// selection nombre des dossier en etat[Dossier Cloturé]
	function nbclose(){
		$st =	$this->db->prepare("select count(etat.etatdossier) from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Dossier cloturer'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projet en cours de traitement 
	function projencours(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,etat.etatdossier from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Traitement en cours'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}


	}

	
	//selection des projet nouveau dossier
	function projnew(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,etat.etatdossier from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Nouveau dossier'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets cloturee 
	function projcloture(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,etat.etatdossier from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Dossier cloturer'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
 	
	//selection pour la charte les nombres de projets selon leur etat
	function chartsetat(){
		$st =	$this->db->prepare('select count(*),v.etatdossier from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier v where v.id=inv.etatdossier group by v.etatdossier');
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}


}

// $b = new Etat_Service();
// $a= new Etat(4,"dossier non cloturé");
// $bb=$b->add($a);

// $b = new Etat_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Etat_Service();
// $bb = $b->findById(2);
// // var_dump($bb);
// echo print_r($bb);



