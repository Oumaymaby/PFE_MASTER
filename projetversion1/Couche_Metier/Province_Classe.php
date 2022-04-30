<?php
/**
* OUMAIMA SABI
* DATE:18/03/2022
*/
class Province
{
	private $id,$geom,$province_ar,$province_a,$codeprovince,$coderegion,$province;
	function __construct($a,$b,$c,$d,$e,$f,$g)
	{
		$this->id= $a;
		$this->geom = $b;
        $this->province_ar = $c;
        $this->province_a = $d;
        $this->codeprovince = $e;
        $this->coderegion = $f;
        $this->province = $g;
	}
	function getid(){
		return $this->id;
	}
	function getgeom(){
		return $this->geom;
	}
    function getprovince_ar(){
		return $this->province_ar;
	}
    function getprovince_a(){
		return $this->province_a;
	}
    function getcodeprovince(){
		return $this->codeprovince;
	}
    function getcoderegion(){
		return $this->coderegion;
	}
    function getprovince(){
		return $this->province;
	}
    function setid($a){
		$this->id=$a;
	}
	function setgeom($a){
		$this->geom=$a;
	}
    function setprovince_ar($a){
		$this->province_ar=$a;
	}
    function setprovince_a($a){
		$this->province_a=$a;
	}
    function setcodeprovince($a){
		$this->codeprovince=$a;
	}
    function setcoderegion($a){
		$this->coderegion=$a;
	}
    function setprovince($a){
		$this->province=$a;
	}
}

// $type_projet = new Type_projet(1,"grandprojet");
// echo "Le type de projet est  " . $type_projet->getid_typep(). " " . $type_projet->gettype_projet();

?>