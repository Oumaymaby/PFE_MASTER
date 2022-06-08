<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class ABHT
{
	private $rem_general,$avis_abht,$date_abht_bet,$date_avis_abht,$etabli_par,$valide_par,$approuve_par,$id_prj,$id_user;
	function __construct($b,$c,$d,$e,$f,$g,$a,$h,$k)
	{
        $this->avis_abht=$b;
		$this->date_abht_bet=$c;
        $this->date_avis_abht=$d;
        $this->etabli_par=$e;
        $this->valide_par=$f;
        $this->approuve_par=$g;
		$this->rem_general=$a;
		$this->id_prj=$h;
		$this->id_user=$k;
	}
    function getid_user(){
		return $this->id_user;
	}
    function setid_user($a){
		$this->id_user=$a;
	}
	function getavis_abht(){
		return $this->avis_abht;
	}
	function setavis_abht($a){
		$this->avis_abht=$a;
	}
    function getdate_avis_abht(){
		return $this->date_avis_abht;
	}
	function setdate_avis_abht($a){
		$this->date_avis_abht=$a;
	}
	function getdate_abht_bet(){
		return $this->date_abht_bet;
	}
	function setdate_abht_bet($a){
		$this->date_abht_bet=$a;
	}
    function getetabli_par(){
		return $this->etabli_par;
	}
	function setetabli_par($a){
		$this->etabli_par=$a;
	}
    function getvalide_par(){
		return $this->valide_par;
	}
	function setvalide_par($a){
		$this->valide_par=$a;
	}
    function getapprouve_par(){
		return $this->approuve_par;
	}
	function setapprouve_par($a){
		$this->approuve_par=$a;
	}
    function getrem_general(){
		return $this->rem_general;
	}
	function setrem_general($a){
		$this->rem_general=$a;
	}
	function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	}
}



?>