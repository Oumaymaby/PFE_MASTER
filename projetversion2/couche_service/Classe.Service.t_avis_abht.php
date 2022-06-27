<?php
/**
* OUMAIMA SABI
* DATE:28/05/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.t_avis_abht.php';

class ABHT_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($avis)
 	{
 	 	$st =$this->db->prepare('INSERT INTO prj_inv.t_avis_abht( avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par, remarques_generales_bet, id_prj, id_user)VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getdate_abht_bet(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getrem_general(),$avis->getid_prj(),$avis->getid_user()))) 
		{
 	 	 return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_abht, remarques_generales_bet, avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par, id_prj, id_user FROM prj_inv.t_avis_abht');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_abht, remarques_generales_bet, avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par, valide_par, approuve_par, id_prj, id_user FROM prj_inv.t_avis_abht where id_abht=? ');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new ABHT($row->remarques_generales_bet,$row->avis_abht,$row->date_avis_abht,$row->date_avis_bet_abht,$row->etabli_par,$row->valide_par,$row->approuve_par,$row->id_prj,$row->id_user);		
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
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_abht SET id_abht=?, remarques_generales_bet=?, avis_abht=?, date_avis_abht=?, date_avis_bet_abht=?, etabli_par=?, valide_par=?, approuve_par=?, id_prj=?, id_user=? WHERE id_abht=? ');

	 	if ($st->execute(array($avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getdate_abht_bet(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getrem_general(),$avis->getid_prj(),$avis->getid_user())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($a)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.t_avis_abht WHERE id_abht=:id_abht');
	 	if ($st->execute(array(':id_abht'=>$a))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.t_avis_abht');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare("select id_sepre,remarque_bet_besoin_eau,remarques_sup_sepre,avis_sepre,date_avis_sepre,date_avis_bet_sepre,DATE_PART('day', Now() - date_avis_sepre) AS duree_avis , DATE_PART('day', Now() - date_avis_bet_sepre)AS duree_avis_sepre from prj_inv.t_avis_sepre where id_prj=?");
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;
			// if(!empty($row)){
			// 	return new SEPRE($row->id_sepre, $row->origine_aep, $row->origine_autre, $row->besoin_eau_domestique, $row->besoin_eau_irrigation, $row->remarque_bet_besoin_eau, $row->remarques_sup_sepre, $row->avis_sepre, $row->date_avis_sepre, $row->date_avis_bet_sepre, $row->id_prj);
			// }
			// elseif(empty($row)){
			// 	return new SEPRE('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
			// }		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}
	
	function find_prj_abht($id)
 	{
	 	$st =	$this->db->prepare("select avi.id_prj,avi.id_abht,avi.remarques_generales_bet,avis.avis as avis_abht,
		 avi.date_avis_abht,avi.date_avis_bet_abht, DATE_PART('day', Now() - avi.date_avis_abht) AS duree_avis , 
		 DATE_PART('day', Now() - avi.date_avis_bet_abht)AS duree_avis_abht,avi.approuve_par, avi.valide_par,avi.etabli_par,
		 use.user_name as approuvee,use1.user_name as validee,user2.user_name as etabli,avi.id_user,use2.user_name
		 from prj_inv.t_avis_abht avi ,gen.phpgen_users use1 ,prj_inv.ls_prj_avis avis ,
		 gen.phpgen_users use,gen.phpgen_users use2 ,gen.phpgen_users user2
		 where use.user_id=avi.approuve_par and 
		 use1.user_id=avi.valide_par and 
		 user2.user_id=avi.etabli_par and
		 avi.avis_abht=avis.id and
		 use2.user_id=avi.id_user and 
		 avi.id_prj=?");
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
 	}

	function nombre_prj($id){
		$st =	$this->db->prepare('select count(*) from prj_inv.avis_sepre where id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	//selection des projet affecter à SEPRE
	function find_prj_sepre()
 	{
	 	$st =	$this->db->prepare(" select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.sepre=true ");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 


	function update_rem_bet($a,$b,$c,$d)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_sepre SET remarque_bet_besoin_eau=:remarque_bet_besoin_eau , date_avis_bet_sepre=:date_avis_bet_sepre WHERE id_sepre=:id_sepre and id_prj=:id_prj ');
        // var_dump($st->execute(array(':remarque_bet_besoin_eau' => $a,':id_sepre' => $b,':id_prj' => $c)));
	 	if ($st->execute(array(':remarque_bet_besoin_eau' => $a,':id_sepre' => $b,':id_prj' => $c,':date_avis_bet_sepre'=>$d)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function update_etatdossier($a)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET etatdossier=3  WHERE gid=:id_prj');
        // var_dump($st->execute(array(':remarque_bet_besoin_eau' => $a,':id_sepre' => $b,':id_prj' => $c)));
	 	if ($st->execute(array(':id_prj' => $a)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function update_abht($a,$b,$c,$d){
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_abht SET  avis_abht=:avis_abht, date_avis_abht=:date_avis_abht,etabli_par=:etabli_par WHERE id_abht=:id_abht ');
        // var_dump($st->execute(array(':remarque_bet_besoin_eau' => $a,':id_sepre' => $b,':id_prj' => $c)));
	 	if ($st->execute(array(':avis_abht' => $a,':date_avis_abht' => $b,':etabli_par' => $c,':id_abht'=>$d)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
	}

	
	function update_approuvee_abht($a,$b){
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_abht SET  approuve_par=:approuve_par WHERE id_abht=:id_abht ');
        // var_dump($st->execute(array(':remarque_bet_besoin_eau' => $a,':id_sepre' => $b,':id_prj' => $c)));
	 	if ($st->execute(array(':approuve_par' => $a,':id_abht'=>$b)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
	}

	function abht_maxdate($id){
		$st =$this->db->prepare('SELECT DISTINCT ON (id_prj)
		id_abht, remarques_generales_bet, avis_abht, date_avis_abht, date_avis_bet_abht, etabli_par,
		valide_par, approuve_par, id_prj, id_user
		FROM prj_inv.t_avis_abht
		where date_avis_abht is not null and id_prj=?
		ORDER BY id_prj,date_avis_abht DESC');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}

	function abht_maxdate_date(){
		$st =$this->db->prepare('SELECT DISTINCT ON (abht.id_prj)
		abht.id_abht, abht.remarques_generales_bet, abht.avis_abht, abht.date_avis_abht, abht.date_avis_bet_abht, 
		abht.etabli_par,abht.valide_par,abht.approuve_par, abht.id_prj, abht.id_user
		FROM prj_inv.t_avis_abht abht, prj_inv.prj_invest inv
		where abht.id_prj=inv.gid
		ORDER BY abht.id_prj,abht.date_avis_bet_abht DESC');
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
