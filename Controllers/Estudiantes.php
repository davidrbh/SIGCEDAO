<?php
/**
 * Clases que representa estudiantes.
 * ----------------------------------
 * Class that represents estudiantes.
 */
class Estudiantes extends Controllers
{
    /**
     * Summary of __construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * la función estudiantes() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function estudiantes() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */

    public function estudiantes()
    {

        $data['page_id'] = 9;
        $data['page_tag'] = "Estudiantes - SIGCEDAO";
        $data['page_name'] = "ESTUDIANTES - SIGCEDAO";
        $data['page_title'] = "Estudiantes";
        $data['page_functions_js'] = "functions_estudiantes.js";

        $this->views->getView($this, "estudiantes", $data);
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

        public function setEstudiante()
        {
            dep($_POST);
        }

        public function setPre_escolar(){
            dep($_POST);
        }
}






?>