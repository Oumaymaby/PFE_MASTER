<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/STAH_Classe.php';

class STAH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,inv.gid,inv.remarque_sup_stah,inv.avis_stah,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah,inv.volume_eau_usee,inv.mode_assainissement,inv.reutilisation_qeu,inv.reutilisation_niveau_traitement,inv.niveau_piezometrique,inv.date_niveau_piezometrique,inv.piezometre_x,inv.piezometre_y,inv.traitement_boue) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($cat->getid_pr(),$cat->getremarque_sup_stah(),$cat->getavis_stah(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getvolume_eau_usee(),$cat->getmode_assainissement(),$cat->getreutilisation_qeu(),$cat->getreutilisation_niveau_traitement(),$cat->getdate_niveau_piezometrique(),$cat->getpiezometre_x(),$cat->getpiezometre_y(),$cat->gettraitement_boue()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_stah,inv.avis_stah,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah,inv.volume_eau_usee,inv.mode_assainissement,inv.reutilisation_qeu,inv.reutilisation_niveau_traitement,inv.niveau_piezometrique,inv.date_niveau_piezometrique,inv.piezometre_x,inv.piezometre_y,inv.traitement_boue from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on inv.gid=v.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_stah,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah,inv.volume_eau_usee,inv.mode_assainissement,inv.reutilisation_qeu,inv.reutilisation_niveau_traitement,inv.niveau_piezometrique,inv.date_niveau_piezometrique,inv.piezometre_x,inv.piezometre_y,inv.traitement_boue 
		from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v 
		on inv.avis_stah=v.id 
		where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new STAH($row->gid,$row->remarque_sup_stah,$row->avis,$row->date_avis_stah,$row->valide_par_stah,$row->approuve_par_stah,$row->volume_eau_usee,$row->mode_assainissement,$row->reutilisation_qeu,$row->reutilisation_niveau_traitement,$row->niveau_piezometrique,$row->date_niveau_piezometrique,$row->piezometre_x,$row->piezometre_y,$row->traitement_boue);		
			}elseif(empty($row)){
					return new STAH('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
				}
			}   
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set avis_stah=?,date_avis_stah=?,valide_par_stah=?,approuve_par_stah=? ,remarque_sup_stah=? where gid=?');
		$ec=$st->execute(array($cat->getavis_stah(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getid_pr()));
	 	if ($st->execute(array($cat->getavis_stah(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getid_pr())))
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
	 	if ($st->execute(array($cat->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

    

}