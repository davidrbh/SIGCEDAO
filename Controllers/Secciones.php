<?php 
class Secciones extends Controllers{
    public function __construct(){
		parent::__construct();
	
}

public function secciones(){
    $data['page_id'] = 5;
    $data['page_tag'] = "Secciones - SIGCEDAO";
    $data['page_name'] = "SECCIONES - SIGCEDAO";
    $data['page_title'] = "Secciones";
    $data['page_functions_js'] = "functions_secciones.js";

    $this->views->getView($this, "secciones", $data);
}

}
?>