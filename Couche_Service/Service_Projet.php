<?php 
/**
* OUMAIMA SABI
* DATE:21/02/2022
*/

require_once 'Connexion.php';
require_once '../Couche_metier/Prj_invest_Classe.php';
require_once 'Service_etat.php';

class Projet_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($prj)
 	{
 	 	$st =	$this->db->prepare('insert into prj_inv.projets_investissement (gid,numero_dossier,date_arrivee_abht,date_arrivee_bet,commune,province,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,etatdossier,geom) values (?,?,?,?,?,?,?,?,?,?,?,?,?,ST_GeomFromText(?))');
 	 	if ($st->execute(array($prj->getid_pr(),
		  $prj->getnum_oss(),
		  $prj->getdate_arr_abht(),
		  $prj->getdate_arr_bet(),
		  $prj->getcom(),
		  $prj->getprovince(),
		  $prj->getmaitre_ouv(),
		  $prj->getintitule_pr(),
		  $prj->getarchitecte(),
		  $prj->gettitre_foncier(),
		  $prj->getsupf(),
		  $prj->gettype_projet(),
		  $prj->getetat_dossier(),
		  $prj->getgeom()))) 
		{
			
 	 		return true;
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('select gid,numero_dossier,numero_archive,commune,province,maitre_ouvrage,intitule_projet from prj_inv.projets_investissement');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select inv.gid,inv.numero_dossier,inv.date_arrivee_abht,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.architecte,inv.titre_foncier,inv.superficie,inv.type_projet,inv.etatdossier,inv.geom  from prj_inv.projets_investissement inv where inv.gid=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			if(!empty($row)){
				return new ProjetInv($row->gid,$row->numero_dossier,$row->date_arrivee_abht,$row->date_arrivee_bet,$row->commune,$row->province,$row->maitre_ouvrage,$row->intitule_projet,$row->architecte,$row->titre_foncier,$row->superficie,$row->type_projet,$row->etatdossier,$row->geom);	
			}
			elseif(empty($row)){
				return new ProjetInv('0','0','0','0','0','0','0','0','0','0','0','0','0','0');
			}
			// return new ProjetInv($row->gid,$row->numero_dossier,$row->numero_archive,$row->date_arrivee_abht,$row->date_arrivee_bet,$row->commune,$row->province,$row->douar_localite,$row->maitre_ouvrage,$row->intitule_projet,$row->architecte,$row->titre_foncier,$row->superficie,$row->type_projet,$row->payement,$row->date_payement,$row->montant_payer,$row->remarques_generales_bet,$row->avis_abht,$row->date_avis_abht,$row->etabli_par,$row->valide_par,$row->approuve_par,$row->origine_aep,$row->origine_autre,$row->besoin_eau_domestique,$row->besoin_eau_irrigation,$row->remarque_bet_besoin_eau,$row->remarques_sup_sepre,$row->avis_sepre,$row->date_avis_sepre,$row->type_cours_eau,$row->nom_cours_eau,$row->crue_100,$row->servitude,$row->nature_cours_eau,$row->origine_aep_puits_x,$row->origine_aep_puits_y,$row->autorisation_pf_creusement,$row->autorisation_pf_prelevement,$row->autorisation_deversement,$row->autorisation_occupation_dph,$row->autre_autorisation,$row->remarque_bet_protection_inondations,$row->remarque_sup_sgdph,$row->avis_sgdph,$row->date_avis_sgdph,$row->valide_par_sgdph,$row->approuve_par_sgdph,$row->superficie_bv,$row->amenagement_propose,$row->avis_abht_amenagement,$row->remarque_sup_stah,$row->avis_stah,$row->date_avis_stah,$row->valide_par_stah,$row->approuve_par_stah,$row->volume_eau_usee,$row->mode_assainissement,$row->reutilisation_qeu,$row->reutilisation_niveau_traitement,$row->niveau_piezometrique,$row->date_niveau_piezometrique,$row->piezometre_x,$row->piezometre_y,$row->traitement_boue,$row->remarque_bet_assainissement,$row->remarque_sup_sqe,$row->avis_sqe,$row->date_avis_sqe,$row->valide_par_sqe,$row->approuve_par_sqe,$row->fond_dossier,$row->geom,$row->dates_commissions,$row->categories,$row->surface_batie,$row->autorisation_creusement_date,$row->autorisation_creusement_numero,$row->autorisation_prelevement_date,$row->autorisation_prelevement_numero,$row->autorisation_deversement_date,$row->autorisation_deversement_numero,$row->autorisation_occupation_dph_date,$row->autorisation_occupation_dph_numero,$row->type_dossier,$row->etatdossier);	
		}
		else{
			echo "Problème ";
			return null;
		}
 	}
    
	 
 	
	
 	function update($prj)
 	{
		
 	 	$st =$this->db->prepare('update prj_inv.projets_investissement set numero_dossier=?,date_arrivee_abht=?,date_arrivee_bet=?,commune=?,province=?,maitre_ouvrage=?,intitule_projet=?,architecte=?,titre_foncier=?,superficie=?,type_projet=?,etatdossier=?,geom=? where gid=?');
	 	if ($st->execute(array($prj->getnum_oss(),$prj->getdate_arr_abht(),$prj->getdate_arr_bet(),$prj->getcom(),$prj->getprovince(),$prj->getmaitre_ouv(),$prj->getintitule_pr(),$prj->getarchitecte(),$prj->gettitre_foncier(),$prj->getsupf(),$prj->gettype_projet(),$prj->getetat_dossier(),$prj->getgeom(),$prj->getid_pr())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}
 	function supprimer($prj)
 	{

	 	$st =	$this->db->prepare('delete from prj_inv.projets_investissement where gid=?');
	 	if ($st->execute(array($prj->getid_pr()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	//nombre de dossier en generale 
	function nombre(){
		$st =	$this->db->prepare('select count(*) from prj_inv.projets_investissement');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets non payé
	function projnonpaye(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.payement from prj_inv.projets_investissement inv where inv.payement=false");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets payé
	function projpaye(){

		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,inv.payement from prj_inv.projets_investissement inv where inv.payement=true");
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection nombre de projet payé 
	function nbpaye(){
		$st =	$this->db->prepare("select count(*) from prj_inv.projets_investissement inv where inv.payement=true");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection nombre de projet non payé 
	function nbnonpaye(){
		$st =	$this->db->prepare("select count(*) from prj_inv.projets_investissement inv where inv.payement=false");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection dans une charte des projets avec le payement 
	function chartpay(){
		$st =	$this->db->prepare("select count(*), payement from prj_inv.projets_investissement inv group by payement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivee au BET
	function dureedayprj(){
		$st =	$this->db->prepare("select gid,numero_dossier,numero_archive,date_arrivee_bet,commune,province,maitre_ouvrage,intitule_projet, DATE_PART('day', Now() - date_arrivee_bet) AS duree from prj_inv.projets_investissement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}


    // selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier
	function dureedayetatprj(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}
    

    // selection des projets avec une duree de mois de la date d'arrivée au BET 
	function dureemoisprj(){
		$st =	$this->db->prepare("select (DATE_PART('year', Now()) - DATE_PART('year', date_arrivee_bet)) * 12 + (DATE_PART('month', Now()) - DATE_PART('month', date_arrivee_bet))as mois ,gid,numero_dossier,numero_archive,date_arrivee_bet,commune,province,maitre_ouvrage,intitule_projet from prj_inv.projets_investissement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	// selection des nombre projets avec chaque mois et l'année
	function nb_prj_by_moi_annee(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM date_arrivee_bet)as mois, EXTRACT(Year FROM date_arrivee_bet) as annee  from prj_inv.projets_investissement group by mois,annee");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection les nombres projets avec chaque mois et année et etat dossier
	function nb_prj_by_m_a_etat(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(MONTH FROM inv.date_arrivee_bet)as mois,v.etatdossier ,EXTRACT(Year FROM inv.date_arrivee_bet) as annee from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier v where inv.etatdossier=v.id group by mois,annee,v.etatdossier");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier moin de 10j 
	function dureedayetatprj10(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 10");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier entre 10 et 30 
	function dureedayetatprj30(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 10 and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier plus 30j 
	function dureedayetatprjplus30(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivé au BET [moins 10jours]
	function dureechartprj10(){
		$st =	$this->db->prepare("select count(*) as number1 from prj_inv.projets_investissement where DATE_PART('day', Now() - date_arrivee_bet) < 10");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [entre 10jours et 30 jours]
	function dureechartprj10_30(){
		$st =	$this->db->prepare("select count(*) as number2 from prj_inv.projets_investissement where DATE_PART('day', Now() - date_arrivee_bet) >= 10 and DATE_PART('day', Now() - date_arrivee_bet)<=30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de nombre de projets avec une durée de jour de la date d'arrivée au BET [30 jours]
	function dureechartprj30(){
		$st =	$this->db->prepare("select count(*) as number3 from prj_inv.projets_investissement where DATE_PART('day', Now() - date_arrivee_bet) > 30");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets sur l'espace 
    function geoprojet(){
		$st =	$this->db->prepare("select gid,numero_dossier,date_arrivee_abht,date_arrivee_bet,commune,province,maitre_ouvrage,architecte,intitule_projet,superficie,ST_AsGeoJSON(geom) as geojson from prj_inv.projets_investissement");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection de la [duree] d'un projet avec son [gid]
	function dureeprj($id){
		$st =	$this->db->prepare("select gid,numero_dossier,date_arrivee_abht,DATE_PART('day', Now() - date_arrivee_bet) AS duree,commune,province,maitre_ouvrage,intitule_projet,architecte,titre_foncier,superficie,type_projet,payement,ST_AsGeoJSON(geom) as geojson  from prj_inv.projets_investissement where gid=?");
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			return new ProjetInv($row->gid,$row->numero_dossier,$row->date_arrivee_abht,$row->duree,$row->commune,$row->province,$row->maitre_ouvrage,$row->intitule_projet,$row->architecte,$row->titre_foncier,$row->superficie,$row->type_projet,$row->payement,$row->geojson);
		}
		else{
			echo "Problème ";
			return null;
		}
	}

	//selection des nombre de projet avec leur jour et leur moi et annee de la dernière semaine 
	function number_lastweek(){
		$st =	$this->db->prepare("select count(*) as noon,date_arrivee_bet,EXTRACT(dow from date_arrivee_bet)as daye from prj_inv.projets_investissement 
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
		from prj_inv.projets_investissement 
		where etatdossier=2
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
		from prj_inv.projets_investissement 
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
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(Year FROM date_arrivee_bet) as annee from prj_inv.projets_investissement where etatdossier=2 group by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	
	//selection des nombre de projet avec annee [etatdossier=3 ]
	function number_prj_ann_cloture(){
		$st =	$this->db->prepare("SELECT count(*),EXTRACT(Year FROM date_arrivee_bet) as annee from prj_inv.projets_investissement where etatdossier=3 group by annee");
		if ($st->execute()) {
			return $st->fetchAll();
	   }
		else{
			return null;
		}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier moin de 10j 
	function dureedayetatprj10_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and v.etatdossier='Nouveau dossier'and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 10");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier entre 10 et 30 
	function dureedayetatprj30_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 10  and DATE_PART('day', Now() - inv.date_arrivee_bet) <= 30 and v.etatdossier='Nouveau dossier'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection des projets avec une duree de jour de la date d'arrivée au BET avec leur etatdossier plus 30j 
	function dureedayetatprjplus30_new(){
		$st =	$this->db->prepare("select inv.gid,inv.numero_dossier,inv.numero_archive,inv.date_arrivee_bet,inv.commune,inv.province,inv.maitre_ouvrage,inv.intitule_projet,v.etatdossier,inv.avis_sepre,inv.avis_sqe,inv.avis_sgdph,inv.avis_stah,inv.avis_abht, DATE_PART('day', Now() - inv.date_arrivee_bet) AS duree from prj_inv.projets_investissement inv,prj_inv.ls_etat_dossier v where inv.etatdossier=v.id and DATE_PART('day', Now() - inv.date_arrivee_bet) > 30 and v.etatdossier='Nouveau dossier'");
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
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


 