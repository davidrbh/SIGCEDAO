<?php
/**
 * Clase que representa los Roles.
 * -------------------------------
 * Class that represents Roles.
 */
class Roles extends Controllers
{
	/**
	 * Summary of __construct
	 */
	public function __construct()
	{
		sessionStart();
		parent::__construct();
		if(empty($_SESSION['login']))
			{
				header('location:' .base_url() .'/login');
			}
			getPermisos(2);
	}

	/**
	 * la función roles() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
	 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function roles() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
	 */

	public function roles()
	{

		$data['page_id'] = 4;
		$data['page_tag'] = "Roles de Usuarios - SIGCEDAO";
		$data['page_name'] = "rol_usuario - SIGCEDAO";
		$data['page_title'] = "Roles de Usuarios";
		$data['page_functions_js'] = "functions_roles.js";

		$this->views->getView($this, "roles", $data);
	}

	/**
	 * la función getRoles() se utiliza para obtener un arreglo de roles de usuario desde la base de datos y formatearlos para que puedan ser renderizados en una tabla HTML.
	 * -----------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function getRoles() is used to obtain an array of user roles from the database and format them so that they can be rendered in an HTML table.
	 */
	public function getRoles()
	{

		$arrData = $this->model->selectRoles();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			if($_SESSION['permisosMod']['r']){ 
			$btnView = '<button class="btn btn-secondary btn-sm btnPermisosRol" onClick="fntPermisos(' . $arrData[$i]['id_rol'] . ')" title="Permisos"><i class="fas fa-key"></i></button>';
			}

			if($_SESSION['permisosMod']['u']){ 
			$btnEdit = '<button class="btn btn-primary btn-sm btnEditRol" onClick="fntEditRol(' . $arrData[$i]['id_rol'] . ')" title="Editar"><i class="fas fa-pencil-alt"></i></button>';
			}

			if($_SESSION['permisosMod']['d']){ 
			$btnDelete = '<button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol(' . $arrData[$i]['id_rol'] . ')" title="Eliminar"><i class="far fa-trash-alt"></i></button>';
			}



			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}
		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();

	}

	/** 
	 * La function getSelectRoles() se utiliza para obtener una lista desplegable de roles de usuario y renderizarla en formato HTML utilizando los datos obtenidos del modelo "selectRoles".
	 * ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function getSelectRoles() is used to obtain a dropdown list of user roles and render it in HTML format using the data obtained from the selectRoles model.
	 */

	public function getSelectRoles()
	{
		$htmlOptions = "";
		$arrData = $this->model->selectRoles();
		if (count($arrData) > 0) {
			for ($i = 0; $i < count($arrData); $i++) {
				if ($arrData[$i]['status'] == 1) {
					$htmlOptions .= '<option value="' . $arrData[$i]['id_rol'] . '">' . $arrData[$i]['nombre_rol'] . '</option>';
				}
			}
		}
		echo $htmlOptions;
		die();
	}



	/**
	 * la function getRol() se utiliza para obtener los detalles de un rol de usuario específico y devolverlos en formato JSON utilizando los datos obtenidos del modelo.
	 * ------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function getRol() is used to obtain the details of a specific user role and return them in JSON format using the data obtained from the model.
	 * @param number $id_rol id del Rol.
	 */

	public function getRol(int $id_rol)
	{

		$intId_rol = intval(strClean($id_rol));
		if ($intId_rol > 0) {
			$arrData = $this->model->selectRol($intId_rol);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}


	/**
	 * la funtion setRol() se utiliza para crear o actualizar un rol de usuario y devolver una respuesta en formato JSON que indica si la operación fue exitosa o no.
	 *  -------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function setRol() is used to create or update a user role and return a response in JSON format indicating whether the operation was successful or not.
	 */
	public function setRol()
	{
		$intId_rol = intval($_POST['id_Rol']);
		$strNombre_rol = strClean($_POST['txtNombre']);
		$strDescripcion = strClean($_POST['txtDescripcion']);
		$intStatus = intval($_POST['listStatus']);

		if ($intId_rol == 0) {
			//Crear

			$request_rol = $this->model->insertRol($strNombre_rol, $strDescripcion, $intStatus);
			$option = 1;


		} else {
			//Actualizar

			$request_rol = $this->model->updateRol($intId_rol, $strNombre_rol, $strDescripcion, $intStatus);
			$option = 2;


		}

		if ($request_rol > 0) {
			if ($option == 1) {
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
			} else {
				$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
			}
		} else

			if ($request_rol == false) {

				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
			} else {
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
		sleep(1);
		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		die();
	}

	/**
	 * la function delRol() se utiliza para eliminar un rol de usuario específico de la base de datos a traves del modelo "deleteRol" y devolver una respuesta en formato JSON que indica si la operación fue exitosa o no.
	 *  -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function delRol() is used to delete a specific user role from the database through the deleteRol model and return a response in JSON format indicating whether the operation was successful or not.
	 */
	public function delRol()
	{
		if ($_POST) {

			$intId_rol = intval($_POST['id_rol']);
			$requestDelete = $this->model->deleteRol($intId_rol);
			if ($requestDelete == 'ok') {

				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
			} else if ($requestDelete == 'exist') {
				$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

		}
		die();
	}

}



?>