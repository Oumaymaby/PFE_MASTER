<?php
/**
* OUMAIMA SABI
* DATE:22/04/2022
*/
class ProjetInv
{
	private $id_pr,$num_oss,$com,$province,$maitre_ouv,$intitule_pr,$date_arr_abht,$date_arr_bet,$architecte,$titre_foncier,$supf,$type_projet,$etat_dossier,$geom,$douar_loc,$fond_doss,$date_comm,$catg,$surf_bat,$type_doss,$sepre,$sqe,$stah,$sgdph,$payement,$date_payement,$montant_payer;
	function __construct($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$ab)
	{
		$this->id_pr = $a;
		$this->num_oss= $b;
		$this->num_archv =$c;
        $this->date_arr_abht=$d;
        $this->date_arr_bet=$e;
        $this->com=$f;
        $this->province=$g;
		$this->douar_loc=$h;
        $this->maitre_ouv=$i;
        $this->intitule_pr=$j;
        $this->architecte=$k;
        $this->titre_foncier=$l;
        $this->supf=$m;
        $this->type_projet=$n;
		$this->fond_doss=$o;
		$this->geom=$p;
        $this->date_comm=$q;
        $this->catg=$r;
        $this->surf_bat=$s;
        $this->type_doss=$t;
		$this->etat_dossier=$u;
		$this->sepre=$v;
		$this->sqe=$w;
		$this->stah=$x;
		$this->sgdph=$y;  
		$this->payement=$z;
    	$this->date_payement=$aa;
    	$this->montant_payer=$ab; 
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
	function getnum_archv(){
		return $this->num_archv;
	}
	function setnum_archv($a){
		$this->num_archv=$a;
	}
	function getdouar_loc(){
		return $this->douar_loc;
	}
	function setdouar_loc($a){
		$this->douar_loc=$a;
	}
	function getdate_comm(){
		return $this->date_comm;
	}
	function setdate_comm($a){
		$this->date_comm=$a;
	}
	function getfond_doss(){
		return $this->fond_doss;
	}
	function setfond_doss($a){
		$this->fond_doss=$a;
	}
	function getcatg(){
		return $this->catg;
	}
	function setcatg($a){
		$this->catg=$a;
	}
	function getsurf_bat(){
		return $this->surf_bat;
	}
	function setsurf_bat($a){
		$this->surf_bat=$a;
	}
	function gettype_doss(){
		return $this->type_doss;
	}
	function settype_doss($a){
		$this->type_doss=$a;
	}
	function getsepre(){
		return $this->sepre;
	}
	function setsepre($a){
		$this->sepre=$a;
	}
	function getsqe(){
		return $this->sqe;
	}
	function setsqe($a){
		$this->sqe=$a;
	}
	function getstah(){
		return $this->stah;
	}
	function setstah($a){
		$this->stah=$a;
	}
	function getsgdph(){
		return $this->sgdph;
	}
	function setsgdph($a){
		$this->sgdph=$a;
	}
	function getpayement(){
		return $this->payement;
	}
	function setpayement($a){
		$this->payement=$a;
	}
	function getdate_payement(){
		return $this->date_payement;
	}
	function setdate_payement($a){
		$this->date_payement=$a;
	}
	function getmontant_payer(){
		return $this->montant_payer;
	}
	function setmontant_payer($a){
		$this->montant_payer=$a;
	}
    
}

// $proj = new ProjetInv(1,2,3,'12/03/2010','12/03/2010','tensiftelhaouz','haouz','local','oumaima','projet','oumaima','titre',12,'grandprojet','300dh','2j','12','rend','favorable','14/02/2013','oumaima','sabi','oumaima','aep','aep','eau','eauirrig','signé','pas signé','favorable','13/02/2012','eau','courbure','cours','servie','naturel','orgg','orgpuit','aut1','aut2','aut2d','autocc','aut_occp_dph','$autre_aut','$rem_bet_prot_inond','$rem_sup_sgdph','$avis_sgdph','date_avis_sgdph','valide_par_sgdph','appr_par_sgdph','super_bv','amenag_prop','avis_abht_amng','rem_sup_stah','avis_stah','date_avis_stah','valide_par_stah','app_par_stah','volum_eau_use','mode_assain','reutil_qeu','reutil_niv_trait','niv_piezo','date_niv_piezo','piezo_x','piezo_y','trait_boue','remq_bet_assain','remq_sup_sqe','avis_sqe','date_avis_sqe','valide_par_sqe','appr_par_sqe','fond_doss','geom','date_comm','catg','surf_bat','aut_creus_date','aut_creus_num','aut_prelev_date','aut_prelev_num','aut_devers_date','aut_devers_num','aut_occup_dph_date','aut_occup_dph_num','type_doss','etat_dossier');

// echo "L'avis est ' " . $proj->getid_pr();

?>