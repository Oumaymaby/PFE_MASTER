<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/SQE_Classe.php';

class SQE_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    // pas besoin d'une fonction ajouter car on peux ajouter avec une modification 
 	function add($cat)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,remarque_sup_sqe,avis_sqe,date_avis_sqe,valide_par_sqe,approuve_par_sqe) values (?,?,?,?,?,?)');
 	 	if ($st->execute(array($cat->getid_pr(),$cat->getremarque_sup_sqe(),$cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_sqe,inv.avis_sqe,inv.date_avis_sqe,inv.valide_par_sqe,inv.approuve_par_sqe from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on inv.gid=v.id');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select v.avis,inv.gid,inv.remarque_sup_sqe,inv.date_avis_sqe,inv.valide_par_sqe,inv.approuve_par_sqe from prj_inv.projets_investissement inv inner join prj_inv.ls_prj_avis v on inv.avis_sqe=v.id where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new SQE($row->gid,$row->remarque_sup_sqe,$row->avis,$row->date_avis_sqe,$row->valide_par_sqe,$row->approuve_par_sqe);
			}
			elseif(empty($row)){
				return new SQE('0','0','0','0','0','0');
			}
					
		}
		else{
			echo "Problème ";
			return new SQE('0','0','0','0','0','0');
		}
 	}

    
 	function update($cat)
 	{
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set avis_sqe=? ,date_avis_sqe=?,valide_par_sqe=?,approuve_par_sqe=?,remarque_sup_sqe=? where gid=?');
		
	 	if ($st->execute(array($cat->getavis_sqe(),$cat->getdate_avis_sqe(),$cat->getvalide_par_sqe(),$cat->getapprouve_par_sqe(),$cat->getremarque_sup_sqe(),$cat->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
    

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM prj_inv.projets_investissement where avis_sqe IS NOT NULL');
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

    

}