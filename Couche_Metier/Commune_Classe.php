<?php
/**
* OUMAIMA SABI
* DATE:18/03/2022
*/
class Commune
{
	private $id,$geom,$commune,$codecommune,$commune_ar,$codeprovince,$zoneL;
	function __construct($a,$b,$c,$d,$e,$f,$g)
	{
		$this->id= $a;
		$this->geom = $b;
        $this->commune = $c;
        $this->codecommune = $d;
        $this->commune_ar = $e;
        $this->codeprovince = $f;
        $this->zoneL = $g;
	}
	function getid(){
		return $this->id;
	}
	function getgeom(){
		return $this->geom;
	}
    function getcommune(){
		return $this->commune;
	}
    function getcodecommune(){
		return $this->codecommune;
	}
    function getcommune_ar(){
		return $this->commune_ar;
	}
    function getcodeprovince(){
		return $this->codeprovince;
	}
    function getzoneL(){
		return $this->zoneL;
	}
    function setid($a){
		$this->id=$a;
	}
	function setgeom($a){
		$this->geom=$a;
	}
    function setcommune($a){
		$this->commune=$a;
	}
    function setcodecommune($a){
		$this->codecommune=$a;
	}
    function setcommune_ar($a){
		$this->commune_ar=$a;
	}
    function setcodeprovince($a){
		$this->codeprovince=$a;
	}
    function setzoneL($a){
		$this->zoneL=$a;
	}
}

// $type_projet = new Type_projet(1,"grandprojet");
// echo "Le type de projet est  " . $type_projet->getid_typep(). " " . $type_projet->gettype_projet();

?>