<?php 

	class Errors extends Controllers{
		public function __construct()
		{
			//sessionStart();
			parent::__construct();
			if(empty($_SESSION['login']))
			{
				header('location:' .base_url() .'/login');
			}
		}

		public function notFound()
		{
			$this->views->getView($this,"error");
		}
	}

	$notFound = new Errors();
	$notFound->notFound();
 ?>

