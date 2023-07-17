<?php
/**
 * Clase que representa los usuarios.
 * ----------------------------------
 * Class that represents usuarios.
 */

class Usuarios extends Controllers
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


	}

	/**
	 * la función usuarios() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
	 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function usuarios() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
	 */

	public function usuarios()
	{
		$data['page_id'] = 3;
		$data['page_tag'] = "Usuarios - SIGCEDAO";
		$data['page_name'] = "usuarios - SIGCEDAO";
		$data['page_title'] = "Usuarios";
		$data['page_functions_js'] = "functions_usuarios.js";

		$this->views->getView($this, "usuarios", $data);
	}

	/**
	 * la función PHP getUsuarios obtiene la lista de usuarios de la base de datos utilizando el método selectUsuarios de un modelo. Luego, itera a través de cada usuario y asigna los valores correspondientes a los botones Ver, Editar y Eliminar según el estado activo o inactivo del usuario. Los botones se crean utilizando HTML y se les asignan las correspondientes funciones de JavaScript. Finalmente, la función devuelve la lista de usuarios en formato JSON.
	 * ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * the function PHP getUsuarios recovers the list of users from the database using the selectUsuarios method of a model. Then, it iterates through each user and assigns the corresponding values to the View, Edit and Delete buttons according to the active or inactive status of the user. The buttons are created using HTML and are assigned the corresponding JavaScript functions. Finally, the function returns the list of users in JSON format.
	 */

	public function getUsuarios()
	{

		$arrData = $this->model->selectUsuarios();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}


			$btnView = '<button class="btn btn-info btn-sm btnViewUsuario" onClick="ftnViewUsuario(' . $arrData[$i]['id_usuario'] . ')" title="Ver Usuario"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditUsuario" onClick="fntEditUsuario(' . $arrData[$i]['id_usuario'] . ')" title="Editar Usuario"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			$btnDelete = '<button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario(' . $arrData[$i]['id_usuario'] . ')" title="Eliminar Usuario"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();

	}

	/**
	 * La función PHP getUsuario recupera los datos de un usuario específico de la base de datos utilizando el método selectUsuario de un modelo. Luego, devuelve los datos del usuario en formato JSON si se encuentran, o un mensaje de error si no se encuentran.
	 * -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The PHP function getUsuario retrieves the data of a specific user from the database using the selectUsuario method of a model. It then returns the user data in JSON format if found, or an error message if not found.
	 */

	public function getUsuario($id_usuario)
	{

		$idUser = intval($id_usuario);
		if ($idUser > 0) {
			$arrData = $this->model->selectUsuario($idUser);
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
	 * La función PHP setUsuario se encarga de guardar o actualizar los datos de un usuario en la base de datos. Primero, verifica si se han enviado los campos necesarios y luego los procesa para su almacenamiento. Si la operación es exitosa, devuelve un mensaje de éxito, de lo contrario, devuelve un mensaje de error. 
	 * ----------------------------------------------------------------------------------------------------------------
	 * The PHP function setUsuario is responsible for saving or updating user data in the database. First, it checks if the required fields have been sent and then processes them for storage. If the operation is successful, it returns a success message, otherwise, it returns an error message.
	 */
	public function setUsuario()
	{


		//////////////////***********


		if ($_POST) {

			if (empty($_POST['txtCedula']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listRolid']) || empty($_POST['listStatus'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {

				$id_usuario = intval($_POST['id_Usuario']);
				$intCedula = ($_POST['txtCedula']);
				$strNombre = ucwords(strClean($_POST['txtNombre']));
				$strApellido = ucwords(strClean($_POST['txtApellido']));
				$intTelefono = ($_POST['txtTelefono']);
				$strEmail = strtolower(strClean($_POST['txtEmail']));
				$intUsuario = intval($_POST['listRolid']);
				$intStatus = strtolower(strClean($_POST['listStatus']));

				if ($id_usuario == 0) {
					$option = 1;

					$strPassword = empty($_POST['txtPassword']) ? hash("SHA256", passGenerator()) : hash("SHA256", $_POST['txtPassword']);


					$request_usuario = $this->model->insertUsuario(
						$intCedula,
						$strNombre,
						$strApellido,
						$intTelefono,
						$strEmail,
						$strPassword,
						$intUsuario,
						$intStatus
					);

				} else {
					$option = 2;


					$strPassword = empty($_POST['txtPassword']) ? "" : hash("SHA256", $_POST['txtPassword']);

					$request_usuario = $this->model->updateUsuario(
						$id_usuario,
						$intCedula,
						$strNombre,
						$strApellido,
						$intTelefono,
						$strEmail,
						$strPassword,
						$intUsuario,
						$intStatus
					);


				}



				if ($request_usuario > 0) {
					if ($option == 1) {
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
					} else {
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}
				} else if ($request_usuario == false) {
					$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la cédula ya existe, ingrese otro.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}

			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

	/**
	 * La función PHP delUsuario elimina un usuario de la base de datos utilizando el método deleteUsuario de un modelo. Si la eliminación es exitosa, devuelve un mensaje de éxito, de lo contrario, devuelve un mensaje de error.
	 * ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The PHP function delUsuario deletes a user from the database using the deleteUsuario method of a model. If the deletion is successful, it returns a success message, otherwise, it returns an error message.
	 */

	public function delUsuario()
	{

		if ($_POST) {

			$intId_usuario = intval($_POST['id_usuario']);
			$requestDelete = $this->model->deleteUsuario($intId_usuario);
			if ($requestDelete == 'ok') {

				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Usuario');
			} else if ($requestDelete == 'exist') {
				$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar el Usuario.');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Usuario.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

		}
		die();
	}

	/**
	 * la función perfil() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
	 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function perfil() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
	 */

	public function perfil()
	{
		$data['page_tag'] = "Perfil";
		$data['page_name'] = "perfil";
		$data['page_title'] = "Perfil de usuario ";
		$data['page_functions_js'] = "functions_usuarios.js";

		$this->views->getView($this, "perfil", $data);
	}

	/**
	 * La función PHP putPerfil actualiza los datos del perfil de un usuario en la base de datos utilizando el método updatePerfil de un modelo. Si la actualización es exitosa, actualiza la información del usuario almacenada en $_SESSION y devuelve un mensaje de éxito, de lo contrario, devuelve un mensaje de error.
	 * ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The PHP function putPerfil updates the user profile data in the database using the updatePerfil method of a model. If the update is successful, it updates the user information stored in $_SESSION and returns a success message, otherwise, it returns an error message.
	 */

	public function putPerfil()
	{
		if ($_POST) {
			if (empty($_POST['txtCedula']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {
				$id_usuario = $_SESSION['id_User'];
				$strCedula = ($_POST['txtCedula']);
				$strNombre = strClean($_POST['txtNombre']);
				$strApellido = strClean($_POST['txtApellido']);
				$intTelefono = ($_POST['txtTelefono']);
				$strEmail = strtolower(strClean($_POST['txtEmail']));
				$strPassword = "";
				if (!empty($_POST['txtPassword'])) {
					$strPassword = hash("SHA256", $_POST['txtPassword']);
				}
				$request_user = $this->model->updatePerfil(
					$id_usuario,
					$strCedula,
					$strNombre,
					$strApellido,
					$intTelefono,
					$strPassword
				);
				if ($request_user) {
					sessionUser($_SESSION['id_User']);

					$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible actualizar los datos.');
				}
			}
			sleep(1);
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
	}

}

?>