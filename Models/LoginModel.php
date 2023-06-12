<?php 

	class LoginModel extends Mysql
	{
		private $intId_Usuario; 
		private $strUsuario;
		private $strPassword;
		private $strToken;


		public function __construct()
		{
			parent::__construct();
		}	


		public function loginUser(string $usuario, string $password)
		{
			$this->strUsuario = $usuario;
			$this->strPassword = $password;
			$sql = "SELECT id_usuario,status FROM usuario WHERE
					email_user = '$this->strUsuario' AND 
					password = '$this->strPassword' AND
					status != 0";

			$request = $this->select($sql);
			return $request;
		}


		public function sessionLogin(int $iduser)
		{
			$this->intId_Usuario = $iduser;
			//BUSCAR ROLE 
			$sql = "SELECT p.id_usuario,
							p.cedula,
							p.nombres,
							p.apellidos,
							p.telefono,
							p.email_user,
							r.id_rol,r.nombre_rol,
							p.status 
					FROM usuario p
					INNER JOIN rol r
					ON p.rol_id = r.id_rol
					WHERE p.id_usuario = $this->intId_Usuario";
			$request = $this->select($sql);
			$_SESSION['userData'] = $request;
			return $request;
		}

		public function getUserEmail(string $strEmail)
		{
			$this->strUsuario =  $strEmail;
			$sql = "SELECT id_usuario,nombres,apellidos,status FROM usuario WHERE email_user = '$this->strUsuario' AND status = 1";
			$request = $this->select($sql);
			return $request;

		}

		public function setTokenUser(int $id_usuario, string $token)
		{
			$this->intId_Usuario = $id_usuario;
			$this->strToken = $token;
			$sql = "UPDATE usuario SET token = ? WHERE id_usuario = $this->intId_Usuario";
			$arrData = array($this->strToken);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		public function getUsuario (string $email, string $token)
		{
			$this->strUsuario = $email;
			$this->strToken = $token;
			$sql = "SELECT id_usuario FROM usuario WHERE email_user = '$this->strUsuario' 
			AND token = '$this->strToken' AND status = 1";
			$request = $this->select($sql);
			return $request;
		}

		public function insertPassword(int $id_usuario, string $password)
		{
			$this->intId_Usuario = $id_usuario;
			$this->strPassword = $password;
			$sql = "UPDATE usuario SET password = ?, token = ? WHERE id_usuario = $this->intId_Usuario ";
			$arrData = array($this->strPassword,"");
			$request = $this->update($sql,$arrData);
			return $request;
		}

		
	}
 ?>