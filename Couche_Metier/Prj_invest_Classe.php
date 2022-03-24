<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/
class ProjetInv
{
	// private $id_pr,$num_oss,$num_archv,$date_arr_abht,$date_arr_bet,$com,$province,$douar_loc,$maitre_ouv,$intitule_pr,$architecte,$titre_foncier,$supf,$type_projet,$pay,$date_pay,$mont_pay,$rem_gen_bet,$avis_abht,$date_avis_abht,$etabli_par,$valide_par,$approuve_par,$origine_AEP,$origine_autre,$bes_eau_dom,$bes_eau_irrig,$rem_bet_bes_eau,$rem_sup_sepre,$avis_sepre,$date_avis_sepre,$type_ceau,$nom_ceau,$crue_100,$serv,$nat_cour_eau,$org_aep_puitx,$org_aep_puity,$aut_pf_creus,$aut_pf_prel,$aut_deve,$aut_occp_dph,$autre_aut,$rem_bet_prot_inond,$rem_sup_sgdph,$avis_sgdph,$date_avis_sgdph,$valide_par_sgdph,$appr_par_sgdph,$super_bv,$amenag_prop,$avis_abht_amng,$rem_sup_stah,$avis_stah,$date_avis_stah,$valide_par_stah,$app_par_stah,$volum_eau_use,$mode_assain,$reutil_qeu,$reutil_niv_trait,$niv_piezo,$date_niv_piezo,$piezo_x,$piezo_y,$trait_boue,$remq_bet_assain,$remq_sup_sqe,$avis_sqe,$date_avis_sqe,$valide_par_sqe,$appr_par_sqe,$fond_doss,$geom,$date_comm,$catg,$surf_bat,$aut_creus_date,$aut_creus_num,$aut_prelev_date,$aut_prelev_num,$aut_devers_date,$aut_devers_num,$aut_occup_dph_date,$aut_occup_dph_num,$type_doss,$etat_dossier;
	private $id_pr,$num_oss,$com,$province,$maitre_ouv,$intitule_pr,$date_arr_abht,$date_arr_bet,$architecte,$titre_foncier,$supf,$type_projet,$etat_dossier,$geom;
	function __construct($a,$b,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$tc,$cc)
	{
		$this->id_pr = $a;
		$this->num_oss= $b;
        $this->date_arr_abht=$d;
        $this->date_arr_bet=$e;
        $this->com=$f;
        $this->province=$g;
        $this->maitre_ouv=$h;
        $this->intitule_pr=$i;
        $this->architecte=$j;
        $this->titre_foncier=$k;
        $this->supf=$l;
        $this->type_projet=$m;
		$this->geom=$cc;
		$this->etat_dossier=$tc;
		// $this->num_archv =$c;
        // $this->douar_loc=$h;
        // $this->pay=$n;      
        // $this->date_pay=$p; 
        // $this->mont_pay=$q; 
        // $this->rem_gen_bet=$o;
        // $this->rem_sup_sepre=$ca;
        // $this->avis_sepre=$da;
        // $this->date_avis_sepre=$ea;
        // $this->type_ceau=$fa;
        // $this->nom_ceau=$ga;
        // $this->crue_100=$ha;
        // $this->serv=$ia;
        // $this->nat_cour_eau=$ja;
        // $this->org_aep_puitx=$ka;
        // $this->org_aep_puity=$la;
        // $this->aut_pf_creus=$ma;
        // $this->aut_pf_prel=$na;
        // $this->aut_deve=$oa;
        // $this->aut_occp_dph=$pa;
        // $this->autre_aut=$qa;
        // $this->rem_bet_prot_inond=$ra;
        // $this->rem_sup_sgdph=$sa;
        // $this->avis_sgdph=$ta;
        // $this->date_avis_sgdph=$ua;
        // $this->valide_par_sgdph=$va;
        // $this->appr_par_sgdph=$wa;
        // $this->super_bv=$xa;
        // $this->amenag_prop=$ya;
        // $this->avis_abht_amng=$bb;
        // $this->rem_sup_stah=$cb;
        // $this->avis_stah=$db;
        // $this->date_avis_stah=$eb;
        // $this->valide_par_stah=$fb;
        // $this->app_par_stah=$gb;
        // $this->volum_eau_use=$kb;
        // $this->mode_assain=$lb;
        // $this->reutil_qeu=$mb;
        // $this->reutil_niv_trait=$nb;
        // $this->niv_piezo=$pb;
        // $this->date_niv_piezo=$qb;
        // $this->piezo_x=$rb;
        // $this->piezo_y=$sb;
        // $this->trait_boue=$tb;
        // $this->remq_bet_assain=$ub;
        // $this->remq_sup_sqe=$vb;
        // $this->avis_sqe=$wb;
        // $this->date_avis_sqe=$xb;
        // $this->valide_par_sqe=$vld;
        // $this->appr_par_sqe=$ac;
        // $this->fond_doss=$bc;
        // $this->date_comm=$dc;
        // $this->catg=$ec;
        // $this->surf_bat=$fc;
        // $this->aut_creus_date=$gc;
        // $this->aut_creus_num=$kc;
        // $this->aut_prelev_date=$lc;
        // $this->aut_prelev_num=$mc;
        // $this->aut_devers_date=$nc;
        // $this->aut_devers_num=$pc;
        // $this->aut_occup_dph_date=$qc;
        // $this->aut_occup_dph_num=$rc;
        // $this->type_doss=$sc;   
	}
	function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
	}
    function getnum_oss(){
		return $this->num_oss;
	}
	function setnum_oss($a){
		$this->num_oss=$a;
	}
    function getdate_arr_abht(){
		return $this->date_arr_abht;
	}
	function setdate_arr_abht($a){
		$this->date_arr_abht=$a;
	}
    function getdate_arr_bet(){
		return $this->date_arr_bet;
	}
	function setdate_arr_bet($a){
		$this->date_arr_bet=$a;
	}
    function getcom(){
		return $this->com;
	}
	function setcom($a){
		$this->com=$a;
	}
    function getprovince(){
		return $this->province;
	}
	function setprovince($a){
		$this->province=$a;
	}
   
    function getmaitre_ouv(){
		return $this->maitre_ouv;
	}
	function setmaitre_ouv($a){
		$this->maitre_ouv=$a;
	}
    function getintitule_pr(){
		return $this->intitule_pr;
	}
	function setintitule_pr($a){
		$this->intitule_pr=$a;
	}
    function getarchitecte(){
		return $this->architecte;
	}
	function setarchitecte($a){
		$this->architecte=$a;
	}
    function gettitre_foncier(){
		return $this->titre_foncier;
	}
	function settitre_foncier($a){
		$this->titre_foncier=$a;
	}
    function getsupf(){
		return $this->supf;
	}
	function setsupf($a){
		$this->supf=$a;
	}
    function gettype_projet(){
		return $this->type_projet;
	}
	function settype_projet($a){
		$this->type_projet=$a;
	}
	function getetat_dossier(){
		return $this->etat_dossier;
	}
	function setetat_dossier($a){
		$this->etat_dossier=$a;
	}
	function getgeom(){
		return $this->geom;
	}
	function setgeom($a){
		$this->geom=$a;
	}
    // function getnum_archv (){
	// 	return $this->num_archv ;
	// }
	// function setnum_archv ($a){
	// 	$this->num_archv =$a;
	// }
	 // function getdouar_loc(){
	// 	return $this->douar_loc;
	// }
	// function setdouar_loc($a){
	// 	$this->douar_loc=$a;
	// }
    // function getpay(){
	// 	return $this->pay;
	// }
	// function setpay($a){
	// 	$this->pay=$a;
	// }
    // function getdate_pay(){
	// 	return $this->date_pay;
	// }
	// function setdate_pay($a){
	// 	$this->date_pay=$a;
	// }
    // function getmont_pay(){
	// 	return $this->mont_pay;
	// }
	// function setmont_pay($a){
	// 	$this->mont_pay=$a;
	// }
    // function getrem_gen_bet(){
	// 	return $this->rem_gen_bet;
	// }
	// function setrem_gen_bet($a){
	// 	$this->rem_gen_bet=$a;
	// }
    // function getavis_abht(){
	// 	return $this->avis_abht;
	// }
	// function setavis_abht($a){
	// 	$this->avis_abht=$a;
	// }
    // function getdate_avis_abht(){
	// 	return $this->date_avis_abht;
	// }
	// function setdate_avis_abht($a){
	// 	$this->date_avis_abht=$a;
	// }
    // function getetabli_par(){
	// 	return $this->etabli_par;
	// }
	// function setetabli_par($a){
	// 	$this->etabli_par=$a;
	// }
    // function getvalide_par(){
	// 	return $this->valide_par;
	// }
	// function setvalide_par($a){
	// 	$this->valide_par=$a;
	// }
    // function getapprouve_par(){
	// 	return $this->approuve_par;
	// }
	// function setapprouve_par($a){
	// 	$this->approuve_par=$a;
	// }
    // function getorigine_AEP(){
	// 	return $this->origine_AEP;
	// }
	// function setorigine_AEP($a){
	// 	$this->origine_AEP=$a;
	// }
    
    // function getorigine_autre(){
	// 	return $this->origine_autre;
	// }
	// function setorigine_autre($a){
	// 	$this->origine_autre=$a;
	// }

    // function getbes_eau_dom(){
	// 	return $this->bes_eau_dom;
	// }
	// function setbes_eau_dom($a){
	// 	$this->bes_eau_dom=$a;
	// }
    // function getbes_eau_irrig(){
	// 	return $this->bes_eau_irrig;
	// }
	// function setbes_eau_irrig($a){
	// 	$this->bes_eau_irrig=$a;
	// }
    // function getrem_bet_bes_eau(){
	// 	return $this->rem_bet_bes_eau;
	// }
	// function setrem_bet_bes_eau($a){
	// 	$this->rem_bet_bes_eau=$a;
	// }
    
	
    // function getrem_sup_sepre(){
	// 	return $this->rem_sup_sepre;
	// }
	// function setrem_sup_sepre($a){
	// 	$this->rem_sup_sepre=$a;
	// }
    // function getavis_sepre(){
	// 	return $this->avis_sepre;
	// }
	// function setavis_sepre($a){
	// 	$this->avis_sepre=$a;
	// }
    // function getdate_avis_sepre(){
	// 	return $this->date_avis_sepre;
	// }
	// function setdate_avis_sepre($a){
	// 	$this->date_avis_sepre=$a;
	// }
    // function gettype_ceau(){
	// 	return $this->type_ceau;
	// }
	// function settype_ceau($a){
	// 	$this->type_ceau=$a;
	// }
    // function getnom_ceau(){
	// 	return $this->nom_ceau;
	// }
	// function setnom_ceau($a){
	// 	$this->nom_ceau=$a;
	// }
    // function getcrue_100(){
	// 	return $this->crue_100;
	// }
	// function setcrue_100($a){
	// 	$this->crue_100=$a;
	// }
    // function getserv(){
	// 	return $this->serv;
	// }
	// function setserv($a){
	// 	$this->serv=$a;
	// }
    // function getnat_cour_eau(){
	// 	return $this->nat_cour_eau;
	// }
	// function setnat_cour_eau($a){
	// 	$this->nat_cour_eau=$a;
	// }
    // function getorg_aep_puitx(){
	// 	return $this->org_aep_puitx;
	// }
	// function setorg_aep_puitx($a){
	// 	$this->org_aep_puitx=$a;
	// }
    // function getorg_aep_puity(){
	// 	return $this->org_aep_puity;
	// }
	// function setorg_aep_puity($a){
	// 	$this->org_aep_puity=$a;
	// }
    // function getaut_pf_creus(){
	// 	return $this->aut_pf_creus;
	// }
	// function seaut_pf_creus($a){
	// 	$this->aut_pf_creus=$a;
	// }
    // function getaut_pf_prel(){
	// 	return $this->aut_pf_prel;
	// }
	// function setaut_pf_prel($a){
	// 	$this->aut_pf_prel=$a;
	// }
    // function getaut_deve(){
	// 	return $this->aut_deve;
	// }
	// function setaut_deve($a){
	// 	$this->aut_deve=$a;
	// }
    // function getaut_occp_dph(){
	// 	return $this->aut_occp_dph;
	// }
	// function setaut_occp_dph($a){
	// 	$this->aut_occp_dph=$a;
	// }
    // function getautre_aut(){
	// 	return $this->autre_aut;
	// }
	// function setautre_aut($a){
	// 	$this->autre_aut=$a;
	// }
    // function getrem_bet_prot_inond(){
	// 	return $this->rem_bet_prot_inond;
	// }
	// function setrem_bet_prot_inond($a){
	// 	$this->rem_bet_prot_inond=$a;
	// }
    // function getrem_sup_sgdph(){
	// 	return $this->rem_sup_sgdph;
	// }
	// function setrem_sup_sgdph($a){
	// 	$this->rem_sup_sgdph=$a;
	// }
    // function getavis_sgdph(){
	// 	return $this->avis_sgdph;
	// }
	// function setavis_sgdph($a){
	// 	$this->avis_sgdph=$a;
	// }
    // function getdate_avis_sgdph(){
	// 	return $this->date_avis_sgdph;
	// }
	// function setdate_avis_sgdph($a){
	// 	$this->date_avis_sgdph=$a;
	// }
    // function getvalide_par_sgdph(){
	// 	return $this->valide_par_sgdph;
	// }
	// function setvalide_par_sgdph($a){
	// 	$this->valide_par_sgdph=$a;
	// }
    // function getappr_par_sgdph(){
	// 	return $this->appr_par_sgdph;
	// }
	// function setappr_par_sgdph($a){
	// 	$this->appr_par_sgdph=$a;
	// }
    // function getsuper_bv(){
	// 	return $this->super_bv;
	// }
	// function setsuper_bv($a){
	// 	$this->super_bv=$a;
	// }
    // function getamenag_prop(){
	// 	return $this->amenag_prop;
	// }
	// function setamenag_prop($a){
	// 	$this->amenag_prop=$a;
	// }

    // function getavis_abht_amng(){
	// 	return $this->avis_abht_amng;
	// }
	// function setavis_abht_amng($a){
	// 	$this->avis_abht_amng=$a;
	// }
    // function getrem_sup_stah(){
	// 	return $this->rem_sup_stah;
	// }
	// function setrem_sup_stah($a){
	// 	$this->rem_sup_stah=$a;
	// }
    // function getavis_stah(){
	// 	return $this->avis_stah;
	// }
	// function setavis_stah($a){
	// 	$this->avis_stah=$a;
	// }
    // function getdate_avis_stah(){
	// 	return $this->date_avis_stah;
	// }
	// function setdate_avis_stah($a){
	// 	$this->date_avis_stah=$a;
	// }

    // function getvalide_par_stah(){
	// 	return $this->valide_par_stah;
	// }
	// function setvalide_par_stah($a){
	// 	$this->valide_par_stah=$a;
	// }
    // function getapp_par_stah(){
	// 	return $this->app_par_stah;
	// }
	// function setapp_par_stah($a){
	// 	$this->app_par_stah=$a;
	// }
    // function getvolum_eau_use(){
	// 	return $this->volum_eau_use;
	// }
	// function setvolum_eau_use($a){
	// 	$this->volum_eau_use=$a;
	// }

    // function getmode_assain(){
	// 	return $this->mode_assain;
	// }
	// function setmode_assain($a){
	// 	$this->mode_assain=$a;
	// }
    // function getreutil_qeu(){
	// 	return $this->reutil_qeu;
	// }
	// function setreutil_qeu($a){
	// 	$this->reutil_qeu=$a;
	// }
    // function getreutil_niv_trait(){
	// 	return $this->reutil_niv_trait;
	// }
	// function setreutil_niv_trait($a){
	// 	$this->reutil_niv_trait=$a;
	// }
    // function getniv_piezo(){
	// 	return $this->niv_piezo;
	// }
	// function setniv_piezo($a){
	// 	$this->niv_piezo=$a;
	// }
	// function getdate_niv_piezo(){
	// 	return $this->date_niv_piezo;
	// }
	// function setdate_niv_piezo($a){
	// 	$this->date_niv_piezo=$a;
	// }
    // function getpiezo_x(){
	// 	return $this->piezo_x;
	// }
	// function setpiezo_x($a){
	// 	$this->piezo_x=$a;
	// }
    // function getpiezo_y(){
	// 	return $this->piezo_y;
	// }
	// function setpiezo_y($a){
	// 	$this->piezo_y=$a;
	// }
    // function gettrait_boue(){
	// 	return $this->trait_boue;
	// }
	// function settrait_boue($a){
	// 	$this->trait_boue=$a;
	// }
    // function getremq_bet_assain(){
	// 	return $this->remq_bet_assain;
	// }
	// function setremq_bet_assain($a){
	// 	$this->remq_bet_assain=$a;
	// }
    // function getremq_sup_sqe(){
	// 	return $this->remq_sup_sqe;
	// }
	// function setremq_sup_sqe($a){
	// 	$this->remq_sup_sqe=$a;
	// }
    // function getavis_sqe(){
	// 	return $this->avis_sqe;
	// }
	// function setavis_sqe($a){
	// 	$this->avis_sqe=$a;
	// }
    // function getdate_avis_sqe(){
	// 	return $this->date_avis_sqe;
	// }
	// function setdate_avis_sqe($a){
	// 	$this->date_avis_sqe=$a;
	// }
    // function getvalide_par_sqe(){
	// 	return $this->valide_par_sqe;
	// }
	// function setvalide_par_sqe($a){
	// 	$this->valide_par_sqe=$a;
	// }
	// function getappr_par_sqe(){
	// 	return $this->appr_par_sqe;
	// }
	// function setappr_par_sqe($a){
	// 	$this->appr_par_sqe=$a;
	// }
	// function getfond_doss(){
	// 	return $this->fond_doss;
	// }
	// function settfond_doss($a){
	// 	$this->fond_doss=$a;
	// }

    
    // function getdate_comm(){
	// 	return $this->date_comm;
	// }
	// function setdate_comm($a){
	// 	$this->date_comm=$a;
	// }
    // function getcatg(){
	// 	return $this->catg;
	// }
	// function setcatg($a){
	// 	$this->catg=$a;
	// }
    // function getsurf_bat(){
	// 	return $this->surf_bat;
	// }
	// function setsurf_bat($a){
	// 	$this->surf_bat=$a;
	// }
    // function getaut_creus_date(){
	// 	return $this->aut_creus_date;
	// }
	// function setaut_creus_date($a){
	// 	$this->aut_creus_date=$a;
	// }
    // function getaut_creus_num(){
	// 	return $this->aut_creus_num;
	// }
	// function setaut_creus_num($a){
	// 	$this->aut_creus_num=$a;
	// }
	// function getaut_prelev_date(){
	// 	return $this->aut_prelev_date;
	// }
	// function setaut_prelev_date($a){
	// 	$this->aut_prelev_date=$a;
	// }
    // function getaut_prelev_num(){
	// 	return $this->aut_prelev_num;
	// }
	// function setaut_prelev_num($a){
	// 	$this->aut_prelev_num=$a;
	// }
    // function getaut_devers_date(){
	// 	return $this->aut_devers_date;
	// }
	// function setaut_devers_date($a){
	// 	$this->aut_devers_date=$a;
	// }
    // function getaut_devers_num(){
	// 	return $this->aut_devers_num;
	// }
	// function setaut_devers_num($a){
	// 	$this->aut_devers_num=$a;
	// }
    // function getaut_occup_dph_date(){
	// 	return $this->aut_occup_dph_date;
	// }
	// function setaut_occup_dph_date($a){
	// 	$this->aut_occup_dph_date=$a;
	// }
    // function getaut_occup_dph_num(){
	// 	return $this->aut_occup_dph_num;
	// }
	// function setaut_occup_dph_num($a){
	// 	$this->aut_occup_dph_num=$a;
	// }
    // function gettype_doss(){
	// 	return $this->type_doss;
	// }
	// function settype_doss($a){
	// 	$this->type_doss=$a;
	// }
    

}

// $proj = new ProjetInv(1,2,3,'12/03/2010','12/03/2010','tensiftelhaouz','haouz','local','oumaima','projet','oumaima','titre',12,'grandprojet','300dh','2j','12','rend','favorable','14/02/2013','oumaima','sabi','oumaima','aep','aep','eau','eauirrig','signé','pas signé','favorable','13/02/2012','eau','courbure','cours','servie','naturel','orgg','orgpuit','aut1','aut2','aut2d','autocc','aut_occp_dph','$autre_aut','$rem_bet_prot_inond','$rem_sup_sgdph','$avis_sgdph','date_avis_sgdph','valide_par_sgdph','appr_par_sgdph','super_bv','amenag_prop','avis_abht_amng','rem_sup_stah','avis_stah','date_avis_stah','valide_par_stah','app_par_stah','volum_eau_use','mode_assain','reutil_qeu','reutil_niv_trait','niv_piezo','date_niv_piezo','piezo_x','piezo_y','trait_boue','remq_bet_assain','remq_sup_sqe','avis_sqe','date_avis_sqe','valide_par_sqe','appr_par_sqe','fond_doss','geom','date_comm','catg','surf_bat','aut_creus_date','aut_creus_num','aut_prelev_date','aut_prelev_num','aut_devers_date','aut_devers_num','aut_occup_dph_date','aut_occup_dph_num','type_doss','etat_dossier');

// echo "L'avis est ' " . $proj->getid_pr();

?>