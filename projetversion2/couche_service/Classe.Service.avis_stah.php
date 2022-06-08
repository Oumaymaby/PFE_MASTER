<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.avis_stah.php';

class STAH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.avis_stah(avis_stah, avis_abht_amenagement,date_avis_stah, valide_par_stah, approuve_par_stah,remarque_sup_stah,amenagement_propose,superficie_bv,date_avis_bet_stah, id_prj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getavis_stah(),$cat->getavis_abht_amen(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getamena_prop(),$cat->getsuperficie_bv(),$cat->getdate_avis_bet_stah(),$cat->getid_prj()))) 
		{
 	 	echo "entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_stah,inv.amenagement_propose,inv.superficie_bv,inv.avis_stah,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah from  prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on inv.gid=v.id ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select inv.gid,inv.avis_stah,inv.avis_abht_amenagement,inv.date_avis_stah,inv.valide_par_stah,inv.approuve_par_stah,inv.remarque_sup_stah,inv.amenagement_propose,inv.superficie_bv from prj_inv.projets_investissement inv where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new STAH($row->gid,$row->avis_stah,$row->avis_abht_amenagement,$row->date_avis_stah,$row->valide_par_stah,$row->approuve_par_stah,$row->remarque_sup_stah,$row->amenagement_propose,$row->superficie_bv);		
			}elseif(empty($row)){
					return new STAH('0','0','0','0','0','0','0','0','0');
				}
			}   
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set avis_stah=? ,avis_abht_amenagement=?,date_avis_stah=?,valide_par_stah=?,approuve_par_stah=?,remarque_sup_stah=?,amenagement_propose=?,superficie_bv=? where gid=?');
		
	 	if ($st->execute(array($cat->getavis_stah(),$cat->getavis_abht_amen(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getamena_prop(),$cat->getsuperficie_bv(),$cat->getid_pr())))
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
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_stah IS NOT NULL and etatdossier=1');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare('select * from prj_inv.avis_stah where id_prj=?');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;
			// if(!empty($row)){
			// 	return new STAH($row->id_stah, $row->superficie_bv, $row->amenagement_propose, $row->avis_abht_amenagement, $row->remarque_sup_stah, $row->avis_stah, $row->date_avis_stah, $row->date_avis_bet_stah, $row->valide_par_stah, $row->approuve_par_stah, $row->id_prj);
			// }
			// elseif(empty($row)){
			// 	return new STAH('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
			// }		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

	function nombre_prj($id){
		$st =	$this->db->prepare('select count(*) from prj_inv.avis_stah where id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	//selection des projet affecter à STAH
	function find_prj_stah()
 	{
	 	$st =	$this->db->prepare(" select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.stah=true ");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

    

}