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
        parent::__construct();
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
}

?>