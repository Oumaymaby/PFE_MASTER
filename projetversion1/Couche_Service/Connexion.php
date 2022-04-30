<?php
/**
* OUMAIMA SABI
* DATE:18/02/2022
*/
class Connexion
{
	private $db;
	function __construct()
	{
		$username = "postgres";
		$password = "admin";
		$dsname = "pgsql:host=localhost;port=5432;dbname=DBH_BD";

		// Création de la  connexion
		try{
            $this->db = new PDO($dsname,$username,$password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // if ($this->db) {
            //     echo "Connected to the database successfully!";
            // }
		}
		catch(PDOException $e)
		{
		  die("Erreur ! :".$e->getMessage());
		}

		
	}
	function getdb()
	{
		return $this->db;
	}
}


?>
