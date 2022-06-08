<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.sqe.info.php';

class SQE_S_INFO{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.sqe_info( volume_eau_usee, mode_assainissement, reutilisation_qeu, reutilisation_niveau_traitement, niveau_piezometrique, date_niveau_piezometrique, piezometre_x, piezometre_y, traitement_boue, date_info, id_user,id_prj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getvolume_eau_use(),$cat->getmodeassai(),$cat->getreut_qeu(),$cat->getniv_trait(),$cat->getniv_piezo(),$cat->getdate_piezo(),$cat->getcoord_x(),$cat->getcoord_y(),$cat->gettrait_boue(),$cat->getdate_info(),$cat->getid_user(),$cat->getid_prj()))) 
		{
			return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_sqe_info, volume_eau_usee, mode_assainissement, reutilisation_qeu, reutilisation_niveau_traitement, niveau_piezometrique, date_niveau_piezometrique, piezometre_x, piezometre_y, traitement_boue, date_info, id_user FROM prj_inv.sqe_info ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_sqe_info, volume_eau_usee, mode_assainissement, reutilisation_qeu, reutilisation_niveau_traitement, niveau_piezometrique, date_niveau_piezometrique, piezometre_x, piezometre_y, traitement_boue, date_info, id_user FROM prj_inv.sqe_info where id_sqe_info=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SQE_INFO($row->id_sqe_info,$row->volume_eau_usee,$row->mode_assainissement,$row->reutilisation_qeu,$row->reutilisation_niveau_traitement,$row->niveau_piezometrique,$row->date_niveau_piezometrique,$row->piezometre_x,$row->piezometre_y,$row->traitement_boue,$row->date_info,$row->id_user);
			}
			elseif(empty($row)){
				return new SQE_INFO('0','0','0','0','0','0','0','0','0','0','0','0');
			}
					
		}
		else{
			echo "Problème ";
			return new SQE_INFO('0','0','0','0','0','0','0','0','0','0','0','0');
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.sqe_info SET id_sqe_info=?, volume_eau_usee=?, mode_assainissement=?, reutilisation_qeu=?, reutilisation_niveau_traitement=?, niveau_piezometrique=?, date_niveau_piezometrique=?, piezometre_x=?, piezometre_y=?, traitement_boue=?, date_info=?, id_user=? WHERE id_sqe_info=?');
		
	 	if ($st->execute(array($cat->getvolume_eau_use(),$cat->getmodeassai(),$cat->getreut_qeu(),$cat->getniv_trait(),$cat->getniv_piezo(),$cat->getdate_piezo(),$cat->getcoord_x(),$cat->getcoord_y(),$cat->gettrait_boue(),$cat->getdate_info(),$cat->getid_prj(),$cat->getid_sqe_info())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.sqe_info');
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
	function find_prj_sqe($id)
 	{
	 	$st =	$this->db->prepare("select avi.id_prj,avi.id_sqe,avi.remarque_bet_assainissement,avi.remarque_sup_sqe,avis.avis,avi.date_avis_sqe,avi.date_avis_bet_sqe, DATE_PART('day', Now() - avi.date_avis_sqe) AS duree_avis , DATE_PART('day', Now() - avi.date_avis_bet_sqe)AS duree_avis_sqe,avi.approuvee_sqe,avi.valide_sqe,use.user_name as approuvee,use1.user_name as validee,avi.id_user,use2.user_name
		 from prj_inv.t_avis_sqe avi ,gen.phpgen_users use1 ,prj_inv.ls_prj_avis avis ,gen.phpgen_users use,gen.phpgen_users use2
		 where use.user_id=avi.approuvee_sqe and use1.user_id=avi.valide_sqe and avi.avis_sqe=avis.id and use2.user_id=avi.id_user and avi.id_prj=?");
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
 	} 


	function findsqe($id)
 	{
	 	$st =	$this->db->prepare('SELECT sqe.id_sqe_info, use.user_name,mo.mode_assainissement,sqe.volume_eau_usee, sqe.mode_assainissement, sqe.reutilisation_qeu,
		 sqe.reutilisation_niveau_traitement, sqe.niveau_piezometrique, sqe.date_niveau_piezometrique, 
		 sqe.piezometre_x, sqe.piezometre_y, sqe.traitement_boue, sqe.date_info, sqe.id_user, sqe.id_prj
		 FROM prj_inv.sqe_info sqe ,prj_inv.ls_prj_mode_assainissement mo ,gen.phpgen_users use 
		 where mo.id=sqe.mode_assainissement and use.user_id=sqe.id_user and sqe.id_prj=?');
	 	 	if ($st->execute(array($id))) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}


    

}