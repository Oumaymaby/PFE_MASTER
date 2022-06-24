<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.t_avis_sepre.php';

class SEPRE_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($avis)
 	{
 	 	$st =$this->db->prepare('INSERT INTO prj_inv.t_avis_sepre(avis_sepre, remarque_bet_besoin_eau, remarques_sup_sepre, date_avis_sepre, date_avis_bet_sepre, id_user, id_sepre_info, id_prj) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
 	 	if ($st->execute(array($avis->getavis_sepre(),$avis->getremarque_bet_besoin_eau(),$avis->getremarques_sup_sepre(),$avis->getdate_avis_sepre(),$avis->getdate_avis_bet_sepre(),$avis->getid_user(),$avis->getid_sepre_info(),$avis->getid_prj()))) 
		{
 	 	 return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT id_sepre, remarque_bet_besoin_eau, remarques_sup_sepre, avis_sepre, date_avis_sepre, date_avis_bet_sepre, id_user, id_sepre_info, id_prj FROM prj_inv.t_avis_sepre');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('SELECT id_sepre, remarque_bet_besoin_eau, remarques_sup_sepre, avis_sepre, date_avis_sepre, date_avis_bet_sepre, id_user, id_sepre_info, id_prj FROM prj_inv.t_avis_sepre where id_sepre=? ');
		if ($st->execute(array($id))) {
			return $st->fetchAll();	
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.t_avis_sepre SET id_sepre=?, remarque_bet_besoin_eau=?, remarques_sup_sepre=?, avis_sepre=?, date_avis_sepre=?, date_avis_bet_sepre=?, id_user=?, id_sepre_info=?, id_prj=? WHERE id_sepre=?');

	 	if ($st->execute(array($avis->getavis_sepre(),$avis->getremarque_bet_besoin_eau(),$avis->getremarques_sup_sepre(),$avis->getdate_avis_sepre(),$avis->date_avis_bet_sepre(),$avis->getid_user(),$avis->getid_sepre_info(),$avis->getid_pr(),$avis->getid_sepre())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    
 	function supprimer($cat)
 	{

	 	$st =	$this->db->prepare('DELETE FROM prj_inv.t_avis_sepre WHERE id_sepre=?');
	 	if ($st->execute(array($cat->getid_sepre()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.t_avis_sepre');
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
	 	$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph 
		 from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v 
		 where inv.etatdossier=v.id and inv.sepre=true");
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

	
	function update_avis_sepre($a,$b,$c,$d)
	{
		$st =$this->db->prepare('UPDATE prj_inv.t_avis_sepre SET remarques_sup_sepre=:remarques_sup_sepre, avis_sepre=:avis_sepre, date_avis_sepre=:date_avis_sepre
		WHERE id_sepre=:id_sepre');
		if ($st->execute(array(':remarques_sup_sepre' => $a,':avis_sepre' => $b,':date_avis_sepre' => $c,':id_sepre'=>$d)))
	{
			return true;
		}
		else{
			return false;
		}
	
	}

	function sepre_maxdate($id){
		$st =$this->db->prepare('SELECT  DISTINCT ON (id_prj)
		id_sepre, id_prj, remarque_bet_besoin_eau, remarques_sup_sepre, avis_sepre,date_avis_sepre,
		date_avis_bet_sepre, id_user, id_sepre_info 
		from prj_inv.t_avis_sepre 
		where date_avis_sepre is not null and id_prj=?
		ORDER  BY id_prj,date_avis_sepre DESC');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
	}

	function sepre_maxdate_date(){
		$st =$this->db->prepare('SELECT  DISTINCT ON (sepre.id_prj)
		sepre.id_sepre, sepre.id_prj, sepre.remarque_bet_besoin_eau, sepre.remarques_sup_sepre, sepre.avis_sepre,
		sepre.date_avis_sepre,sepre.date_avis_bet_sepre, sepre.id_user, sepre.id_sepre_info,inv.*
		from prj_inv.t_avis_sepre sepre ,prj_inv.prj_invest inv
		where sepre.id_prj=inv.gid
		ORDER  BY sepre.id_prj,sepre.date_avis_bet_sepre DESC');
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








