<?php
class Personal_administrativo extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

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