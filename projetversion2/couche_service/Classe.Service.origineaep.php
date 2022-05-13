<?php
/**
* OUMAIMA SABI
* DATE:19/02/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.origine_aep.php';

class OrigineAep_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($org)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.ls_prj_origine_aep (id,origine_aep) values (?,?)');
 	 	if ($st->execute(array($org->getid_aep(),$org->getorigineaep()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM prj_inv.ls_prj_origine_aep');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT * FROM prj_inv.ls_prj_origine_aep where id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new OrigineAep($row->id,$row->origine_aep);
		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($org)
 	{
 	 	$st =$this->db->prepare('update prj_inv.ls_prj_origine_aep id=? , origine_aep=? where id=?');
	 	if ($st->execute(array($org->getid_aep(),$org->getorigineaep())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($org)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.ls_prj_origine_aep where id=?');
	 	if ($st->execute(array($org->getid_aep()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.ls_prj_origine_aep');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec origine aep
	function findAttribute()
 	{

	 	$st =	$this->db->prepare('select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}

	//selection des projets avec origineaep [RADEEMA]
	function findRadeema(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='RADEEMA'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
	
	//selection des projets avec origine Aep [Eau souterraine]
	function findeau(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Eau souterraine'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec origine Aep [ONEE]
	function findonee(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='ONEE'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
    
	//selection des projets avec origine Aep [Commune]
	function findcom(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Commune'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec origine aep [Association]
	function findassoc(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Association'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec origine aep [Autre]
	function findautre(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,o.origine_aep FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Autre'");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

    //selection nombre des projets avec origineaep [RADEEMA]
	function nbdradeema(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='RADEEMA'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre des projets avec origineaep [Eau souterraine]
	function nbeausout(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Eau souterraine'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre des projets avec origineaep [ONEE]
	function nbonee(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='ONEE'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre des projets avec origineaep [Commune]
	function nbcommune(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Commune'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre des projets avec origineap [Association]
	function nbassoci(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Association'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre des projets avec origineap [Autre]
	function nbautre(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.projets_investissement inv,prj_inv.ls_prj_origine_aep o where inv.origine_aep=o.id and o.origine_aep='Autre'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets sur l'espace 
    function geoprojet(){
		$st =	$this->db->prepare("select gid,numero_dossier,date_arrivee_abht,date_arrivee_bet,commune,province,maitre_ouvrage,architecte,intitule_projet,superficie,ST_AsGeoJSON(geom) as geojson from prj_inv.projets_investissement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

 	

}

// $b = new OrigineAep_Service();
// $a= new OrigineAep(7,"OrigineAep1");
// $bb=$b->add($a);

// $b = new OrigineAep_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new OrigineAep_Service();
// $bb = $b->findById(1);
// echo print_r($bb);


