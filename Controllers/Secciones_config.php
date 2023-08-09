<?php
/**
 * Clase que representa a la seccion de configuracion.
 * -------------------------------------------------
 * Class that represents seccion of config.
 */
class Secciones_config extends Controllers
{
    /**
     * Summary of __contruct
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
   

    public function secciones_config()
    {
        $data['page_id'] = 10;
        $data['page_tag'] = "Configuración de secciones - SIGCEDAO";
        $data['page_name'] = "CONFIGUTACION DE SECCIONES - SIGCEDAO";
        $data['page_title'] = "Configuración de secciones";
        $data['page_functions_js'] = "functions_secciones_config.js";

        $this->views->getView($this, "secciones_config", $data);
    }
}
?>