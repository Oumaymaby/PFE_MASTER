<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/ABHT_Classe.php';

class ABHT_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,avis_abht,date_avis_abht,etabli_par,valide_par,approuve_par,origine_aep,origine_autre,besoin_eau_domestique,besoin_eau_irrigation,remarque_bet_besoin_eau) values (?,?,?,?,?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($cat->getid_etat(),$cat->getetat_dossier()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select inv.gid ,inv.date_avis_abht,inv.etabli_par,inv.valide_par,inv.approuve_par,inv.origine_aep,inv.origine_autre,inv.besoin_eau_domestique,inv.besoin_eau_irrigation,inv.remarque_bet_besoin_eau,v.avis from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on v.id=inv.avis_abht ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select inv.gid ,v.avis,inv.date_avis_abht,inv.etabli_par,inv.valide_par,inv.approuve_par,inv.remarques_generales_bet ,inv.etatdossier from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on v.id=inv.avis_abht where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new ABHT($row->gid,$row->avis,$row->date_avis_abht,$row->etabli_par,$row->valide_par,$row->approuve_par,$row->remarques_generales_bet,$row->etatdossier);		
			}
			elseif(empty($row)){
				return new ABHT('0','0','0','0','0','0','0','0');
			}
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($avis)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set remarques_generales_bet=?,avis_abht=?,date_avis_abht=?,etabli_par=?,valide_par=?,approuve_par=?,etatdossier=? where gid=?');
	 	if ($st->execute(array($avis->getrem_general(),$avis->getavis_abht(),$avis->getdate_avis_abht(),$avis->getetabli_par(),$avis->getvalide_par(),$avis->getapprouve_par(),$avis->getetatdossier(),$avis->getid_pr())))
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
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_abht IS NOT NULL');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

    

}