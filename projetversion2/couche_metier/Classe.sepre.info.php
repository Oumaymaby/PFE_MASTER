<?php
/**
* OUMAIMA SABI
* DATE:19/05/2022
*/
class SEPRE_INFO
{
	private $origine_eau_pot,$origine_autre,$bes_eau_dom,$bes_eau_irrg,$date_info,$id_user,$id_prj;
	function __construct($f,$g,$i,$j,$ac,$ab,$a)
	{
        // $this->id_sepre_info = $a;
		$this->origine_eau_pot=$f;
		$this->origine_autre=$g;
		$this->bes_eau_dom=$i;
		$this->bes_eau_irrg=$j;
        $this->date_info=$ac;
        $this->id_user=$ab; 
		$this->id_prj=$a; 
	}
    function getid_prj(){
		return $this->id_prj;
	}
    function setid_prj($a){
		$this->id_prj=$a;
	}
	function getorigine_eau_pot(){
		return $this->origine_eau_pot;
	}
	function setorigine_eau_pot($a){
		$this->origine_eau_pot=$a;
	}
	function getorigine_autre(){
		return $this->origine_autre;
	}
	function setorigine_autre($a){
		$this->origine_autre=$a;
	}
	function getbes_eau_dom(){
		return $this->bes_eau_dom;
	}
	function setbes_eau_dom($a){
		$this->bes_eau_dom=$a;
	}
	function getbes_eau_irrg(){
		return $this->bes_eau_irrg;
	}
	function setbes_eau_irrg($a){
		$this->bes_eau_irrg=$a;
	}
    function getdate_info(){
		return $this->date_info;
	}
	function setdate_info($a){
		$this->date_info=$a;
	}
	function getid_user(){
		return $this->id_user;
	}
	function setid_user($a){
		$this->id_user=$a;
	}
}
?>