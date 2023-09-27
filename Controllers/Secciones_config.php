<?php
/**
 * Clase que representa a la seccion de configuracion.
 * -------------------------------------------------
 * Class that represents seccion of config.
 */
class Secciones_config extends Controllers
{
    /**
     * Summary of __contruct
     */
    public function __construct()
    {
        sessionStart();
        parent::__construct();
        if(empty($_SESSION['login']))
			{
				header('location:' .base_url() .'/login');
			}
			getPermisos(4);

    }
   

    public function secciones_config()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "Configuración de secciones - SIGCEDAO";
        $data['page_name'] = "CONFIGUTACION DE SECCIONES - SIGCEDAO";
        $data['page_title'] = "Configuración de secciones";
        $data['page_functions_js'] = "functions_secciones_config.js";

        $this->views->getView($this, "secciones_config", $data);
    }

    public function getSecciones_config()
	{

		$arrData = $this->model->selectSecciones_config_all();

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
			$btnView = '<button class="btn btn-info btn-sm btnViewSeccion_config" onClick="ftnViewSeccion_config(' . $arrData[$i]['id_seccion'] . ')" title="Ver Sección"><i class="fa fa-eye" aria-hidden="true"></i></button>';
			}


			if($_SESSION['permisosMod']['u']){ 
			$btnEdit = '<button class="btn btn-primary btn-sm btnEditSeccion_config" onClick="fntEditSeccion_config(' . $arrData[$i]['id_seccion'] . ')" title="Editar Sección"><i class="fas fa-pencil-alt"></i></button>';
			}
			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';




			if($_SESSION['permisosMod']['d']){ 
			$btnDelete = '<button class="btn btn-danger btn-sm btnDelSeccion_config" onClick="fntDelSeccion_config(' . $arrData[$i]['id_seccion'] . ')" title="Eliminar Sección"><i class="far fa-trash-alt"></i></button>';
			}
			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();

	}

    public function getSeccion_config(int $intId_seccion_config)
	{

		$intId_seccion_config = intval(strClean($intId_seccion_config));
		if ($intId_seccion_config > 0) {
			$arrData = $this->model->selectSeccion_config($intId_seccion_config);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}

	public function getSeccion_config2(int $intId_seccion_config)
	{

		$intId_seccion_config = intval(strClean($intId_seccion_config));
		if ($intId_seccion_config > 0) {
			$arrData = $this->model->selectSeccion_config2($intId_seccion_config);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}

	


    public function setSeccion_config()
    {
       


		if ($_POST) {

			if (empty($_POST['selectSeccionesid']) || empty($_POST['selectDocenteid']) || empty($_POST['periodo_escolar']) || empty($_POST['listStatus'])) {
				$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
			} else {

				$id_seccion = intval($_POST['id_seccion']);
				$int_nombreSeccion = intval($_POST['selectSeccionesid']);
				$int_nombreDocente = intval($_POST['selectDocenteid']);
				$strPeriodo = strClean($_POST['periodo_escolar']);
				$intStatus = intval($_POST['listStatus']);

				if ($id_seccion == 0) {
					$option = 1;

					


					$request_seccion_config = $this->model->insertSeccion_config(
						$int_nombreSeccion,
						$int_nombreDocente,
						$strPeriodo,
						$intStatus
					);

				} else {
					$option = 2;

					$request_seccion_config = $this->model->updateSeccion_config(
						$id_seccion,
						$int_nombreSeccion,
						$int_nombreDocente,
						$strPeriodo,
						$intStatus
					);


				}



				if ($request_seccion_config > 0) {
					if ($option == 1) {
						$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
					} else {
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}
				} else if ($request_seccion_config == false) {
					$arrResponse = array('status' => false, 'msg' => '¡Atención! la Sección ya existe, ingrese otra.');
				} else {
					$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
				}
			}

			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}
		die();
    }


    public function delSeccion_config()
	{
	
		if ($_POST) {

			$id_seccion = intval($_POST['id_seccion']);
			
			$requestDelete = $this->model->deleteSeccion_config($id_seccion);
			if ($requestDelete == 'ok') {

				$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la Sección');
			} else if ($requestDelete == 'exist') {
				$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar la Sección asociada a los estudiantes.');
			} else {
				$arrResponse = array('status' => false, 'msg' => 'Error al eliminar la Sección.');
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

		}
		die();
	}

	public function getSelectSecciones_config()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectSecciones_config();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_desc_seccion'].'">'.$arrData[$i]['nombre_seccion'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getSelectNombre_docente()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectNombre_docente();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_docentes'].'">'.$arrData[$i]['nombre_completo'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}


}
?>