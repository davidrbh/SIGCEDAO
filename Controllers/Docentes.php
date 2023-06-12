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
        parent::__construct();
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
}







?>