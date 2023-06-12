<?php
/**
 * Clase que representa el personal_administrativo.
 * ------------------------------------------------
 * Class that represents personal_administrativo.
 */
class Personal_administrativo extends Controllers
{
    /**
     * Summary of __contruct
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * la función personal_administrativo() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function personal_administrativo() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */
    public function personal_administrativo()
    {
        $data['page_id'] = 4;
        $data['page_tag'] = "Personal administrativo - SIGCEDAO";
        $data['page_name'] = "PERSONAL ADMINISTRATIVO - SIGCEDAO";
        $data['page_title'] = "Personal administrativo";
        $data['page_functions_js'] = "functions_personal_administrativo.js";

        $this->views->getView($this, "personal_administrativo", $data);
    }
}



?>