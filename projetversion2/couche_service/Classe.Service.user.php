<?php
/**
* OUMAIMA SABI
* DATE:06/04/2022
*/

require_once 'Classe.Service.connexion.php';
require_once '../couche_metier/Classe.user.php';

class User_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
 	function add($user)
 	{
 	 	$st =	$this->db->prepare('insert into gen.phpgen_users (user_id,user_name,user_password,nom,prenom,division,service) values (?,?,?,?,?,?,?)');
 	 	if ($st->execute(array($user->getid_users(),$user->getusn(),$user->getpassword(),$user->getnom(),$user->getprenom(),$user->getdivision(),$user->getservice()))) 
		{
 	 	echo"entré";
 		}
 		else{
 	 		return false;
 		}
 	}

 	function findAll()
 	{

	 	$st =	$this->db->prepare('SELECT * FROM gen.phpgen_users');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 
	
 	function findById($id)
 	{
		$st =$this->db->prepare('select * FROM gen.phpgen_users where user_id=?');
		if ($st->execute(array($id))) {
			$row = $st->fetch(PDO::FETCH_OBJ);
			// var_dump($row);
			
			if(!empty($row)){
				return new User($row->user_id,$row->user_name,$row->user_password,$row->nom,$row->prenom,$row->division,$row->service);
			}
			elseif(empty($row)){
				return new User('0','aucune personne','0','0','0','0','0');
			}

		}
		else{
			echo "Problème ";
			return null;
		}
 	} 
 	function update($user)
 	{
 	 	$st =$this->db->prepare('update gen.phpgen_users set user_name=?,user_password=?,nom=?,prenom=?,division=?,service=? where user_id=?');
	 	if ($st->execute(array($user->getid_users(),$user->getusn(),$user->getpassword(),$user->getnom(),$user->getprenom(),$user->getdivision(),$user->getservice())))
		{
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	 
 	}


 	function supprimer($user)
 	{

	 	$st =	$this->db->prepare('delete from gen.phpgen_users where user_id=?');
	 	if ($st->execute(array($user->getid_users()))) {
	 	 	return true;
	 	}
	 	else{
	 	 	return false;
	 	}
 	}

	function nombre(){
		$st =	$this->db->prepare('SELECT count(*) FROM gen.phpgen_users');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}


	public function login($user)
    {
       try
       {
       	
          $stmt = $this->db->prepare("SELECT * FROM gen.phpgen_users WHERE user_name=? ");
          $stmt->execute(array($user));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if(isset($userRow))
          {
			    $_SESSION['user_id']=$userRow['user_id'];
                $_SESSION['user_name']=$userRow['user_name'];
				$_SESSION['nom']=$userRow['nom'];
				$_SESSION['division']=$userRow['division'];
				$_SESSION['service']=$userRow['service'];
				$_SESSION['user_id']=$userRow['user_id'];
				$_SESSION['id_profession']=$userRow['id_profession'];

				echo $userRow['service'];
				
                return true;
				
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

    public function logout()
    {

		unset($_SESSION);
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"],$params["httponly"]);
		}
		
		if (session_destroy())
		{
			header('location:authen.php');
		}
       
    }

	


}
