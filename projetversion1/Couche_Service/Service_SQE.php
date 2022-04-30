<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/SQE_Classe.php';

class SQE_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	// function add($cat)
 	// {
 	//  	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,remarque_sup_sqe,avis_sqe,date_avis_sqe,valide_par_sqe,approuve_par_sqe) values (?,?,?,?,?,?)');
 	//  	if ($st->execute(array($cat->getid_pr(),$cat->getremarque_sup_sqe(),$cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe()))) 
	// 	{
 	//  	echo"entré";
 	// 	}
 	// 	else{
 	//  		return false;
 	// 	}
 	// }

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select inv.gid ,inv.avis_sqe,inv.date_avis_sqe,inv.valide_par_sqe,inv.approuve_par_sqe,inv.remarque_sup_sqe,inv.remarque_bet_assainissement,inv.volume_eau_usee,inv.mode_assainissement,inv.reutilisation_qeu,inv.reutilisation_niveau_traitement,inv.niveau_piezometrique,inv.date_niveau_piezometrique,inv.piezometre_x,inv.piezometre_y,inv.traitement_boue from prj_inv.projets_investissement inv ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select gid,avis_sqe,date_avis_sqe,valide_par_sqe,approuve_par_sqe,remarque_sup_sqe,remarque_bet_assainissement,volume_eau_usee,mode_assainissement,reutilisation_qeu,reutilisation_niveau_traitement,niveau_piezometrique,date_niveau_piezometrique,piezometre_x,piezometre_y,traitement_boue from prj_inv.projets_investissement where gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SQE($row->gid,$row->avis_sqe,$row->date_avis_sqe,$row->valide_par_sqe,$row->approuve_par_sqe,$row->remarque_sup_sqe,$row->remarque_bet_assainissement,$row->volume_eau_usee,$row->mode_assainissement,$row->reutilisation_qeu,$row->reutilisation_niveau_traitement,$row->niveau_piezometrique,$row->date_niveau_piezometrique,$row->piezometre_x,$row->piezometre_y,$row->traitement_boue);
			}
			elseif(empty($row)){
				return new SQE('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}
					
		}
		else{
			echo "Problème ";
			return new SQE('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set avis_sqe=? ,date_avis_sqe =?,valide_par_sqe=?,approuve_par_sqe=?,remarque_sup_sqe=?,remarque_bet_assainissement=?,volume_eau_usee=?,mode_assainissement=?,reutilisation_qeu=?,reutilisation_niveau_traitement=?,niveau_piezometrique=?,date_niveau_piezometrique=?,piezometre_x=?,piezometre_y=?,traitement_boue=? where gid=?');
		
	 	if ($st->execute(array($cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe(),$cat->getremarque_sup_sqe(),$cat->getremarque_bet_assai(),$cat->getvolume_eau_use(),$cat->getmodeassai(),$cat->getreut_qeu(),$cat->getniv_trait(),$cat->getniv_piezo(),$cat->getdate_piezo(),$cat->getcoord_x(),$cat->getcoord_y(),$cat->gettrait_boue(),$cat->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_sqe IS NOT NULL and etatdossier=1');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

    

}