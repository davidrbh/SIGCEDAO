<?php
class Docentes extends Controllers
{
    public function __contruc()
    {
        parent::__construct();
    }


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