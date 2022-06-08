<?php
/**
* OUMAIMA SABI
* DATE:19/05/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.stah.info.php';

class STAH_S_INFO{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.stah_info( superficie_bv, date_info, id_user,id_prj) VALUES (?, ?, ?, ?)');
 	 	if ($st->execute(array($cat->getsuperficie_bv(),$cat->getdate_info(),$cat->getid_user(),$cat->getid_prj()))) 
		{
 	 	echo "entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_stah_info, superficie_bv, date_info, id_user FROM prj_inv.stah_info');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_stah_info, superficie_bv, date_info, id_user FROM prj_inv.stah_info where id_stah_info=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new STAH_INFO($row->getid_stah_info,$row->superficie_bv,$row->date_info,$row->id_user);		
			}elseif(empty($row)){
					return new STAH_INFO('0','0','0','0');
				}
			}   
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.stah_info SET id_stah_info=?, superficie_bv=?, date_info=?, id_user=? WHERE id_stah_info=?');
		
	 	if ($st->execute(array($cat->getsuperficie_bv(),$cat->getdate_info(),$cat->getid_user(),$cat->getid_stah_info())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.stah_info WHERE id_stah_info=?');
	 	if ($st->execute(array($cat->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.stah_info');
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
	function find_prj_stah($id)
 	{
	 	$st =	$this->db->prepare("select avi.id_prj,avi.id_stah,avi.amenagement_propose,avi.remarque_sup_stah,avis.avis as avis_stah,
		avir.avis as avis_amg,avi.date_avis_stah,avi.date_avis_bet_stah, DATE_PART('day', Now() - avi.date_avis_stah) AS duree_avis , 
		DATE_PART('day', Now() - avi.date_avis_bet_stah)AS duree_avis_stah,avi.approuve_par_stah, avi.valide_par_stah,
		use.user_name as approuvee,use1.user_name as validee,avi.id_user,use2.user_name
		from prj_inv.t_avis_stah avi ,gen.phpgen_users use1 ,prj_inv.ls_prj_avis avis ,
		gen.phpgen_users use,gen.phpgen_users use2 ,prj_inv.ls_prj_avis avir
		where use.user_id=avi.approuve_par_stah and 
		use1.user_id=avi.valide_par_stah and 
		avi.avis_stah=avis.id and avi.avis_abht_amenagement=avir.id and
		use2.user_id=avi.id_user and 
		avi.id_prj=?");
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
 	}

	 function findstah($id)
 	{
	 	$st =	$this->db->prepare('SELECT st.id_stah_info, st.superficie_bv, st.date_info, use.user_name as usename, st.id_prj
		 FROM prj_inv.stah_info st,gen.phpgen_users use 
		 where use.user_id=st.id_user and st.id_prj=?');
	 	if ($st->execute(array($id))) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
 	}


}