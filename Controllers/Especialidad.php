<?php
/**
 * Clase que representa especialidad
 * ----------------------------------
 * Class that represents especialidad
 */
class Especialidad extends Controllers
{
    /**
     * summary of __contruct
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
     * la función especialidad() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function especialidad() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */

    public function especialidad()
    {

        $data['page_id'] = 8;
        $data['page_tag'] = "Especialidades - SIGCEDAO";
        $data['page_name'] = "ESPECIALIDADES - SIGCEDAO";
        $data['page_title'] = "Especialidades";
        $data['page_functions_js'] = "functions_especialidad.js";

        $this->views->getView($this, "especialidad", $data);
    }

	public function getEspecialidades()
	{

		$arrData = $this->model->selectEspecialidades();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}


			$btnView = '<button class="btn btn-info btn-sm btnViewEspecialidad" onClick="ftnViewEspecialidad(' . $arrData[$i]['id_especialidad'] . ')" title="Ver Especialidad"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditEspecialidad" onClick="fntEditEspecialidad(' . $arrData[$i]['id_especialidad'] . ')" title="Editar Especialidad"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			$btnDelete = '<button class="btn btn-danger btn-sm btnDelEspecialidad" onClick="fntDelEspecialidad(' . $arrData[$i]['id_especialidad'] . ')" title="Eliminar Especialidad"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();

	}

    public function getEspecialidad(int $intId_especialidad)
	{

		$intId_especialidad = intval(strClean($intId_especialidad));
		if ($intId_especialidad > 0) {
			$arrData = $this->model->selectEspecialidad($intId_especialidad);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}


    public function setEspecialidad()
    {
       


		if ($_POST) {

			if (empty($_POST['nombreEspecialidad']) || empty($_POST['txtDescripcion']) || empty($_POST['listStatus'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {

				$id_especialidad = intval($_POST['id_especialidad']);
				$strNombre = ucwords(strClean($_POST['nombreEspecialidad']));
				$strDescripcion = ucwords(strClean($_POST['txtDescripcion']));
				$intStatus = strtolower(strClean($_POST['listStatus']));

				if ($id_especialidad == 0) {
					$option = 1;

					


					$request_especialidad = $this->model->insertEspecialidad(
						$strNombre,
						$strDescripcion,
						$intStatus
					);

				} else {
					$option = 2;

					$request_especialidad = $this->model->updateEspecialidad(
						$id_especialidad,
						$strNombre,
						$strDescripcion,
						$intStatus
					);


				}



				if ($request_especialidad > 0) {
					if ($option == 1) {
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
					} else {
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}
				} else if ($request_especialidad == false) {
					$arrResponse = array('status' => false, 'msg' => '¡Atención! la especialidad ya existe, ingrese otra.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}

			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
    }


    public function delEspecialidad()
	{
		if ($_POST) {

			$intId_especialidad = intval($_POST['id_especialidad']);
			$requestDelete = $this->model->deleteEspecialidad($intId_especialidad);
			if ($requestDelete == 'ok') {

				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la Especialidad');
			} else if ($requestDelete == 'exist') {
				$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar la Especialidad asociado a docentes.');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar la Especialidad.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

		}
		die();
	}



}

?>