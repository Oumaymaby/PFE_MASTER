<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SQE
{
	private $id_pr,$remarque_sup_sqe,$avis_sqe,$date_avis_sqe,$valide_par_sqe,$approuve_par_sqe;
	function __construct($a,$q,$r,$s,$t,$p)
	{
        $this->id_pr = $a;
        $this->avis_sqe=$q;
        $this->date_avis_sqe=$r;
        $this->valide_par_sqe=$s;
        $this->approuve_par_sqe=$t;
		$this->remarque_sup_sqe=$p;
	}
    function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
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
}



?>