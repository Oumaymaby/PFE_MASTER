<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SQE_AVIS
{
	private $id_user,$remarque_sup_sqe,$avis_sqe,$valide_par_sqe,$approuve_par_sqe,$remarque_bet_assai,$date_avis_sqe,$date_avis_bet_sqe,$id_sqe_info,$id_prj;
	function __construct($q,$r,$s,$t,$p,$v,$h,$a,$m,$n)
	{
        // $this->id_pr = $a;
        $this->avis_sqe=$q;
        $this->date_avis_sqe=$r;
        $this->valide_par_sqe=$s;
        $this->approuve_par_sqe=$t;
		$this->remarque_sup_sqe=$p;
		$this->remarque_bet_assai=$v;
        $this->date_avis_bet_sqe=$h;
        $this->id_sqe_info=$a;
        $this->id_prj=$m; 
		$this->id_user=$n; 
	}
    function getid_user(){
		return $this->id_user;
	}
    function setid_user($a){
		$this->id_user=$a;
	}
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
    function getid_sqe_info(){
		return $this->id_sqe_info;
	}
	function setid_sqe_info($a){
		$this->id_sqe_info=$a;
	}
    function getdate_avis_bet_sqe(){
		return $this->date_avis_bet_sqe;
	}
	function setdate_avis_bet_sqe($a){
		$this->date_avis_bet_sqe=$a;
	}
	function getdate_avis_sqe(){
		return $this->date_avis_sqe;
	}
	function setdate_avis_sqe($a){
		$this->date_avis_sqe=$a;
	}
    function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	} 
}



?>