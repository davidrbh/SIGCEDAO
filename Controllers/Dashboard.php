<?php
/**
 * Clase que representa el Dashboard.
 */
class Dashboard extends Controllers
{
    /**
     * Summary of __construct
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * la función dashboard() se utiliza para cargar la vista a traves de la function "getView" dashboard.php y 
     * pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     */
    public function dashboard()
    {
        $data['page_id'] = 2;
        $data['page_tag'] = "Dashboard - SIGCEDAO";
        $data['page_title'] = "Bienvenido - SIGCEDAO";
        $data['page_name'] = "dashboard";
        $data['page_functions_js'] = "functions_dashboard.js";


        $this->views->getView($this, "dashboard", $data);
    }


}



?>