<?php

/**
 * Clase que representa Docentes.
 * -------------------------------
 * Class that represents Docentes.
 */
class Docentes extends Controllers
{
    /**
     * summary of __construct
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
     * la función docentes() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function docentes() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */
    public function docentes()
    {
        $data['page_id'] = 7;
        $data['page_tag'] = "Docentes - SIGCEDAO";
        $data['page_name'] = "DOCENTES - SIGCEDAO";
        $data['page_title'] = "Docentes";
        $data['page_functions_js'] = "functions_docentes.js";

        $this->views->getView($this, "docentes", $data);
    }


    public function getDocentes()
	{

		$arrData = $this->model->selectDocentes();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			


			$btnView = '<button class="btn btn-info btn-sm btnViewDocente" onClick="ftnViewDocente(' . $arrData[$i]['id_docentes'] . ')" title="Ver Docente"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditDocente" onClick="fntEditDocente(' . $arrData[$i]['id_docentes'] . ')" title="Editar Docente"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			$btnDelete = '<button class="btn btn-danger btn-sm btnDelDocente" onClick="fntDelDocente(' . $arrData[$i]['id_docentes'] . ')" title="Eliminar Docente"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();

	}

    public function getDocente(int $intId_docente)
	{

		$intId_docente = intval(strClean($intId_docente));
		if ($intId_docente > 0) {
			$arrData = $this->model->selectEspecialidad($intId_docente);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}


	public function getSelectEspecialidad()
	{
		$htmlOptions = "";
		$arrData = $this->model->selectEspecialidad();
		if(count($arrData) > 0 ){
			for ($i=0; $i < count($arrData); $i++) { 
				
				$htmlOptions .= '<option value="'.$arrData[$i]['id_especialidad'].'">'.$arrData[$i]['nombre_especialidad'].'</option>';
				
			}
		}
		echo $htmlOptions;
		die();		
	}

	



}


?>