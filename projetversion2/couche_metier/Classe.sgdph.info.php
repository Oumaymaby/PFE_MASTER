<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SGDPH_INFO
{
	private $type_cours_eau,$nom_cours_eau,$crue_100,$nature_cours,$servitude,$origine_x,$origine_y,$aut_creus,$aut_prelev,$aut_dever,$aut_occu_dph,$date_creus,$date_prelev,$date_dever,$date_occup_dph,$num_creus,$num_prelev,$num_devers,$num_occup,$autre_aut,$date_info,$id_user,$id_prj;
	function __construct($h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$a,$b,$ac)
	{
        
        $this->type_cours_eau=$h;
		$this->nom_cours_eau=$i;
		$this->crue_100=$j;
		$this->nature_cours=$k;
		$this->servitude=$l;
		$this->origine_x=$m;
		$this->origine_y=$n;
		$this->aut_creus=$o;
		$this->aut_prelev=$p;
		$this->aut_dever=$q;
		$this->aut_occu_dph=$r;
		$this->date_creus=$s;
		$this->date_prelev=$t;
		$this->date_dever=$u;
		$this->date_occup_dph=$v;
		$this->num_creus=$w;
		$this->num_prelev=$x;
		$this->num_devers=$y;
		$this->num_occup=$z;
		$this->autre_aut=$aa; 
        $this->date_info=$a;
		$this->id_user=$b; 
		$this->id_prj=$ac; 
	}
    function getid_prj(){
		return $this->id_prj;
	}
    function setid_prj($a){
		$this->id_prj=$a;
	}

    function gettype_cours_eau(){
		return $this->type_cours_eau;
	}
	function settype_cours_eau($a){
		$this->type_cours_eau=$a;
	}
	function getnom_cours_eau(){
		return $this->nom_cours_eau;
	}
	function setnom_cours_eau($a){
		$this->nom_cours_eau=$a;
	}
	function getcrue_100(){
		return $this->crue_100;
	}
	function setcrue_100($a){
		$this->crue_100=$a;
	}
	function getnature_cours(){
		return $this->nature_cours;
	}
	function setnature_cours($a){
		$this->nature_cours=$a;
	}
	function getservitude(){
		return $this->servitude;
	}
	function setservitude($a){
		$this->servitude=$a;
	}
	function getorigine_x(){
		return $this->origine_x;
	}
	function setorigine_x($a){
		$this->origine_x=$a;
	}
	function getorigine_y(){
		return $this->origine_y;
	}
	function setorigine_y($a){
		$this->origine_y=$a;
	}
	function getaut_creus(){
		return $this->aut_creus;
	}
	function setaut_creus($a){
		$this->aut_creus=$a;
	}
	function getaut_prelev(){
		return $this->aut_prelev;
	}
	function setaut_prelev($a){
		$this->aut_prelev=$a;
	}
	function getaut_dever(){
		return $this->aut_dever;
	}
	function setaut_dever($a){
		$this->aut_dever=$a;
	}
	function getaut_occu_dph(){
		return $this->aut_occu_dph;
	}
	function setaut_occu_dph($a){
		$this->aut_occu_dph=$a;
	}
	function getdate_creus(){
		return $this->date_creus;
	}
	function setdate_creus($a){
		$this->date_creus=$a;
	}
	function getdate_prelev(){
		return $this->date_prelev;
	}
	function setdate_prelev($a){
		$this->date_prelev=$a;
	}
	function getdate_dever(){
		return $this->date_dever;
	}
	function setdate_dever($a){
		$this->date_dever=$a;
	}
	function getdate_occup_dph(){
		return $this->date_occup_dph;
	}
	function setdate_occup_dph($a){
		$this->date_occup_dph=$a;
	}
	function getnum_creus(){
		return $this->num_creus;
	}
	function setnum_creus($a){
		$this->num_creus=$a;
	}
	function getnum_prelev(){
		return $this->num_prelev;
	}
	function setnum_prelev($a){
		$this->num_prelev=$a;
	}
	function getnum_occup(){
		return $this->num_occup;
	}
	function setnum_occup($a){
		$this->num_occup=$a;
	}
	function getnum_devers(){
		return $this->num_devers;
	}
	function setnum_devers($a){
		$this->num_devers=$a;
	}
	function getautre_aut(){
		return $this->autre_aut;
	}
	function setautre_aut($a){
		$this->autre_aut=$a;
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