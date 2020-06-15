<?php
session_start();
require_once 'dbconfig.php';

class User
{	
	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	//login
	public function doLogin($uname,$upass)
	{		
		try{
			$stmt = $this->conn->prepare("SELECT * FROM usuario WHERE emailUsuario=:uname ");
			$stmt->execute(array(':uname'=>$uname));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1){
				if(password_verify($upass, $userRow['passwordUsuario'])){
					
					$_SESSION['user_session'] 	= $userRow['idUsuario'];
					$_SESSION['tipo']  			= $userRow['idTipoUsuario'];
					$_SESSION['nombres']		= $userRow['nombresUsuario'];
					$_SESSION['apellidos'] 		= $userRow['apellidosUsuario'];
					$_SESSION['documento']		= $userRow['documentoUsuario'];
		
					return true;
				
				}else{
					return false;
				}
			}
		}

		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	
	//compruebo login
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session'])){
			return true;
		}
	}
	
	//redirecciono
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	//logout
	public function doLogout()
	{
		unset($_SESSION['user_session']);
		unset($_SESSION['tipo']);
		unset($_SESSION['nombres']);
		unset($_SESSION['apellidos']);
		unset($_SESSION['documento']);
		
		session_destroy();
		return true;
	}
}