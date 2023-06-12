<?php 

	class Planillas extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function planillas()
		{
			$data['page_id'] = 11;
			$data['page_tag'] = "Planillas - SIGCEDAO";
			$data['page_name'] = "PLANILLAS - SIGCEDAO";
			$data['page_title'] = "Planillas";
			$data['page_functions_js'] = "functions_planillas.js";
	
			$this->views->getView($this, "planillas", $data);
		}

	}
 ?>