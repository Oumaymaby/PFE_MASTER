<?php 
/**
* OUMAIMA SABI
* DATE:21/02/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.prj_inv.php';
require_once 'Classe.Service.etat.php';

class Projet_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($prj)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.prj_invest (gid,numero_dossier,numero_archive,date_arrivee_abht,date_arrivee_bet,commune,province,douar_localite,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,fond_dossier,geom,dates_commissions,categories,surface_batie,type_dossier,etatdossier,sepre,sqe,stah,sgdph,payement,date_payement,montant_payer) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,ST_GeomFromText(?),?,?,?,?,?,?,?,?,?,?,?,?)');
 	 	if($st->execute(array($prj->getid_pr(),
		  $prj->getnum_oss(),
		  $prj->getnum_archv(),
		  $prj->getdate_arr_abht(),
		  $prj->getdate_arr_bet(),
		  $prj->getcom(),
		  $prj->getprovince(),
		  $prj->getdouar_loc(),
		  $prj->getmaitre_ouv(),
		  $prj->getintitule_pr(),
		  $prj->getarchitecte(),
		  $prj->gettitre_foncier(),
		  $prj->getsupf(),
		  $prj->gettype_projet(),
		  $prj->getfond_doss(),
		  $prj->getgeom(),
		  $prj->getdate_comm(),
		  $prj->getcatg(),
		  $prj->getsurf_bat(),
		  $prj->gettype_doss(),
		  $prj->getetat_dossier(),
		  $prj->getsepre(),
		  $prj->getsqe(),
		  $prj->getstah(),
		  $prj->getsgdph(),
		  $prj->getpayement(),
		  $prj->getdate_payement(),
		  $prj->getmontant_payer()	 
		  ))) 
		{
 	 		return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select * from prj_inv.prj_invest');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select gid,numero_dossier,numero_archive,date_arrivee_abht,date_arrivee_bet,commune,province,douar_localite,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,fond_dossier,ST_AsGeoJSON(geom) as geom,dates_commissions,categories,surface_batie,type_dossier,etatdossier,sepre,sqe,stah,sgdph,payement,date_payement,montant_payer from prj_inv.prj_invest where gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new ProjetInv($row->gid,$row->numero_dossier,$row->numero_archive,$row->date_arrivee_abht,$row->date_arrivee_bet,$row->commune,$row->province,$row->douar_localite,$row->maitre_ouvrage,$row->intitule_projet,$row->architecte,$row->titre_foncier,$row->superficie,$row->type_projet,$row->fond_dossier,$row->geom,$row->dates_commissions,$row->categories,$row->surface_batie,$row->type_dossier,$row->etatdossier,$row->sepre,$row->sqe,$row->stah,$row->sgdph,$row->payement,$row->date_payement,$row->montant_payer);	
			}
			elseif(empty($row)){
				return new ProjetInv('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}
			// return new ProjetInv($row->gid,$row->numero_dossier,$row->numero_archive,$row->date_arrivee_abht,$row->date_arrivee_bet,$row->commune,$row->province,$row->douar_localite,$row->maitre_ouvrage,$row->intitule_projet,$row->architecte,$row->titre_foncier,$row->superficie,$row->type_projet,$row->payement,$row->date_payement,$row->montant_payer,$row->remarques_generales_bet,$row->avis_abht,$row->date_avis_abht,$row->etabli_par,$row->valide_par,$row->approuve_par,$row->origine_aep,$row->origine_autre,$row->besoin_eau_domestique,$row->besoin_eau_irrigation,$row->remarque_bet_besoin_eau,$row->remarques_sup_sepre,$row->avis_sepre,$row->date_avis_sepre,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->servitude,$row->nature_cours_eau,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autre_autorisation,$row->remarque_bet_protection_inondations,$row->remarque_sup_sgdph,$row->avis_sgdph,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->superficie_bv,$row->amenagement_propose,$row->avis_abht_amenagement,$row->remarque_sup_stah,$row->avis_stah,$row->date_avis_stah,$row->valide_par_stah,$row->approuve_par_stah,$row->volume_eau_usee,$row->mode_assainissement,$row->reutilisation_qeu,$row->reutilisation_niveau_traitement,$row->niveau_piezometrique,$row->date_niveau_piezometrique,$row->piezometre_x,$row->piezometre_y,$row->traitement_boue,$row->remarque_bet_assainissement,$row->remarque_sup_sqe,$row->avis_sqe,$row->date_avis_sqe,$row->valide_par_sqe,$row->approuve_par_sqe,$row->fond_dossier,$row->geom,$row->dates_commissions,$row->categories,$row->surface_batie,$row->autorisation_creusement_date,$row->autorisation_creusement_numero,$row->autorisation_prelevement_date,$row->autorisation_prelevement_numero,$row->autorisation_deversement_date,$row->autorisation_deversement_numero,$row->autorisation_occupation_dph_date,$row->autorisation_occupation_dph_numero,$row->type_dossier,$row->etatdossier);	
		}
		else{
			echo "Problème ";
			return null;
		}
 	}

	function findById1($id)
 	{
		$st =$this->db->prepare('select gid,numero_dossier,numero_archive,date_arrivee_abht,date_arrivee_bet,commune,province,douar_localite,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,fond_dossier,st_astext(geom) as geom,dates_commissions,categories,surface_batie,type_dossier,etatdossier,sepre,sqe,stah,sgdph,payement,date_payement,montant_payer from prj_inv.prj_invest where gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
 	}
    
	 
 	
	
 	function update($prj)
 	{
 	 	$st =$this->db->prepare('update prj_inv.prj_invest set numero_dossier=?,numero_archive=?,date_arrivee_abht=?,date_arrivee_bet=?,commune=?,province=?,douar_localite=?,maitre_ouvrage=?,intitule_projet=?,architecte=?,titre_foncier=?,superficie=?,type_projet=?,fond_dossier=?,geom=?,dates_commissions=?,categories=?,surface_batie=?,type_dossier=?,etatdossier=?,sepre=?,sqe=?,stah=?,sgdph=?,payement=?,date_payement=?,montant_payer=? where gid=?');
	 	if ($st->execute(array($prj->getnum_oss(),$prj->getnum_archv(),$prj->getdate_arr_abht(),$prj->getdate_arr_bet(),$prj->getcom(),$prj->getprovince(),$prj->getdouar_loc(),$prj->getmaitre_ouv(),$prj->getintitule_pr(),$prj->getarchitecte(),$prj->gettitre_foncier(),$prj->getsupf(),$prj->gettype_projet(),$prj->getfond_doss(),$prj->getgeom(),$prj->getdate_comm(),$prj->getcatg(),$prj->getsurf_bat(),$prj->gettype_doss(),$prj->getetat_dossier(),$prj->getsepre(),$prj->getsqe(),$prj->getstah(),$prj->getsgdph(),$prj->getpayement(),$prj->getdate_payement(),$prj->getmontant_payer(),$prj->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($prj)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.prj_invest where gid=?');
	 	if ($st->execute(array($prj->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	//nombre de dossier en generale 
	function nombre(){
		$st =	$this->db->prepare('select count(*) from prj_inv.prj_invest');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets non payé
	function projnonpaye(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.payement from prj_inv.prj_invest inv where inv.payement=false");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets payé
	function projpaye(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.payement from prj_inv.prj_invest inv where inv.payement=true");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection nombre de projet payé 
	function nbpaye(){
		$st =	$this->db->prepare("select count(*) from prj_inv.prj_invest inv where inv.payement=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection nombre de projet non payé 
	function nbnonpaye(){
		$st =	$this->db->prepare("select count(*) from prj_inv.prj_invest inv where inv.payement=false");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection dans une charte des projets avec le payement 
	function chartpay(){
		$st =	$this->db->prepare("select count(*), payement from prj_inv.prj_invest inv group by payement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivee au BET
	function dureedayprj(){
		$st =	$this->db->prepare("select gid,numero_dossier,numero_archive,date_arrivee_bet,commune,province,maitre_ouvrage,intitule_projet, DATE_PART('day', Now() - date_arrivee_bet) AS duree from prj_inv.prj_invest");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}


    // selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier
	function dureedayetatprj(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
    

    // selection des projets avec une duree de mois de la date d'arrivée au BET 
	function dureemoisprj(){
		$st =	$this->db->prepare("select (DATE_PART('year', Now()) - DATE_PART('year', date_arrivee_bet)) * 12 + (DATE_PART('month', Now()) - DATE_PART('month', date_arrivee_bet))as mois ,gid,numero_dossier,numero_archive,date_arrivee_bet,commune,province,maitre_ouvrage,intitule_projet from prj_inv.prj_invest");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection des nombre projets avec chaque mois et l'année
	function nb_prj_by_moi_annee(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM date_arrivee_bet)as mois, EXTRACT(Year FROM date_arrivee_bet) as annee  from prj_inv.prj_invest group by mois,annee");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection les nombres projets avec chaque mois et année et etat dossier
	function nb_prj_by_m_a_etat(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM inv.date_arrivee_bet)as mois,v.etatdossier ,EXTRACT(Year FROM inv.date_arrivee_bet) as annee from prj_inv.prj_invest inv , prj_inv.ls_etat_dossier v where inv.etatdossier=v.id group by mois,annee,v.etatdossier");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier moin de 10j 
	function dureedayetatprj10(){
		$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 10");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier entre 10 et 30 
	function dureedayetatprj30(){
		$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 10 and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier plus 30j 
	function dureedayetatprjplus30(){
		$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours]
	function dureechartprj10(){
		$st =	$this->db->prepare("select count(*) as number1 from prj_inv.prj_invest where DATE_PART('day', Now() - date_arrivee_bet) < 10 and etatdossier=1");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours]
	function dureechartprj10_30(){
		$st =	$this->db->prepare("select count(*) as number2 from prj_inv.prj_invest where DATE_PART('day', Now() - date_arrivee_bet) >= 10 and DATE_PART('day', Now() - date_arrivee_bet)<=30 and etatdossier=1");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours]
	function dureechartprj30(){
		$st =	$this->db->prepare("select count(*) as number3 from prj_inv.prj_invest where DATE_PART('day', Now() - date_arrivee_bet) > 30 and etatdossier=1");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours][sepre]
	function dureechartprj10_sepre(){
		$st =	$this->db->prepare("select count(*) as number1 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) < 10 and etatdossier=1 and sepre=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours][sepre]
	function dureechartprj10_30_sepre(){
		$st =	$this->db->prepare("select count(*) as number2 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) >= 10 
		and DATE_PART('day', Now() - date_arrivee_bet)<=30 
		and etatdossier=1 and sepre=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours][sepre]
	function dureechartprj30_sepre(){
		$st =	$this->db->prepare("select count(*) as number3 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) > 30 
		and etatdossier=1 and sepre=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours][sqe]
	function dureechartprj10_sqe(){
		$st =	$this->db->prepare("select count(*) as number1 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) < 10 and etatdossier=1 and sqe=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours][sqe]
	function dureechartprj10_30_sqe(){
		$st =	$this->db->prepare("select count(*) as number2 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) >= 10 
		and DATE_PART('day', Now() - date_arrivee_bet)<=30 
		and etatdossier=1 and sqe=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours][sqe]
	function dureechartprj30_sqe(){
		$st =	$this->db->prepare("select count(*) as number3 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) > 30 
		and etatdossier=1 and sqe=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours][stah]
	function dureechartprj10_stah(){
		$st =	$this->db->prepare("select count(*) as number1 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) < 10 and etatdossier=1 and stah=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours][stah]
	function dureechartprj10_30_stah(){
		$st =	$this->db->prepare("select count(*) as number2 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) >= 10 
		and DATE_PART('day', Now() - date_arrivee_bet)<=30 
		and etatdossier=1 and stah=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours][stah]
	function dureechartprj30_stah(){
		$st =	$this->db->prepare("select count(*) as number3 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) > 30 
		and etatdossier=1 and stah=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours][sgdph]
	function dureechartprj10_sgdph(){
		$st =	$this->db->prepare("select count(*) as number1 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) < 10 and etatdossier=1 and sgdph=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours][sgdph]
	function dureechartprj10_30_sgdph(){
		$st =	$this->db->prepare("select count(*) as number2 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) >= 10 
		and DATE_PART('day', Now() - date_arrivee_bet)<=30 
		and etatdossier=1 and sgdph=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours][sgdph]
	function dureechartprj30_sgdph(){
		$st =	$this->db->prepare("select count(*) as number3 
		from prj_inv.prj_invest 
		where DATE_PART('day', Now() - date_arrivee_bet) > 30 
		and etatdossier=1 and sgdph=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}




	//selection des projets sur l'espace 
    function geoprojet(){
		$st =	$this->db->prepare("
		SELECT prj.gid, prj.numero_dossier, prj.numero_archive, prj.date_arrivee_abht, prj.date_arrivee_bet, prj.commune, prj.province, prj.douar_localite, prj.maitre_ouvrage, prj.intitule_projet, prj.architecte, prj.titre_foncier, prj.superficie, typeprj.type_projet, prj.payement, prj.date_payement, prj.montant_payer, prj.fond_dossier, ST_AsGeoJSON(prj.geom) as geojson, prj.dates_commissions, cat.categorie, prj.surface_batie, typedoss.type_dossier, etat.etatdossier, prj.sepre, prj.stah, prj.sqe, prj.sgdph
			FROM prj_inv.prj_invest prj
				inner join prj_inv.ls_etat_dossier etat on etat.id=prj.etatdossier
				inner join prj_inv.ls_prj_categorie cat on cat.id=prj.categories
				inner join prj_inv.ls_prj_type typeprj on typeprj.id=prj.type_projet
				inner join prj_inv.ls_prj_type_dossier typedoss on typedoss.id=prj.type_dossier");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
	// ST_AsGeoJSON(geom) as geojson
	

	//selection des nombre de projet avec leur jour et leur moi et annee de la dernière semaine 
	function number_lastweek(){
		$st =	$this->db->prepare("select count(*) as noon,date_arrivee_bet,EXTRACT(dow from date_arrivee_bet)as daye from prj_inv.prj_invest
		where etatdossier = 1 
		group by daye,date_arrivee_bet 
		having ( date_arrivee_bet >= NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-7
			AND date_arrivee_bet <  NOW()::DATE-EXTRACT(DOW from NOW())::INTEGER
			  ) ORDER BY daye ");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection des nombre de projet avec leur moi et annee [etatdossier=2 ]
	function number_prj_ann_mois_nouveau(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM date_arrivee_bet)as mois,EXTRACT(Year FROM date_arrivee_bet) as annee
		from prj_inv.prj_invest
		group by mois,annee
		order by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection des nombre de projet avec leur moi et annee [etatdossier=3 ]
	function number_prj_ann_mois_cloture(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM date_arrivee_bet)as mois,EXTRACT(Year FROM date_arrivee_bet) as annee
		from prj_inv.prj_invest
		where etatdossier=3
		group by mois,annee
		order by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection des nombre de projet avec annee [etatdossier=2 ]
	function number_prj_ann_nouveau(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(Year FROM date_arrivee_bet) as annee from prj_inv.prj_invest where etatdossier=2 group by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	
	//selection des nombre de projet avec annee [etatdossier=3 ]
	function number_prj_ann_cloture(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(Year FROM date_arrivee_bet) as annee from prj_inv.prj_invest where etatdossier=3 group by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier moin de 10j 
	function dureedayetatprj10_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and v.etatdossier='Nouveau dossier'and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 10");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier entre 10 et 30 
	function dureedayetatprj30_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 10  and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 30 and v.etatdossier='Nouveau dossier'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier plus 30j 
	function dureedayetatprjplus30_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 30 and v.etatdossier='Nouveau dossier'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}


	//selection de la [duree] d'un projet avec son [gid]
	function dureeprj($id){
		$st =	$this->db->prepare("select gid,DATE_PART('day', Now() - date_arrivee_bet) AS duree from prj_inv.prj_invest where gid=?");
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
		else{
			echo "Problème ";
			return null;
		}
	}

	//selection des nombre de sepre by gid

	function nombre_sepre($id){
		$st =	$this->db->prepare('select count(sepre.id_sepre),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sepre sepre on prj.gid=sepre.id_prj where prj.gid=? group by prj.gid');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}


	//selection des nombre de sepre 

	function nombre_sepreall(){
		$st =	$this->db->prepare('select count(sepre.id_sepre),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sepre sepre on prj.gid=sepre.id_prj  group by prj.gid');
		if ($st->execute()) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection des nombre de sepre by gid

	function nombre_stah($id){
		$st =	$this->db->prepare('select count(stah.id_stah),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_stah stah  on prj.gid=stah.id_prj where prj.gid=? group by prj.gid');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}
	
    
    //selection des nombre de stah 

	function nombre_stahall(){
		$st =	$this->db->prepare('select count(stah.id_stah),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_stah stah on prj.gid=stah.id_prj group by prj.gid');
		if ($st->execute()) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection des nombre de sgdph by gid

	function nombre_sgdph($id){
		$st =	$this->db->prepare('select count(sgdph.id_sgdph),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sgdph sgdph on prj.gid=sgdph.id_prj where prj.gid=? group by prj.gid');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection des nombre de sgdph 

	function nombre_sgdphall(){
		$st =	$this->db->prepare('select count(sgdph.id_sgdph),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sgdph sgdph on prj.gid=sgdph.id_prj group by prj.gid ');
		if ($st->execute()) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}


	//selection des nombre de seq by gid

	function nombre_sqe($id){
		$st =	$this->db->prepare('select count(sqe.id_sqe),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sqe sqe on prj.gid=sqe.id_prj where prj.gid=? group by prj.gid');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection des nombre de sqe

	function nombre_sqeall(){
		$st =	$this->db->prepare('select count(sqe.id_sqe),prj.* from prj_inv.prj_invest prj inner join prj_inv.avis_sqe sqe on prj.gid=sqe.id_prj group by prj.gid');
		if ($st->execute()) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	function updatesepre($a)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET sepre=true WHERE gid=:gid');
	 	if ($st->execute(array(':gid'=>$a)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function updatesqe($a)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET sqe=true WHERE gid=:gid');
	 	if ($st->execute(array(':gid'=>$a)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function updatestah($a)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET stah=true WHERE gid=:gid');
	 	if ($st->execute(array(':gid'=>$a)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	function updatesgdph($a)
 	{
 	 	$st =$this->db->prepare('UPDATE prj_inv.prj_invest SET sgdph=true WHERE gid=:gid');
	 	if ($st->execute(array(':gid'=>$a)))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}

	 function affectationnon(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.prj_invest where sepre=false and stah=false and sqe=false and stah=false and sgdph=false");
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}



	function affectation(){
		$st =	$this->db->prepare("SELECT count(*) FROM prj_inv.prj_invest where sepre=false or stah=false or sqe=false or stah=false or sgdph=false");
	 	if ($st->execute()) {
	 	 	return $st->fetchAll();
	 	}
	 	else{
	 	 	return null;
	 	}
	}

	function dureechartprj1030geom(){
		$st =$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph,ST_AsGeoJSON(geom) as geojson 
		from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v
		where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 10 
		and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 30 and inv.etatdossier=1");
		 if ($st->execute()) {
				  return $st->fetchAll();
			 }
			  else{
				  return null;
			  }
	}

	function dureedayetatprjplus30geom(){
		$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph,ST_AsGeoJSON(geom) as geojson  from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 30 and inv.etatdossier=1");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours]
	function dureedayetatprj10geom(){
		$st =	$this->db->prepare("select inv.gid,inv.date_arrivee_bet,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree ,inv.sepre,inv.stah,inv.sqe,inv.sgdph,ST_AsGeoJSON(geom) as geojson from prj_inv.prj_invest inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 10 and inv.etatdossier=1");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	function findBynum($id)
 	{
		$st =$this->db->prepare('select gid,numero_dossier,numero_archive,date_arrivee_abht,date_arrivee_bet,commune,province,douar_localite,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,fond_dossier,ST_AsGeoJSON(geom) as geojson,dates_commissions,categories,surface_batie,type_dossier,etatdossier,sepre,sqe,stah,sgdph,payement,date_payement,montant_payer 
		from prj_inv.prj_invest where numero_dossier=?');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row;		
		}
		else{
			echo "Problème";
			return null;
		}
 	}

	


	

	







}







// $b = new OrigineAep_Service();
// $a= new OrigineAep(7,"OrigineAep1");
// $bb=$b->add($a);

// $b = new Projet_Service();
// $bb= $b->nombre();
// foreach($bb as $row){
// 	echo $row[0];
// }

// $b = new Projet_Service();
// $bb = $b->findById(32);

// echo $bb->getid_pr();


// foreach ($bb as $row) {
// 	$data[] = array(
// 	   "id"=>$row['gid'],
	   
// 	);
//  }
 
// $response = array(
//     "aaData" => $data
//  );

// echo print_r($response);

// $b = new Projet_Service();
// $bb = $b->projencours();

// $data = array();

// foreach ($bb as $row) {
//    $data[] = array(
// 	  "id"=>$row['gid'],
// 	  "numero_dossier"=>$row['numero_dossier'],
// 	  "numero_archive"=>$row['numero_archive'],
// 	  "date_arrivee_abht"=>$row['date_arrivee_abht']
//    );
// }

// // Response
// $response = array(
//    "aaData" => $data
// );

// echo json_encode($response);


// $b = new Projet_Service();
// $a= new ProjetInv(1002,'DA2318','05-03-2022','15-03-2022','marrakech',1,'maitre_ouvrage','intitule_projet','archit','titrefoncier','superficie',1,1,'MULTIPOLYGON(((-7.913246 31.651226,-7.910199 31.651299,-7.910542 31.649619,-7.91213 31.649472,-7.91316 31.649472,-7.913761 31.650386,-7.913246 31.651226)))');
// $bb=$b->add($a);


 