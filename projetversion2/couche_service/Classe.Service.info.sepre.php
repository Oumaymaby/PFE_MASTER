<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.sepre.info.php';

class SEPRE_S_INFO{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($avis)
 	{
 	 	$st =	$this->db->prepare('INSERT INTO prj_inv.sepre_info(origine_aep, origine_autre, besoin_eau_domestique, besoin_eau_irrigation, date_info, id_user,id_prj) VALUES (? ,?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($avis->getorigine_eau_pot(),$avis->getorigine_autre(),$avis->getbes_eau_dom(),$avis->getbes_eau_irrg(),$avis->getdate_info(),$avis->getid_user(),$avis->getid_prj()))) 
		{
 	 	 return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{
	 	$st =	$this->db->prepare('SELECT id_sepre_info, origine_aep, origine_autre, besoin_eau_domestique, besoin_eau_irrigation, date_info, id_user FROM prj_inv.sepre_info');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare("select  id_sepre_info, origine_aep, origine_autre, besoin_eau_domestique, besoin_eau_irrigation, date_info, id_user from prj_inv.sepre_info where id_sepre_info=? ");
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SEPRE_INFO($row->id_sepre_info,$row->origine_aep,$row->origine_autre,$row->besoin_eau_domestique,$row->besoin_eau_irrigation,$row->date_info,$row->id_user );
			}
			elseif(empty($row)){
				return new SEPRE_INFO('0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.sepre_info SET origine_aep=?, origine_autre=?, besoin_eau_domestique=?, besoin_eau_irrigation=?, date_info=?, id_user=? WHERE id_sepre_info=?');

	 	if ($st->execute(array($avis->getorigine_eau_pot(),$avis->getorigine_autre(),$avis->getbes_eau_dom(),$avis->getbes_eau_irrg(),$avis->getid_user(),$avis->getid_sepre_info())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.sepre_info WHERE id_sepre_info=?');
	 	if ($st->execute(array($cat->getid_sepre_info()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_sepre IS NOT NULL and etatdossier=1');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	function findByIdprj($id)
 	{
		$st =$this->db->prepare("select DATE_PART('day', Now() - date_avis_sepre) AS duree_avis , DATE_PART('day', Now() - date_avis_bet_sepre)AS duree_avis_sepre ,id_sepre , origine_aep, origine_autre, besoin_eau_domestique,besoin_eau_irrigation,remarque_bet_besoin_eau,remarques_sup_sepre,avis_sepre , date_avis_sepre, date_avis_bet_sepre  from prj_inv.avis_sepre where id_prj=?");
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
	function find_prj_sepre($id)
 	{
	 	$st =	$this->db->prepare("select id_prj,avi.id_sepre,avi.remarque_bet_besoin_eau,avi.remarques_sup_sepre,avis.avis,avi.date_avis_sepre,avi.date_avis_bet_sepre, DATE_PART('day', Now() - avi.date_avis_sepre) AS duree_avis , DATE_PART('day', Now() - avi.date_avis_bet_sepre)AS duree_avis_sepre  
		 from prj_inv.t_avis_sepre avi inner join 
		 prj_inv.ls_prj_avis avis on avi.avis_sepre=avis.id
		 where avi.id_prj=? ");
	 	 	if ($st->execute(array($id))) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

	function findsepre($id)
 	{
	 	$st =	$this->db->prepare('SELECT se.id_sepre_info, orr.origine_aep, se.origine_autre, se.besoin_eau_domestique, se.besoin_eau_irrigation, se.date_info, use.user_name, se.id_prj
		 FROM prj_inv.sepre_info se ,gen.phpgen_users use,prj_inv.ls_prj_origine_aep orr 
		 where se.id_user= use.user_id and orr.id=se.origine_aep and se.id_prj=? ');
	 	 	if ($st->execute(array($id))) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}
	
	function nombre_sepre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.prj_invest where sepre=true');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}




	



}

// $c = new Connexion();
// $id=1;
// echo $id;
// $st =$c->getdb()->prepare('select inv.gid ,inv.remarques_sup_sepre,v.avis,inv.date_avis_sepre,n.type_cours_eau ,inv.nom_cours_eau,inv.crue_100,inv.servitude,inv.nature_cours_eau,inv.origine_aep_puits_x,inv.origine_aep_puits_y,inv.autorisation_pf_creusement,inv.autorisation_pf_prelevement,inv.autorisation_deversement,inv.autorisation_occupation_dph,inv.autre_autorisation,inv.remarque_bet_protection_inondations from prj_inv.ls_prj_type_cours_eau n inner join prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on v.id=inv.avis_sepre on n.id=inv.type_cours_eau where inv.gid='.$id);


// if ($st->execute(array(isset($id)))) {
// 	$row = $st->fetch(PDO::FETCH_OBJ);
// 	foreach($row AS $key => $value) {
// 		echo print_r($row);	
// 	}
// 	// $se=new SEPRE($row->gid,$row->remarques_sup_sepre,$row->avis,$row->date_avis_sepre,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->servitude,$row->nature_cours_eau,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autre_autorisation,$row->remarque_bet_protection_inondations);

// }
// $c = new Connexion();
// var_dump($c->getdb());
// $st =	$c->getdb()->prepare('select inv.gid,inv.remarques_sup_sepre,v.avis,inv.date_avis_sepre,inv.nom_cours_eau,inv.crue_100,inv.servitude,inv.nature_cours_eau,inv.origine_aep_puits_x,inv.origine_aep_puits_y,inv.autorisation_pf_creusement,inv.autorisation_pf_prelevement,inv.autorisation_deversement,inv.autorisation_occupation_dph,inv.autre_autorisation,inv.remarque_bet_protection_inondations 
// from prj_inv.ls_prj_avis v inner join prj_inv.projets_investissement inv
// on v.id=inv.avis_sepre where inv.gid=1');
// if ($st->execute()) {
// 	$cc=$st->fetchAll();
// 	var_dump($cc);
//     return $cc;
// }else{
// 	 	return null;
// }

// $c= new SEPRE_Service();
// $cc=$c->findByIdprj(1);
// foreach($cc as $row) {
// 	echo $row['id_sepre'];
// }
// // var_dump($cc);
// $data = array();
// foreach ($cc as $row) {
//     $data[] = array(
//         "id"=>$row["id_sepre"],
//         "origine"=>$row["origine_aep"],
// 		"autre_origine"=>$row["origine_autre"],
// 		"besoin_eau_domestique"=>$row["besoin_eau_domestique"],
// 		"besoin_eau_irrigation"=>$row["besoin_eau_irrigation"],
// 		"remarque_bet_besoin_eau"=>$row["remarque_bet_besoin_eau"],
// 		"remarques_sup_sepre"=>$row["remarques_sup_sepre"],
// 		"avis_sepre"=>$row["avis_sepre"],
// 		"date_avis_sepre"=>$row["date_avis_sepre"],
// 		"date_avis_bet_sepre"=>$row["date_avis_bet_sepre"],
// 		"id_prj"=>$row["id_prj"],
//     );
// }

// // Response
// $response = array(
// 	"data" => $data
// );

// foreach ($response as $k=>$v) {
// 	echo print_r($v);

// }








