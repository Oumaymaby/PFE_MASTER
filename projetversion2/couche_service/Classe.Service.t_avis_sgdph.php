<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.t_avis_sgdph.php';

class SGDPH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.t_avis_sgdph( remarque_sup_sgdph,remarque_bet_protection_inondations, avis_sgdph, date_avis_sgdph, valide_par_sgdph, approuve_par_sgdph, date_avis_bet_sgdph,  id_sgdph_info, id_prj, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getremarque_sup_sgdph(),$cat->getremarque_bet_sgdph(),$cat->getavis_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->getdate_avis_bet_sgdph(),$cat->getid_sgdph_info(),$cat->getid_prj(),$cat->getid_user()))) 
		{
			return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_sgdph, remarque_bet_protection_inondations, remarque_sup_sgdph, avis_sgdph, date_avis_sgdph, date_avis_bet_sgdph, valide_par_sgdph, approuve_par_sgdph, id_sgdph_info, id_prj FROM prj_inv.t_avis_sgdph');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select id_sgdph, remarque_bet_protection_inondations, remarque_sup_sgdph, avis_sgdph, date_avis_sgdph, date_avis_bet_sgdph, valide_par_sgdph, approuve_par_sgdph, id_sgdph_info, id_prj ,id_user FROM prj_inv.t_avis_sgdph where id_sgdph=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SGDPH_AVIS($row->remarque_sup_sgdph,$row->remarque_bet_protection_inondations,$row->avis_sgdph,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->date_avis_bet_sgdph,$row->id_sgdph_info,$row->id_prj,$row->id_user);
			}
			elseif(empty($row)){
				return new SGDPH_AVIS('0','0','0','0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_sgdph SET id_sgdph=?, remarque_bet_protection_inondations=?, remarque_sup_sgdph=?, avis_sgdph=?, date_avis_sgdph=?, date_avis_bet_sgdph=?, valide_par_sgdph=?, approuve_par_sgdph=?, id_sgdph_info=?, id_prj=? WHERE id_sgdph_info=?');
	 	if ($st->execute(array($cat->getremarque_sup_sgdph(),$cat->getremarque_bet_sgdph(),$cat->getavis_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->getdate_avis_bet_sgdph(),$cat->id_sgdph_info(),$cat->getid_prj())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($a)
 	{
	 	$st =	$this->db->prepare('delete from prj_inv.t_avis_sgdph where id_sgdph=:id_sgdph');
	 	if ($st->execute(array(':id_sgdph'=>$a))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.t_avis_sgdph ');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.avis_sgdph where id_prj=?');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;
			// $row = $st->fetch(PDO::FETCH_OBJ);
			// if(!empty($row)){
			// 	return new SGDPH($row->id_sgdph, $row->type_cours_eau, $row->nom_cours_eau, $row->crue_100, $row->servitude, $row->nature_cours_eau, $row->origine_aep_puits_x, $row->origine_aep_puits_y, $row->autorisation_pf_creusement, $row->autorisation_pf_prelevement, $row->autorisation_deversement, $row->autorisation_occupation_dph, $row->autorisation_creusement_date, $row->autorisation_creusement_numero, $row->autorisation_prelevement_date, $row->autorisation_prelevement_numero, $row->autorisation_deversement_date, $row->autorisation_deversement_numero, $row->autorisation_occupation_dph_date, $row->autorisation_occupation_dph_numero, $row->autre_autorisation, $row->remarque_bet_protection_inondations, $row->remarque_sup_sgdph, $row->avis_sgdph, $row->date_avis_sgdph, $row->date_avis_bet_sgdph, $row->valide_par_sgdph, $row->approuve_par_sgdph, $row->id_prj);
			// }
			// elseif(empty($row)){
			// 	return new SGDPH('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
			// }		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

	function nombre_prj($id){
		$st =	$this->db->prepare('select count(*) from prj_inv.avis_sgdph where id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	//selection des projet affecter à SGDPH
	function find_prj_sgdph()
 	{
	 	$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.sgdph=true ");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 


	  
	function update_avis_sgdph($a,$b,$c,$e,$f,$g)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_sgdph SET remarque_sup_sgdph=:remarque_sup_sgdph, avis_sgdph=:avis_sgdph, date_avis_sgdph=:date_avis_sgdph, valide_par_sgdph=:valide_par_sgdph, approuve_par_sgdph=:approuve_par_sgdph
		WHERE id_sgdph=:id_sgdph');
		if ($st->execute(array(':remarque_sup_sgdph' => $a,':avis_sgdph' => $b,':date_avis_sgdph' => $c,':valide_par_sgdph' => $e,':approuve_par_sgdph'=>$f,':id_sgdph'=>$g)))
		{
			return true;
		}
		else{
			return false;
		} 
	}


	function update_approuvee_sgdph($a,$b)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_sgdph SET approuve_par_sgdph=:approuve_par_sgdph WHERE id_sgdph=:id_sgdph');
		if ($st->execute(array(':approuve_par_sgdph' => $a,':id_sgdph' => $b)))
		{
			return true;
		}
		else{
			return false;
		} 
	}

	function sgdph_maxdate($id){
		$st =$this->db->prepare('SELECT DISTINCT ON (id_prj)
		id_sgdph, remarque_bet_protection_inondations, remarque_sup_sgdph, avis_sgdph, date_avis_sgdph,
		date_avis_bet_sgdph, valide_par_sgdph, approuve_par_sgdph, id_sgdph_info, id_prj, id_user
		FROM prj_inv.t_avis_sgdph
		where date_avis_sgdph is not null and id_prj=?
		ORDER  BY id_prj,date_avis_sgdph DESC');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}

	function sgdph_maxdate_date(){
		$st =$this->db->prepare('SELECT DISTINCT ON (id_prj)
		sgdph.id_sgdph, sgdph.remarque_bet_protection_inondations, sgdph.remarque_sup_sgdph, sgdph.avis_sgdph, 
		sgdph.date_avis_sgdph,sgdph.date_avis_bet_sgdph, sgdph.valide_par_sgdph, sgdph.approuve_par_sgdph,
		sgdph.id_sgdph_info,sgdph.id_prj, sgdph.id_user,inv.*
		FROM prj_inv.t_avis_sgdph sgdph,prj_inv.prj_invest inv
		where sgdph.id_prj=inv.gid
		ORDER  BY sgdph.id_prj,sgdph.date_avis_bet_sgdph DESC');
		if ($st->execute()) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}
  

    

}