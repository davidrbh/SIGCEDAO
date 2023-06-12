<?php 

	class UsuariosModel extends Mysql
	{
		private $intId_Usuario;
		private $intCedula;
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intUsuario;
		private $intStatus;



		public function __construct()
		{
			parent::__construct();
		}	

		public function selectUsuarios()
		{
			//EXTRAE USUARIOS
			
			$sql = "SELECT p.id_usuario,
						   p.cedula,
						   p.nombres,
						   p.apellidos,
						   p.telefono,
						   p.email_user,
						   r.nombre_rol,
						   p.status,
						   r.id_rol
					FROM usuario p
					INNER JOIN rol r 
					ON p.rol_id = r.id_rol
					WHERE p.status !=0 ";

			$request = $this->select_all($sql);
			return $request;



		}


		public function selectUsuario($id_usuario)
		{
			$this->intId_Usuario = $id_usuario;

			$sql = "SELECT p.id_usuario,p.cedula,p.nombres,p.apellidos,p.telefono,p.email_user,r.id_rol,r.nombre_rol,p.status, DATE_FORMAT(p.datecreated, '%d-%m-%Y') as fechaRegistro 
					FROM usuario p
					INNER JOIN rol r
					ON p.rol_id = r.id_rol
					WHERE p.id_usuario = $this->intId_Usuario";
			$request = $this->select($sql);
			return $request;



		}






		public function insertUsuario( $cedula, string $nombre, string $apellido,  $telefono,
		string $email, string $password, int $usuario, int $status )
		{

			
			$this->intCedula = $cedula;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intUsuario = $usuario;
			$this->intStatus = $status;
			
			$return = 0;
			

			$sql = "SELECT * FROM usuario WHERE email_user = '{$this->strEmail}' or cedula = '{$this->intCedula}'";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO usuario(cedula,nombres,apellidos,telefono,email_user,password,rol_id,status) VALUES(?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->intCedula, $this->strNombre, $this->strApellido,
	        	 $this->intTelefono, $this->strEmail,$this->strPassword,$this->intUsuario,
	        	 $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = false;
			}
			return $return;

			
		}

		public function deleteUsuario(int $id_usuario)
		{
			$this->intId_usuario = $id_usuario;
			
			if(empty($request))
			{
				$sql = "UPDATE usuario SET status = ? WHERE id_usuario = $this->intId_usuario ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}



		public function updateUsuario(int $id_usuario, $cedula, string $nombre, string $apellido,  $telefono,
		string $email, string $password, int $usuario, int $status){
			$this->intId_Usuario = $id_usuario;
			$this->intCedula = $cedula;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intUsuario = $usuario;
			$this->intStatus = $status;

			$sql = "SELECT * FROM usuario WHERE (email_user = '{$this->strEmail}' AND id_usuario != $this->intId_Usuario)
										  OR (cedula = '{$this->intCedula}' AND id_usuario != $this->intId_Usuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, email_user=?, 
					password=?, rol_id=?, status=? 
							WHERE id_usuario = $this->intId_Usuario ";
					$arrData = array($this->intCedula,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intUsuario,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, email_user=?, 
					rol_id=?, status=? 
							WHERE id_usuario = $this->intId_Usuario ";
					$arrData = array($this->intCedula,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->intUsuario,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = false;
			}
			return $request;
		
		}

		public function updatePerfil(int $id_usuario, $cedula, string $nombre, string $apellido, 
		 $telefono, string $password)
		{
			$this->intId_Usuario = $id_usuario;
			$this->intCedula = $cedula;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strPassword = $password;

			if($this->strPassword  != "")
				{
					$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, 
					password=?
							WHERE id_usuario = $this->intId_Usuario ";
					$arrData = array($this->intCedula,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strPassword);
	        						
				}else{
					$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?
							WHERE id_usuario = $this->intId_Usuario ";
					$arrData = array($this->intCedula,
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono);					
				}
				$request = $this->update($sql,$arrData);
				return $request;

		}


	}
 ?>