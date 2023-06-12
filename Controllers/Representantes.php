<?php 
class Representantes extends Controllers{
    public function __construct(){
		parent::__construct();
		
}
public function representantes(){
    $data['page_id'] = 10;
    $data['page_tag'] = "Representantes - SIGCEDAO";
    $data['page_name'] = "REPRESENTANTES - SIGCEDAO";
    $data['page_title'] = "Representantes";
    $data['page_functions_js'] = "functions_representantes.js";

    $this->views->getView($this, "representantes", $data);
}
}
?>