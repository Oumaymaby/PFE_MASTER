<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.t_avis_sqe.php';

class SQE_SERVICE{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.t_avis_sqe( avis_sqe,date_avis_sqe, valide_sqe, approuvee_sqe,remarque_sup_sqe,remarque_bet_assainissement,date_avis_bet_sqe,id_sqe_info, id_prj,id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)');
 	 	if ($st->execute(array($cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe(),$cat->getremarque_sup_sqe(),$cat->getremarque_bet_assai(),$cat->getdate_avis_bet_sqe(),$cat->getid_sqe_info(),$cat->getid_prj(),$cat->getid_user()))) 
		{
			return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{
	 	$st =	$this->db->prepare('SELECT id_sqe, remarque_bet_assainissement, remarque_sup_sqe, avis_sqe, date_avis_sqe, date_avis_bet_sqe, valide_sqe, approuvee_sqe, id_sqe_info, id_prj ,id_user FROM prj_inv.t_avis_sqe ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_sqe, remarque_bet_assainissement, remarque_sup_sqe, avis_sqe, date_avis_sqe, date_avis_bet_sqe, valide_sqe, approuvee_sqe, id_sqe_info, id_prj ,id_user FROM prj_inv.t_avis_sqe where id_sqe=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SQE_AVIS($row->avis_sqe,$row->valide_par_sqe,$row->approuve_par_sqe,$row->remarque_sup_sqe,$row->remarque_bet_assainissement,$row->date_avis_sqe,$row->date_avis_sqe_bet,$row->id_sqe_info,$row->id_prj,$row->id_user);
			}
			elseif(empty($row)){
				return new SQE_AVIS('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}
					
		}
		else{
			echo "Problème ";
			return new SQE_AVIS('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_sqe SET id_sqe=?, remarque_bet_assainissement=?, remarque_sup_sqe=?, avis_sqe=?, date_avis_sqe=?, date_avis_bet_sqe=?, valide_sqe=?, approuvee_sqe=?, id_sqe_info=?, id_prj=? WHERE id_sqe=?');
		
	 	if ($st->execute(array($cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe(),$cat->getremarque_sup_sqe(),$cat->getremarque_bet_assai(),$cat->getdate_avis_bet_sqe(),$cat->getdate_avis_bet_sqe(),$cat->id_sqe_info(),$cat->getid_prj())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function supprimer($a)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.t_avis_sqe WHERE id_sqe=:id_sqe ');
	 	if ($st->execute(array(':id_sqe' => $a))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}
    

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM t_avis_sqe ');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.avis_sqe where id_prj=?');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;
			// if(!empty($row)){
			// 	return new SQE($row->id_sqe, $row->volume_eau_usee, $row->mode_assainissement, $row->reutilisation_qeu, $row->reutilisation_niveau_traitement, $row->niveau_piezometrique, $row->date_niveau_piezometrique, $row->piezometre_x, $row->piezometre_y, $row->traitement_boue, $row->remarque_bet_assainissement, $row->remarque_sup_sqe, $row->avis_sqe, $row->date_avis_sqe, $row->date_avis_bet_sqe, $row->id_prj, $row->valide_sqe, $row->approuvee_sqe);
			// }
			// elseif(empty($row)){
			// 	return new SQE('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
			// }		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

	function nombre_prj($id){
		$st =	$this->db->prepare('select count(*) from prj_inv.avis_sqe where id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	//selection des projet affecter à SQE
	function find_prj_sqe()
 	{
	 	$st =	$this->db->prepare(" select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.sqe=true ");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}
	 
	 
	function update_avis_sqe($a,$b,$c,$e,$f,$g)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_sqe SET remarque_sup_sqe=:remarque_sup_sqe, avis_sqe=:avis_sqe, date_avis_sqe=:date_avis_sqe,valide_sqe=:valide_sqe, approuvee_sqe=:approuvee_sqe WHERE id_sqe=:id_sqe');
		if ($st->execute(array(':remarque_sup_sqe' => $a,':avis_sqe' => $b,':date_avis_sqe' => $c,':valide_sqe' => $e,':approuvee_sqe'=>$f,':id_sqe'=>$g)))
		{
			 return true;
		}
		else{
			 return false;
		}
	  
	}

	function update_approuvee_sqe($a,$b)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_sqe SET approuvee_sqe=:approuvee_sqe WHERE id_sqe=:id_sqe');
		if ($st->execute(array(':approuvee_sqe' => $a,':id_sqe' => $b)))
		{
			return true;
		}
		else{
			return false;
		} 
	}

	function sqe_maxdate($id){
		$st =$this->db->prepare('SELECT DISTINCT ON (id_prj)
		id_sqe, remarque_bet_assainissement, remarque_sup_sqe, avis_sqe, date_avis_sqe, date_avis_bet_sqe, 
		valide_sqe, approuvee_sqe, id_sqe_info, id_prj, id_user
		FROM prj_inv.t_avis_sqe
		where date_avis_sqe is not null and id_prj=?
		ORDER BY id_prj,date_avis_sqe DESC');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}

	function sqe_maxdate_date(){
		$st =$this->db->prepare('SELECT DISTINCT ON (sqe.id_prj)
		sqe.id_sqe, sqe.remarque_bet_assainissement, sqe.remarque_sup_sqe, sqe.avis_sqe, sqe.date_avis_sqe, 
		sqe.date_avis_bet_sqe,sqe.valide_sqe, sqe.approuvee_sqe, sqe.id_sqe_info, sqe.id_prj, sqe.id_user,inv.*
		FROM prj_inv.t_avis_sqe sqe,prj_inv.prj_invest inv
		where sqe.id_prj=inv.gid
		ORDER BY sqe.id_prj,sqe.date_avis_bet_sqe DESC');
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