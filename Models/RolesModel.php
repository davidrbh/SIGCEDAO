<?php 

	class RolesModel extends Mysql
	{

		public $intId_rol;
		public $strNombre_rol;
		public $strDescripcion;
		public $intStatus;
		

		public function __construct()
		{
			parent::__construct();
		}	


		public function selectRoles()
		{	
			
			//EXTRAE ROLES
			$sql = "SELECT * FROM rol WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectRol(int $id_rol)
		{
			//BUSCAR ROLE
			$this->intId_rol = $id_rol;
			$sql = "SELECT * FROM rol WHERE id_rol = $this->intId_rol";
			$request = $this->select($sql);
			return $request;
		}

		public function insertRol(string $rol, string $descripcion, int $status)
		{

			$return = "";
			$this->strNombre_rol = $rol;
			$this->strDescripcion = $descripcion;
			$this->intStatus = $status;

			$sql = "SELECT * FROM rol WHERE nombre_rol = '{$this->strNombre_rol}'";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO rol(nombre_rol,descripcion,status) VALUES(?,?,?)";
	        	$arrData = array($this->strNombre_rol, $this->strDescripcion, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = false;
			}
			return $return;


		}

		public function deleteRol(int $id_rol)
		{
			$this->intId_rol = $id_rol;
			$sql = "SELECT * FROM usuario WHERE rol_id = $this->intId_rol";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE rol SET status = ? WHERE id_rol = $this->intId_rol ";
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


		public function updateRol(int $id_rol, string $nombre_rol, string $descripcion, int $status){
			$this->intId_rol = $id_rol;
			$this->strNombre_rol = $nombre_rol;
			$this->strDescripcion = $descripcion;
			$this->intStatus = $status;

			$sql = "SELECT * FROM rol WHERE nombre_rol = '$this->strNombre_rol' AND id_rol != $this->intId_rol";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE rol SET nombre_rol = ?, descripcion = ?, status = ? WHERE id_rol = $this->intId_rol ";
				$arrData = array($this->strNombre_rol, $this->strDescripcion, $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = false;
			}
		    return $request;			
		}
	}
 ?>