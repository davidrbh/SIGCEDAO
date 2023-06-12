<?php 

	class Permisos extends Controllers{
		public function __construct()
		{
			
			parent::__construct();
			
		}

		
		public function getPermisosRol(int $id_rol)
		{
			$rol_id = intval($id_rol);
			if($rol_id > 0)
			{
				$arrModulos = $this->model->selectModulos();
				$arrPermisosRol = $this->model->selectPermisosRol($rol_id);
				$arrPermisos = array('r' => 0, 'w' => 0, 'u' => 0, 'd' => 0);
				$arrPermisoRol = array('id_rol' => $rol_id );

				if(empty($arrPermisosRol))
				{
					for ($i=0; $i < count($arrModulos) ; $i++) { 

						$arrModulos[$i]['permisos'] = $arrPermisos;
					}
				}else{
					for ($i=0; $i < count($arrModulos); $i++) {
						
						$arrPermisos = array('r' => 0, 'w' => 0, 'u' => 0, 'd' => 0);
						if(isset($arrPermisosRol[$i])){
						$arrPermisos = array('r' => $arrPermisosRol[$i]['r'], 
											 'w' => $arrPermisosRol[$i]['w'], 
											 'u' => $arrPermisosRol[$i]['u'], 
											 'd' => $arrPermisosRol[$i]['d'] 
											);
					}
						$arrModulos[$i]['permisos'] = $arrPermisos;
						
					}
				}
				$arrPermisoRol['modulos'] = $arrModulos;
				$html = getModal("modalPermisos",$arrPermisoRol);
				


			}
			die();

		}

		public function setPermisos()
		{
			if($_POST)
			{
				$intIdrol = intval($_POST['id_rol']);
				$modulos = $_POST['modulos'];

				$this->model->deletePermisos($intIdrol);
				foreach ($modulos as $modulo) {
					$idModulo = $modulo['id_modulo'];
					$r = empty($modulo['r']) ? 0 : 1;
					$w = empty($modulo['w']) ? 0 : 1;
					$u = empty($modulo['u']) ? 0 : 1;
					$d = empty($modulo['d']) ? 0 : 1;
					$requestPermiso = $this->model->insertPermisos($intIdrol, $idModulo, $r, $w, $u, $d);
				}
				if($requestPermiso > 0)
				{
					
					$arrResponse = array('status' => true, 'msg' => 'Permisos asignados correctamente.');
				}else{
					$arrResponse = array("status" => false, "msg" => 'No es posible asignar los permisos.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}	




	}




 ?>