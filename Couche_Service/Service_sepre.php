<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/SEPRE_Classe.php';

class SEPRE_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($avis)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,avis_abht,date_avis_abht,etabli_par,valide_par,approuve_par,origine_aep,origine_autre,besoin_eau_domestique,besoin_eau_irrigation,remarque_bet_besoin_eau) values (?,?,?,?,?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($avis->getid_pr(),$avis->getid_pr(),$avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getorigine_AEP(),$avis->getorigine_autre(),$avis->getbes_eau_dom(),$avis->getbes_eau_irrig(),$avis->getrem_bet_bes_eau()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select inv.gid ,inv.remarques_sup_sepre,v.avis,inv.date_avis_sepre,n.type_cours_eau ,inv.nom_cours_eau,inv.crue_100,inv.servitude,inv.nature_cours_eau,inv.origine_aep_puits_x,inv.origine_aep_puits_y,inv.autorisation_pf_creusement,inv.autorisation_pf_prelevement,inv.autorisation_deversement,inv.autorisation_occupation_dph,inv.autre_autorisation,inv.remarque_bet_protection_inondations from prj_inv.ls_prj_type_cours_eau n inner join prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on v.id=inv.avis_sepre on n.id=inv.type_cours_eau');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select inv.gid,inv.remarques_sup_sepre,v.avis,inv.date_avis_sepre,inv.type_cours_eau,inv.nom_cours_eau,inv.crue_100,inv.servitude,inv.nature_cours_eau,inv.origine_aep_puits_x,inv.origine_aep_puits_y,inv.autorisation_pf_creusement,inv.autorisation_pf_prelevement,inv.autorisation_deversement,inv.autorisation_occupation_dph,inv.autre_autorisation,inv.remarque_bet_protection_inondations 
		from prj_inv.ls_prj_avis v inner join prj_inv.projets_investissement inv
		on v.id=inv.avis_sepre where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SEPRE($row->gid,$row->remarques_sup_sepre,$row->avis,$row->date_avis_sepre,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->servitude,$row->nature_cours_eau,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autre_autorisation,$row->remarque_bet_protection_inondations);
			}
			elseif(empty($row)){
				return new SEPRE('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set gid=? ,avis_abht=?,date_avis_abht=?,etabli_par=?,valide_par=?,approuve_par=?,origine_aep=?,origine_autre=?,besoin_eau_domestique=?,besoin_eau_irrigation=?,remarque_bet_besoin_eau=?,avis_abht=? from prj_inv.projets_investissement where gid=?');
	 	if ($st->execute(array($avis->getid_pr(),$avis->getid_pr(),$avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getorigine_AEP(),$avis->getorigine_autre(),$avis->getbes_eau_dom(),$avis->getbes_eau_irrig(),$avis->getrem_bet_bes_eau())))
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
	 	if ($st->execute(array($cat->getid_etat()))) {
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




