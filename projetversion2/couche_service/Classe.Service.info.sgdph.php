<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.sgdph.info.php';

class SGDPH_S_INFO{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.sgdph_info(type_cours_eau, nom_cours_eau, crue_100, nature_cours_eau, servitude,  origine_aep_puits_x, origine_aep_puits_y, autorisation_pf_creusement, autorisation_pf_prelevement, autorisation_deversement, autorisation_occupation_dph, autorisation_creusement_date, autorisation_creusement_numero, autorisation_prelevement_date, autorisation_prelevement_numero, autorisation_deversement_date, autorisation_deversement_numero, autorisation_occupation_dph_date, autorisation_occupation_dph_numero, autre_autorisation, date_info, id_user, id_prj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->gettype_cours_eau(),$cat->getnom_cours_eau(),$cat->getcrue_100(),$cat->getnature_cours(),$cat->getservitude(),$cat->getorigine_x(),$cat->getorigine_y(),$cat->getaut_creus(),$cat->getaut_prelev(),$cat->getaut_dever(),$cat->getaut_occu_dph(),$cat->getdate_creus(),$cat->getnum_creus(),$cat->getdate_prelev(),$cat->getnum_prelev(),$cat->getdate_dever(),$cat->getnum_devers(),$cat->getdate_occup_dph(),$cat->getnum_occup(),$cat->getautre_aut(),$cat->getdate_info(),$cat->getid_user(),$cat->getid_prj()))) 
		{
			return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_sgdph_info, type_cours_eau, nom_cours_eau, crue_100, servitude, nature_cours_eau, origine_aep_puits_x, origine_aep_puits_y, autorisation_pf_creusement, autorisation_pf_prelevement, autorisation_deversement, autorisation_occupation_dph, autorisation_creusement_date, autorisation_creusement_numero, autorisation_prelevement_date, autorisation_prelevement_numero, autorisation_deversement_date, autorisation_deversement_numero, autorisation_occupation_dph_date, autorisation_occupation_dph_numero, autre_autorisation, date_info, id_user FROM prj_inv.sgdph_info');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_sgdph_info, type_cours_eau, nom_cours_eau, crue_100, servitude, nature_cours_eau, origine_aep_puits_x, origine_aep_puits_y, autorisation_pf_creusement, autorisation_pf_prelevement, autorisation_deversement, autorisation_occupation_dph, autorisation_creusement_date, autorisation_creusement_numero, autorisation_prelevement_date, autorisation_prelevement_numero, autorisation_deversement_date, autorisation_deversement_numero, autorisation_occupation_dph_date, autorisation_occupation_dph_numero, autre_autorisation, date_info, id_user FROM prj_inv.sgdph_info where id_sgdph_info=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SGDPH_INFO($row->gid,$row->remarque_sup_sgdph,$row->remarque_bet_protection_inondations,$row->avis_sgdph,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->nature_cours_eau,$row->servitude,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autorisation_creusement_date,$row->autorisation_prelevement_date,$row->autorisation_deversement_date,$row->autorisation_occupation_dph_date,$row->autorisation_creusement_numero,$row->autorisation_prelevement_numero,$row->autorisation_deversement_numero,$row->autorisation_occupation_dph_numero,$row->autre_autorisation);
			}
			elseif(empty($row)){
				return new SGDPH_INFO('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.sgdph_info SET id_sgdph_info=?, type_cours_eau=?, nom_cours_eau=?, crue_100=?, servitude=?, nature_cours_eau=?, origine_aep_puits_x=?, origine_aep_puits_y=?, autorisation_pf_creusement=?, autorisation_pf_prelevement=?, autorisation_deversement=?, autorisation_occupation_dph=?, autorisation_creusement_date=?, autorisation_creusement_numero=?, autorisation_prelevement_date=?, autorisation_prelevement_numero=?, autorisation_deversement_date=?, autorisation_deversement_numero=?, autorisation_occupation_dph_date=?, autorisation_occupation_dph_numero=?, autre_autorisation=?, date_info=?, id_user=? WHERE id_sgdph_info=?');
	 	if ($st->execute(array($cat->gettype_cours_eau(),$cat->getnom_cours_eau(),$cat->getcrue_100(),$cat->getservitude(),$cat->getnature_cours(),$cat->getorigine_x(),$cat->getorigine_y(),$cat->getaut_creus(),$cat->getaut_prelev(),$cat->getaut_dever(),$cat->getaut_occu_dph(),$cat->getdate_creus(),$cat->getdate_prelev(),$cat->getdate_dever(),$cat->getdate_occup_dph(),$cat->getnum_creus(),$cat->getnum_prelev(),$cat->getnum_devers(),$cat->getnum_occup(),$cat->getautre_aut(),$cat->date_info(),$cat->id_user(),$cat->id_sgdph_info())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.sgdph_info WHERE id_sgdph_info=?');
	 	if ($st->execute(array($cat->getid_pr(),$cat->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.sgdph_info');
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
	function find_prj_sgdph($id)
 	{
	 	$st =	$this->db->prepare("select avi.id_prj,avi.id_sgdph,avi.remarque_bet_protection_inondations,avi.remarque_sup_sgdph,avis.avis,
		 avi.date_avis_sgdph,avi.date_avis_bet_sgdph, DATE_PART('day', Now() - avi.date_avis_sgdph) AS duree_avis ,
		 DATE_PART('day', Now() - avi.date_avis_bet_sgdph)AS duree_avis_sgdph,avi.approuve_par_sgdph,avi.valide_par_sgdph,
		 use.user_name as approuvee,use1.user_name as validee,avi.id_user,use2.user_name
		 from prj_inv.t_avis_sgdph avi ,gen.phpgen_users use1 ,prj_inv.ls_prj_avis avis ,gen.phpgen_users use,
		 gen.phpgen_users use2
		 where use.user_id=avi.approuve_par_sgdph and use1.user_id=avi.valide_par_sgdph and avi.avis_sgdph=avis.id 
		 and use2.user_id=avi.id_user and avi.id_prj=?");
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
 	} 
	 
	function findsgdph($id)
 	{
	 	$st =	$this->db->prepare('SELECT sgd.id_sgdph_info,tyc.type_cours_eau, sgd.nom_cours_eau, sgd.crue_100, sgd.servitude, nat.avis as nature ,
		 sgd.origine_aep_puits_x, sgd.origine_aep_puits_y, sgd.autorisation_pf_creusement, 
		 sgd.autorisation_pf_prelevement, sgd.autorisation_deversement, sgd.autorisation_occupation_dph, 
		 sgd.autorisation_creusement_date, sgd.autorisation_creusement_numero, sgd.autorisation_prelevement_date,
		 sgd.autorisation_prelevement_numero, sgd.autorisation_deversement_date, sgd.autorisation_deversement_numero, 
		 sgd.autorisation_occupation_dph_date, sgd.autorisation_occupation_dph_numero, sgd.autre_autorisation, 
		 sgd.date_info, use.user_name, sgd.id_prj
		 FROM prj_inv.sgdph_info sgd ,prj_inv.ls_prj_type_cours_eau tyc,prj_inv.ls_prj_nature_ceau nat,gen.phpgen_users use 
		 where sgd.type_cours_eau=tyc.id and sgd.nature_cours_eau=nat.id and sgd.id_user=use.user_id and sgd.id_prj=?');
	 	 	if ($st->execute(array($id))) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}
}