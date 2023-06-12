<?php 

	class PermisosModel extends Mysql
	{
		public $intIdpermiso;
		public $intRolid;
		public $intModuloid;
		public $r;
		public $w;
		public $u;
		public $d;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectModulos()
		{
			$sql = "SELECT * FROM modulos WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}	
		public function selectPermisosRol(int $id_rol)
		{
			$this->intRolid = $id_rol;
			$sql = "SELECT * FROM permisos WHERE rol_id = $this->intRolid";
			$request = $this->select_all($sql);
			return $request;
		}

		public function deletePermisos(int $id_rol)
		{
			$this->intRolid = $id_rol;
			$sql = "DELETE FROM permisos WHERE rol_id = $this->intRolid";
			$request = $this->delete($sql);
			return $request;
		}

		public function insertPermisos(int $id_rol, int $id_modulo, int $r, int $w, int $u, int $d){
			$this->intRolid = $id_rol;
			$this->intModuloid = $id_modulo;
			$this->r = $r;
			$this->w = $w;
			$this->u = $u;
			$this->d = $d;
			$query_insert  = "INSERT INTO permisos(rol_id,modulo_id,r,w,u,d) VALUES(?,?,?,?,?,?)";
        	$arrData = array($this->intRolid, $this->intModuloid, $this->r, $this->w, $this->u, $this->d);
        	$request_insert = $this->insert($query_insert,$arrData);		
	        return $request_insert;
		}

		public function PermisosModulos(int $id_rol)
		{
			$this->intRolid = $id_rol;
			$sql ="SELECT p.rol_id,
			              p.modulo_id,
			              m.titulo as modulos,
			              p.r,
			              p.w,
			              p.u,
			              p.d
			        FROM permisos p
			        INNER JOIN modulos m
			        ON p.modulo_id = m.id_modulo
			        WHERE p.rol_id = $this->intRolid";
			        $request = $this->select_all($sql);

			        $arrPermisos = array();
			        for ($i=0; $i < count($request); $i++) {
			        	$arrPermisos[$request[$i]['modulo_id']] = $request[$i];
			        }
			        return $arrPermisos;
		}
	}
 ?>