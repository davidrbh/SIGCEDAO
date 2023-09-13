<?php 

class Estudiantes_inicial extends Controllers
{
    public function __construct()
    {
        sessionStart();
        parent::__construct();
        if(empty($_SESSION['login']))
			{
				header('location:' .base_url() .'/login');
			}
    }
    public function estudiantes_inicial()
    {

        $data['page_id'] = 12;
        $data['page_tag'] = "Estudiantes inicial - SIGCEDAO";
        $data['page_name'] = "ESTUDIANTES INICIAL - SIGCEDAO";
        $data['page_title'] = "Estudiantes Inicial";
        $data['page_functions_js'] = "functions_estudiantesInicial.js";

        $this->views->getView($this, "estudiantes_inicial", $data);
    }

    /**
     * La funcion getSelectEstados() se usa para generar dinámicamente opciones de selección HTML a partir de los datos obtenidos desde una base de datos, en este caso, de los estados de Venezuela.
     */

     public function getSelectEstados()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectEstados();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_estado'].'">'.$arrData[$i]['desc_estado'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

        public function setPre_escolar(){
            dep($_POST);
        }

        public function getNombreDocente_inicial($id)
		{
			$htmlOptions = "";
			$intId = ($_POST['id']);
			$arrData = $this->model->selectNombreDocente_inicial($intId);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_seccion'].'">'.$arrData[$i]['nombre_completo'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getPeriodo($id)
		{
			$htmlOptions = "";
			$intId = ($_POST['id']);
			$arrData = $this->model->selectPeriodo($intId);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['periodo_escolar'].'">'.$arrData[$i]['periodo_escolar'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

        public function getSelectSecciones_inicial($id)
		{
			$htmlOptions = "";
            $intTurno = ($_POST['id']);
			$arrData = $this->model ->selectSecciones_inicial($intTurno);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_seccion'].'">'.$arrData[$i]['nombre_seccion'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}


		public function getEstudiantes_inicial()
		{
			$arrData = $this->model->selectEstudiantes_inicial();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}
			if ($arrData[$i]['turno'] == 1) {
				$arrData[$i]['turno'] = 'Diurno';
			}else{
				$arrData[$i]['turno'] ='Vespertino' ;
			}

			$arrData[$i]['nombre_madre'] =   $arrData[$i]['nombre_madre'].' '.$arrData[$i]['apellido_madre'];


			$btnView = '<button class="btn btn-info btn-sm btnViewEstudiante_inicial" onClick="ftnViewEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Ver Estudiante"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditEstudiante_inicial" onClick="fntEditEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Editar Estudiante"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			//$btnDelete = '<button class="btn btn-danger btn-sm btnDelEstudiante_inicial" onClick="fntDelEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Eliminar Estudiante"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();
		}


		public function getEstudiante_inicial(int $intId_estudiante)
		{
	
			$intId_estudiante = intval($intId_estudiante);
			if ($intId_estudiante > 0) {
				$arrData = $this->model->selectEstudiante_inicial($intId_estudiante);
				if (empty($arrData)) {
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				} else {
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
	
			die();
		}
		

}












?>