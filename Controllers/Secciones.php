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
        parent::__construct();

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

}
?>