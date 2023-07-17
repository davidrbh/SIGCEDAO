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
}












?>