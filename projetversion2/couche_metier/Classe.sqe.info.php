<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SQE_INFO
{
	private $volume_eau_use,$modeassai,$reut_qeu,$niv_trait,$niv_piezo,$date_piezo,$coord_x,$coord_y,$trait_boue,$date_info,$id_user,$id_prj;
	function __construct($c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$a)
	{
        
        $this->volume_eau_use=$c;
		$this->modeassai=$d;
		$this->reut_qeu=$e;
		$this->niv_trait=$f;
		$this->niv_piezo=$g;
		$this->date_piezo=$h;
		$this->coord_x=$i;
		$this->coord_y=$j;
		$this->trait_boue=$k;
        $this->date_info=$l;
        $this->id_user=$m; 
		$this->id_prj = $a;
	}
    function getid_prj(){
		return $this->id_prj;
	}
    function setid_prj($a){
		$this->id_prj=$a;
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