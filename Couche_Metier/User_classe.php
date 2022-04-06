<?php
/**
* OUMAIMA SABI
* DATE:06/04/2022
*/
class User
{
	private $id_user,$username,$password,$nom,$prenom,$division,$service;
	function __construct($a,$b,$c,$d,$e,$f,$g)
	{
		$this->id_users = $a;
		$this->username= $b;
        $this->password= $c;
        $this->nom= $d;
        $this->prenom= $e;
        $this->division= $f;
        $this->service=$g;

	}
	function getid_users(){
		return $this->id_users;
	}
	function getusername(){
		return $this->username;
	}
    function getpassword(){
		return $this->password;
	}
    function getnom(){
		return $this->nom;
	}
    function getprenom(){
		return $this->prenom;
	}
    function getdivision(){
		return $this->division;
	}
    function getservice(){
		return $this->service;
	}


    function setid_users($a){
		$this->id_users=$a;
	}
	function setusername($a){
		$this->username=$a;
	}
    function setpassworde($a){
		$this->password=$a;
	}
    function setnom($a){
		$this->nom=$a;
	}
    function setprenom($a){
		$this->prenom=$a;
	}
    function setservice($a){
		$this->service=$a;
	}
    function setdivision($a){
		$this->division=$a;
	}
}

// $user = new user(1,'oumaima','saby','oum','sab','abht','dph');
// echo "user est ' " . $user->getid_users() . " " . $user->getusername();

?>