<?php
class Especialidad extends Controllers{
    public function __construct(){
        parent::__construct();
    }

    public function especialidad(){
        
        $data['page_id'] = 8;
        $data['page_tag'] = "Especialidades - SIGCEDAO";
        $data['page_name'] = "ESPECIALIDADES - SIGCEDAO";
        $data['page_title'] = "Especialidades";
        $data['page_functions_js'] = "functions_especialidad.js";

        $this->views->getView($this, "especialidad", $data);
    }
}

?>