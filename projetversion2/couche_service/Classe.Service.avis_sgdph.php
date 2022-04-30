<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.avis_sgdph.php';

class SGDPH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.avis_sgdph(remarque_sup_sgdph, remarque_bet_protection_inondations, avis_sgdph, date_avis_sgdph, valide_par_sgdph, approuve_par_sgdph, type_cours_eau, nom_cours_eau, crue_100, servitude, nature_cours_eau, origine_aep_puits_x, origine_aep_puits_y, autorisation_pf_creusement, autorisation_pf_prelevement, autorisation_deversement, autorisation_occupation_dph, autorisation_creusement_date,autorisation_prelevement_date,autorisation_deversement_date, autorisation_occupation_dph_date, autorisation_creusement_numero, autorisation_prelevement_numero,autorisation_deversement_numero, autorisation_occupation_dph_numero, autre_autorisation, date_avis_bet_sgdph, id_prj) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getremarque_sup_sgdph(),$cat->getremarque_bet_sgdph(),$cat->getavis_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->gettype_cours_eau(),$cat->getnom_cours_eau(),$cat->getcrue_100(),$cat->getservitude(),$cat->getnature_cours(),$cat->getorigine_x(),$cat->getorigine_y(),$cat->getaut_creus(),$cat->getaut_prelev(),$cat->getaut_dever(),$cat->getaut_occu_dph(),$cat->getdate_creus(),$cat->getdate_prelev(),$cat->getdate_dever(),$cat->getdate_occup_dph(),$cat->getnum_creus(),$cat->getnum_prelev(),$cat->getnum_devers(),$cat->getnum_occup(),$cat->getautre_aut(),$cat->getdate_avis_bet_sgdph(),$cat->getid_prj()))) 
		{
			return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select gid,avis_sgdph,remarque_sup_sgdph,remarque_bet_protection_inondations,date_avis_sgdph,valide_par_sgdph,approuve_par_sgdph,type_cours_eau,nom_cours_eau,crue_100,nature_cours_eau,servitude,origine_aep_puits_x,origine_aep_puits_y,autorisation_pf_creusement,autorisation_pf_prelevement,autorisation_deversement,autorisation_occupation_dph,autre_autorisation,autorisation_creusement_date,autorisation_creusement_numero,autorisation_prelevement_date,autorisation_prelevement_numero,autorisation_deversement_date,autorisation_deversement_numero,autorisation_occupation_dph_date,autorisation_occupation_dph_numero from prj_inv.projets_investissement ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select gid,remarque_sup_sgdph,remarque_bet_protection_inondations,avis_sgdph,date_avis_sgdph,valide_par_sgdph,approuve_par_sgdph,type_cours_eau,nom_cours_eau,crue_100,nature_cours_eau,servitude,origine_aep_puits_x,origine_aep_puits_y,autorisation_pf_creusement,autorisation_pf_prelevement,autorisation_deversement,autorisation_occupation_dph,autorisation_creusement_date,autorisation_prelevement_date,autorisation_deversement_date,autorisation_occupation_dph_date,autorisation_creusement_numero,autorisation_prelevement_numero,autorisation_deversement_numero,autorisation_occupation_dph_numero,autre_autorisation from prj_inv.projets_investissement where gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SGDPH($row->gid,$row->remarque_sup_sgdph,$row->remarque_bet_protection_inondations,$row->avis_sgdph,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->nature_cours_eau,$row->servitude,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autorisation_creusement_date,$row->autorisation_prelevement_date,$row->autorisation_deversement_date,$row->autorisation_occupation_dph_date,$row->autorisation_creusement_numero,$row->autorisation_prelevement_numero,$row->autorisation_deversement_numero,$row->autorisation_occupation_dph_numero,$row->autre_autorisation);
			}
			elseif(empty($row)){
				return new SGDPH('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set remarque_sup_sgdph=?,remarque_bet_protection_inondations=?,avis_sgdph=?,date_avis_sgdph=?,valide_par_sgdph=?,approuve_par_sgdph=?,type_cours_eau=?,nom_cours_eau=?,crue_100=?,nature_cours_eau=?,servitude=?,origine_aep_puits_x=?,origine_aep_puits_y=?,autorisation_pf_creusement=?,autorisation_pf_prelevement=?,autorisation_deversement=?,autorisation_occupation_dph=?,autorisation_creusement_date=?,autorisation_prelevement_date=?,autorisation_deversement_date=?,autorisation_occupation_dph_date=?,autorisation_creusement_numero=?,autorisation_prelevement_numero=?,autorisation_deversement_numero=?,autorisation_occupation_dph_numero=?,autre_autorisation=? where gid=?');
	 	if ($st->execute(array($cat->getremarque_sup_sgdph(),$cat->getremarque_bet_sgdph(),$cat->getavis_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->gettype_cours_eau(),$cat->getnom_cours_eau(),$cat->getcrue_100(),$cat->getnature_cours(),$cat->getservitude(),$cat->getorigine_x(),$cat->getorigine_y(),$cat->getaut_creus(),$cat->getaut_prelev(),$cat->getaut_dever(),$cat->getaut_occu_dph(),$cat->getdate_creus(),$cat->getdate_prelev(),$cat->getdate_dever(),$cat->getdate_occup_dph(),$cat->getnum_creus(),$cat->getnum_prelev(),$cat->getnum_devers(),$cat->getnum_occup(),$cat->getautre_aut(),$cat->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.projets_investissement where gid=?');
	 	if ($st->execute(array($cat->getid_pr(),$cat->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_sgdph IS NOT NULL and etatdossier=1');
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

    

}