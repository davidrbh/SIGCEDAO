<?php
/**
 * Clase que representa los permisos.
 * ----------------------------------
 * Class that represent permisos.
 */

class Permisos extends Controllers
{
	/**
	 * Summary of __contruct
	 */
	public function __construct()
	{

		parent::__construct();

	}

	/**
	 * recoge los permisos de un rol especificado y los módulos que tienen asociados. Si no hay permisos asignados para el rol, se asignan valores por defecto a los permisos. Si hay permisos asignados, se recuperan y se asignan a los módulos. Finalmente, se genera HTML para mostrar los permisos de los módulos asociados al rol.
	 * ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function getPermisosRol retrieves the permissions for a specified role and the modules associated with it. If there are no permissions assigned for the role, default values are assigned to the permissions. If there are permissions assigned, they are retrieved and assigned to the modules. Finally, HTML is generated to display the permissions of the modules associated with the role.
	 * @param number $id_rol id del Rol.
	 */
	public function getPermisosRol(int $id_rol)
	{
		$rol_id = intval($id_rol);
		if ($rol_id > 0) {
			$arrModulos = $this->model->selectModulos();
			$arrPermisosRol = $this->model->selectPermisosRol($rol_id);
			$arrPermisos = array('r' => 0, 'w' => 0, 'u' => 0, 'd' => 0);
			$arrPermisoRol = array('id_rol' => $rol_id);

			if (empty($arrPermisosRol)) {
				for ($i = 0; $i < count($arrModulos); $i++) {

					$arrModulos[$i]['permisos'] = $arrPermisos;
				}
			} else {
				for ($i = 0; $i < count($arrModulos); $i++) {

					$arrPermisos = array('r' => 0, 'w' => 0, 'u' => 0, 'd' => 0);
					if (isset($arrPermisosRol[$i])) {
						$arrPermisos = array(
							'r' => $arrPermisosRol[$i]['r'],
							'w' => $arrPermisosRol[$i]['w'],
							'u' => $arrPermisosRol[$i]['u'],
							'd' => $arrPermisosRol[$i]['d']
						);
					}
					$arrModulos[$i]['permisos'] = $arrPermisos;

				}
			}
			$arrPermisoRol['modulos'] = $arrModulos;
			$html = getModal("modalPermisos", $arrPermisoRol);



		}
		die();

	}

	/**
	 * se encarga de asignar permisos a un rol en una base de datos. La función recibe una solicitud HTTP POST que contiene el ID del rol y los módulos y permisos correspondientes. Luego, elimina todos los permisos existentes para el rol y los reemplaza con los nuevos permisos recibidos. Finalmente, la función devuelve una respuesta JSON que indica si la asignación de permisos ha sido exitosa o no.
	 * -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The PHP function setPermisos is responsible for assigning permissions to a role in a database. The function receives an HTTP POST request that contains the role ID and the corresponding modules and permissions. It then deletes all existing permissions for the role and replaces them with the new permissions received. Finally, the function returns a JSON response indicating whether the permission assignment was successful or not.
	 */

	public function setPermisos()
	{
		if ($_POST) {
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
			if ($requestPermiso > 0) {

				$arrResponse = array('status' => true, 'msg' => 'Permisos asignados correctamente.');
			} else {
				$arrResponse = array("status" => false, "msg" => 'No es posible asignar los permisos.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}




}




?>