<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Avis_Classe.php';

class Avis_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($avis)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_avis (id,avis) values (?,?)');
 	 	if ($st->execute(array($avis->getid_avis(),$avis->getavis()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_avis');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_prj_avis where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new avis($row->id,$row->avis);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_avis set id=? , avis=? where id=?');
	 	if ($st->execute(array($avis->getid_avis(),$avis->getavis())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($avis)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_avis where id=?');
	 	if ($st->execute(array($avis->getid_avis()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_avis');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//select les projets par avis ABHT
	function findABHT(){

	 	$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.remarques_generales_bet,inv.avis_abht ,inv.date_avis_abht,inv.etabli_par,inv.approuve_par,v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_abht');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
	//select les projets par avis SEPRE
	function findSEPRE(){
		$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.remarque_bet_besoin_eau,inv.remarques_sup_sepre,inv.avis_sepre,inv.date_avis_sepre,v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_sepre');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//select les projets par avis SQE
	function findSQE(){
		$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.remarque_bet_assainissement,inv.remarque_sup_sqe,inv.avis_sqe,inv.date_avis_sqe,inv.approuve_par_sqe,inv.valide_par_sqe,v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_sqe');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//select les projets par avis STAH
	function findSTAH(){
		$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.remarque_sup_stah,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah,v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_stah');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//select les projets par avis SGDPH
	function findSGDPH(){
		$st = $this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.remarque_bet_protection_inondations,inv.remarque_sup_sgdph,inv.date_avis_sgdph,inv.valide_par_sgdph,inv.approuve_par_sgdph,v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_sgdph');
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection pour la charte les nombre de projets selon les avis de l'ABHT
	function chartabht(){
		$st =	$this->db->prepare('select count(*),v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_abht group by v.avis');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection pour la charte les nombre de projets selon les avis de sepre
	function chartsepre(){
		$st =	$this->db->prepare('select count(*),v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_sepre group by v.avis');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection pour la charte les nombre de projets selon les avis de sqe
	function chartsqe(){
		$st =	$this->db->prepare('select count(*),v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_sqe group by v.avis');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection pour la charte les nombre de projets selon les avis de stah
	function chartstah(){
		$st =	$this->db->prepare('select count(*),v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_stah group by v.avis');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}

	}

	//selection pour la charte les nombres de projets selon les avis de SGDPH
	function chartsgdph(){
		$st =	$this->db->prepare('select count(*),v.avis from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis v where v.id=inv.avis_stah group by v.avis');
		if ($st->execute()) {
			return $st->fetchAll();
	    }
		else{
			return null;
		}
	}
}

// $b = new Avis_Service();
// $a= new Avis(9,"non refusé");
// $bb=$b->add($a);

// $b = new Avis_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Avis_Service();
// $bb = $b->chartabht();
// echo json_encode($bb);


