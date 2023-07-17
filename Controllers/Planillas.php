<?php
/**
 * Clase que representa las planillas.
 * -----------------------------------
 * Class that represents planillas. 
 */
class Planillas extends Controllers
{
	/**
	 * Summary of __construct
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

	/**
	 * la función planillas() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
	 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 * The function planillas() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
	 */

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