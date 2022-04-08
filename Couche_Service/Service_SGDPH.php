<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/SGDPH_Classe.php';

class SGDPH_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,avis_sgdph,remarque_sup_sgdph,avis_sgdph,date_avis_sgdph,valide_par_sgdph,approuve_par_sgdph,superficie_bv,amenagement_propose) values (?,?,?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($cat->getid_pr(),$cat->getavis_sgdph(),$cat->getremarque_sup_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->getsuperficie_bv(),$cat->getamenagement_propose()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_sgdph,inv.avis_sgdph,inv.date_avis_sgdph,inv.valide_par_sgdph,inv.approuve_par_sgdph,inv.superficie_bv,inv.amenagement_propose from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on inv.gid=v.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select inv.gid,inv.remarque_sup_sgdph,v.avis,inv.date_avis_sgdph,inv.valide_par_sgdph,inv.approuve_par_sgdph,inv.superficie_bv,inv.amenagement_propose from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v 
		on inv.avis_sgdph=v.id 
		where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SGDPH($row->gid,$row->remarque_sup_sgdph,$row->avis,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->superficie_bv,$row->amenagement_propose);
			}
			elseif(empty($row)){
				return new SGDPH('0','0','0','0','0','0','0','0');
			}		
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set remarque_sup_sgdph=?,avis_sgdph=?,date_avis_sgdph=?,valide_par_sgdph=?,approuve_par_sgdph=? where gid=?');
	 	if ($st->execute(array($cat->getremarque_sup_sgdph(),$cat->getavis_sgdph(),$cat->getdate_avis_sgdph(),$cat->getvalide_par_sgdph(),$cat->getapprouve_par_sgdph(),$cat->getid_pr())))
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
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_sgdph IS NOT NULL');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

    

}