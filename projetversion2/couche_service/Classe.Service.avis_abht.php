<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.avis_abht.php';

class ABHT_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.avis_abht(avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par,remarques_generales_bet, id_prj)VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getavis_abht(),$cat->getdate_avis_abht(),$cat->getdate_abht_bet(),$cat->getetabli_par(),$cat->getvalide_par(),$cat->getapprouve_par(),$cat->getrem_general(),$cat->getid_prj()))) 
		{
 	 		echo "entré";
 		}else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_abht, remarques_generales_bet, avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par, id_prj FROM prj_inv.avis_abht');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select id_abht, remarques_generales_bet, avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par, id_prj FROM prj_inv.avis_abht where id_prj=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new ABHT($row->id_abht,$row->remarques_generales_bet,$row->avis_abht,$row->date_avis_abht,$row->date_avis_bet_abht,$row->etabli_par,$row->valide_par,$row->approuve_par,$row->id_prj);		
			}
			elseif(empty($row)){
				return new ABHT('0','0','0','0','0','0','0','0','0');
			}
			
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set remarques_generales_bet=?,avis_abht=?,date_avis_abht=?,etabli_par=?,valide_par=?,approuve_par=?,etatdossier=? where gid=?');
	 	if ($st->execute(array($avis->getrem_general(),$avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getetatdossier(),$avis->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function update_close($id)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET etatdossier=3 WHERE gid=?');
	 	if ($st->execute(array($id)))
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
	 	if ($st->execute(array($cat->getid_etat()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_abht IS NOT NULL');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.avis_abht where id_prj=?');
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
		$st =	$this->db->prepare('select count(*) from prj_inv.avis_abht where id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

    

}