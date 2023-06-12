<?php
/**
 * Clase que representa los representantes.
 * -------------------------------------------------
 * Class that represents representantes.
 */
class Representantes extends Controllers
{
    /**
     * Summary of __contruct
     */
    public function __construct()
    {
        parent::__construct();

    }
    /**
     * la función planillas() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function planillas() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */

    public function representantes()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "Representantes - SIGCEDAO";
        $data['page_name'] = "REPRESENTANTES - SIGCEDAO";
        $data['page_title'] = "Representantes";
        $data['page_functions_js'] = "functions_representantes.js";

        $this->views->getView($this, "representantes", $data);
    }
}
?>