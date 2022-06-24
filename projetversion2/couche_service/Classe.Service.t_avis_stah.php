<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.t_avis_stah.php';

class STAH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    //pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.t_avis_stah( avis_stah, avis_abht_amenagement, date_avis_stah, valide_par_stah, approuve_par_stah,  remarque_sup_stah, amenagement_propose, date_avis_bet_stah, id_stah_info, id_prj, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
		  
 	 	if ($st->execute(array($cat->getavis_stah(),$cat->getavis_abht_amen(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getamena_prop(),$cat->getdate_avis_bet_stah(),$cat->getid_stah_info(),$cat->getid_prj(),$cat->getid_user()))) 
		{
 	 	echo "entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_stah, amenagement_propose, avis_abht_amenagement, remarque_sup_stah, avis_stah, date_avis_stah, date_avis_bet_stah, valide_par_stah, approuve_par_stah, id_stah_info, id_prj FROM prj_inv.t_avis_stah');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_stah, amenagement_propose, avis_abht_amenagement, remarque_sup_stah, avis_stah, date_avis_stah, date_avis_bet_stah, valide_par_stah, approuve_par_stah, id_stah_info, id_prj ,id_user FROM prj_inv.t_avis_stah where id_stah=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new STAH_AVIS($row->avis_stah,$row->avis_abht_amenagement,$row->date_avis_stah,$row->date_avis_bet_stah,$row->valide_par_stah,$row->approuve_par_stah,$row->remarque_sup_stah,$row->amenagement_propose,$row->id_stah_info, $row->id_prj,$row->id_user);		
			}elseif(empty($row)){
					return new STAH_AVIS('0','0','0','0','0','0','0','0','0','0','0');
				}
			}   
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_stah SET id_stah=?, amenagement_propose=?, avis_abht_amenagement=?, remarque_sup_stah=?, avis_stah=?, date_avis_stah=?, date_avis_bet_stah=?, valide_par_stah=?, approuve_par_stah=?, id_stah_info=?, id_prj=? WHERE id_stah=?');
		
	 	if ($st->execute(array($cat->getavis_stah(),$cat->getavis_abht_amen(),$cat->getdate_avis_stah(),$cat->getvalide_par_stah(),$cat->getapprouve_par_stah(),$cat->getremarque_sup_stah(),$cat->getamena_prop(),$cat->getdate_avis_bet_stah(),$cat->getid_stah_info(),$cat->getid_prj())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.t_avis_stah where id_stah=?');
	 	if ($st->execute(array($cat->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.t_avis_stah');
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
	 	$st =	$this->db->prepare(" select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.stah=true ");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

    
	function update_avis_stah($a,$b,$c,$e,$f,$g,$d)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_stah SET remarque_sup_stah=:remarque_sup_stah, avis_stah=:avis_stah, date_avis_stah=:date_avis_stah ,avis_abht_amenagement=:avis_abht_amenagement,valide_par_stah=:valide_par_stah,approuve_par_stah=:approuve_par_stah
		WHERE id_stah=:id_stah');
		if ($st->execute(array(':remarque_sup_stah' => $a,':avis_stah' => $b,':date_avis_stah' => $c,':avis_abht_amenagement' => $e,':valide_par_stah'=>$f,':approuve_par_stah'=>$g,':id_stah'=>$d)))
		{
			return true;
		}
		else{
			return false;
		}
	 
	}

	function update_approuvee_stah($a,$b)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_stah SET approuve_par_stah=:approuve_par_stah WHERE id_stah=:id_stah');
		if ($st->execute(array(':approuve_par_stah' => $a,':id_stah' => $b)))
		{
			return true;
		}
		else{
			return false;
		} 
	}

	function stah_maxdate($id){
		$st =$this->db->prepare('SELECT DISTINCT ON (id_prj)
		id_stah, amenagement_propose, avis_abht_amenagement, remarque_sup_stah, avis_stah, date_avis_stah,
		date_avis_bet_stah, valide_par_stah, approuve_par_stah, id_stah_info, id_prj, id_user
		FROM prj_inv.t_avis_stah
		where date_avis_stah is not null and id_prj=?
		ORDER BY id_prj,date_avis_stah DESC');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}

	function stah_maxdate_date(){
		$st =$this->db->prepare('SELECT DISTINCT ON (stah.id_prj)
		stah.id_stah, stah.amenagement_propose, stah.avis_abht_amenagement, stah.remarque_sup_stah, stah.avis_stah, 
		stah.date_avis_stah,stah.date_avis_bet_stah, stah.valide_par_stah, stah.approuve_par_stah, stah.id_stah_info,
		stah.id_prj, stah.id_user
		FROM prj_inv.t_avis_stah stah,prj_inv.prj_invest inv
		where stah.id_prj=inv.gid
		ORDER BY stah.id_prj,stah.date_avis_bet_stah DESC');
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