<?php
/**
 * Clase que representa las sencciones.
 * -----------------------------------
 * Class that represents secciones.
 */
class Secciones extends Controllers
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
     * la función secciones() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function secciones() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */

    public function secciones()
    {
        $data['page_id'] = 5;
        $data['page_tag'] = "Secciones - SIGCEDAO";
        $data['page_name'] = "SECCIONES - SIGCEDAO";
        $data['page_title'] = "Secciones";
        $data['page_functions_js'] = "functions_secciones.js";

        $this->views->getView($this, "secciones", $data);
    }


    public function getSelectSecciones()
    
     {
       
       $periodo =  $_POST['periodo'];
   
       
    
       $grado =  $_POST['grado'];
     
      

            $arrData = $this->model->selectSecciones($periodo,$grado);
         
    
            for ($i = 0; $i < count($arrData); $i++) {
           
    
                if ($arrData[$i]['status'] == 1) {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
                } else {
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }
    
    
            }
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
    
            die();
    }

    public function getSelectTurno($id)
    {
        $htmlOptions = "";
        $intTurno = ($_POST['id']);
        $arrData = $this->model ->selectSecciones_Turno($intTurno);
        if(count($arrData) > 0 ){
            for ($i=0; $i < count($arrData); $i++) { 
                
                $htmlOptions .= '<option value="'.$arrData[$i]['id_desc_seccion'].'">'.$arrData[$i]['nombre_seccion'].'</option>';
                
            }
        }
        echo $htmlOptions;
        die();		
    }

  
}
?>