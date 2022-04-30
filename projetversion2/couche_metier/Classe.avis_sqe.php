<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SQE
{
	private $remarque_sup_sqe,$avis_sqe,$date_avis_sqe,$valide_par_sqe,$approuve_par_sqe,$remarque_bet_assai,$volume_eau_use,$modeassai,$reut_qeu,$niv_trait,$niv_piezo,$date_piezo,$coord_x,$coord_y,$trait_boue,$date_avis_bet_sqe,$id_prj;
	function __construct($q,$r,$s,$t,$p,$v,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)
	{
        // $this->id_pr = $a;
        $this->avis_sqe=$q;
        $this->date_avis_sqe=$r;
        $this->valide_par_sqe=$s;
        $this->approuve_par_sqe=$t;
		$this->remarque_sup_sqe=$p;
		$this->remarque_bet_assai=$v;
		$this->volume_eau_use=$c;
		$this->modeassai=$d;
		$this->reut_qeu=$e;
		$this->niv_trait=$f;
		$this->niv_piezo=$g;
		$this->date_piezo=$h;
		$this->coord_x=$i;
		$this->coord_y=$j;
		$this->trait_boue=$k;
        $this->date_avis_bet_sqe=$l;
        $this->id_prj=$m; 
	}
    // function getid_pr(){
	// 	return $this->id_pr;
	// }
    // function setid_pr($a){
	// 	$this->id_pr=$a;
	// }
    function getremarque_sup_sqe(){
		return $this->remarque_sup_sqe;
	}
    function setremarque_sup_sqe($a){
		$this->remarque_sup_sqe=$a;
	}
	function getavis_sqe(){
		return $this->avis_sqe;
	}
	function setavis_sqe($a){
		$this->avis_sqe=$a;
	}
    function getdate_avis_sqe(){
		return $this->date_avis_sqe;
	}
    function setdate_avis_sqe($a){
		$this->date_avis_sqe=$a;
	}
	function setvalide_par_sqe($a){
		$this->valide_par_sqe=$a;
	}
    function getvalide_par_sqe(){
		return $this->valide_par_sqe;
	}
    function getapprouve_par_sqe(){
		return $this->approuve_par_sqe;
	}
	function setapprouve_par_sqe($a){
		$this->approuve_par_sqe=$a;
	}
	function getremarque_bet_assai(){
		return $this->remarque_bet_assai;
	}
	function setremarque_bet_assai($a){
		$this->remarque_bet_assai=$a;
	}
	function getmodeassai(){
		return $this->modeassai;
	}
	function setmodeassai($a){
		$this->modeassai=$a;
	}
	function getvolume_eau_use(){
		return $this->volume_eau_use;
	}
	function setvolume_eau_use($a){
		$this->volume_eau_use=$a;
	}
	function getreut_qeu(){
		return $this->reut_qeu;
	}
	function setreut_qeu($a){
		$this->reut_qeu=$a;
	}
	function setniv_trait($a){
		$this->niv_trait=$a;
	}
	function getniv_trait(){
		return $this->niv_trait;
	}
	function getniv_piezo(){
		return $this->niv_piezo;
	}
	function setniv_piezo($a){
		$this->niv_piezo=$a;
	}
	function getdate_piezo(){
		return $this->date_piezo;
	}
	function setdate_piezo($a){
		$this->date_piezo=$a;
	}
	function getcoord_x(){
		return $this->coord_x;
	}
	function setcoord_x($a){
		$this->coord_x=$a;
	}
	function getcoord_y(){
		return $this->coord_y;
	}
	function setcoord_y($a){
		$this->coord_y=$a;
	}
	function gettrait_boue(){
		return $this->trait_boue;
	}
	function settrait_boue($a){
		$this->trait_boue=$a;
	}
    function getdate_avis_bet_sqe(){
		return $this->date_avis_bet_sqe;
	}
	function setdate_avis_bet_sqe($a){
		$this->date_avis_bet_sqe=$a;
	}
    function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	}
    
}



?>