<?php 

	class Usuarios extends Controllers {

		public function __construct()
		{
			
			parent::__construct();
		
			
		}

		public function usuarios()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Usuarios - SIGCEDAO";
			$data['page_name'] = "usuarios - SIGCEDAO";
			$data['page_title'] = "Usuarios";
			$data['page_functions_js'] = "functions_usuarios.js";
			
			$this->views->getView($this,"usuarios",$data);
		}

		public function getUsuarios()
		{	
			
			$arrData = $this->model->selectUsuarios();

			for ($i=0; $i < count($arrData); $i++) 
			{
				$btnView = '';
				$btnEdit = '';
				$btnDelete = '';

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				
					$btnView = '<button class="btn btn-info btn-sm btnViewUsuario" onClick="ftnViewUsuario('.$arrData[$i]['id_usuario'].')" title="Ver Usuario"><i class="fa fa-eye" aria-hidden="true"></i></button>';
				

				
					
					$btnEdit ='<button class="btn btn-primary btn-sm btnEditUsuario" onClick="fntEditUsuario('.$arrData[$i]['id_usuario'].')" title="Editar Usuario"><i class="fas fa-pencil-alt"></i></button>';
					
						//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';
					
				

				
			
					$btnDelete = '<button class="btn btn-danger btn-sm btnDelUsuario" onClick="fntDelUsuario('.$arrData[$i]['id_usuario'].')" title="Eliminar Usuario"><i class="far fa-trash-alt"></i></button>';
			    
						//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';
					
				
			



				$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>' ;
			}

			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
		
			die();

		}

		public function getUsuario ( $id_usuario)
		{
			
			$idUser = intval($id_usuario);
			if($idUser > 0)
			{
				$arrData = $this->model->selectUsuario($idUser);
				if(empty($arrData))
				{
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				}else{
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
		
			die();
		}


		public function setUsuario()
		{

		
			//////////////////***********
			

			if($_POST){

				if(empty($_POST['txtCedula']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listRolid']) || empty($_POST['listStatus']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{

					$id_usuario = intval($_POST['id_Usuario']);
					$intCedula = ($_POST['txtCedula']);
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellido = ucwords(strClean($_POST['txtApellido']));
					$intTelefono = ($_POST['txtTelefono']);
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$intUsuario = intval($_POST['listRolid']);
					$intStatus = strtolower(strClean($_POST['listStatus']));

					if($id_usuario == 0)
					{
						$option = 1;
					
					$strPassword =  empty($_POST['txtPassword']) ? hash("SHA256",passGenerator()) : hash("SHA256",$_POST['txtPassword']);

						
						$request_usuario = $this->model->insertUsuario($intCedula,
																			$strNombre, 
																			$strApellido, 
																			$intTelefono, 
																			$strEmail,
																			$strPassword, 
																			$intUsuario, 
																			$intStatus );
					
					}else{
						$option = 2;
						
					
						$strPassword =  empty($_POST['txtPassword']) ? "" : hash("SHA256",$_POST['txtPassword']);
						
						$request_usuario = $this->model->updateUsuario($id_usuario,
																	$intCedula, 
																	$strNombre,
																	$strApellido, 
																	$intTelefono, 
																	$strEmail,
																	$strPassword, 
																	$intUsuario, 
																	$intStatus);

					
				}



					if($request_usuario > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_usuario == false){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la cédula ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}



		public function delUsuario()
		{
			
			if($_POST){
				
				$intId_usuario= intval($_POST['id_usuario']);
				$requestDelete = $this->model->deleteUsuario($intId_usuario);
				if($requestDelete == 'ok')
				{
					
					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Usuario');
				}else if($requestDelete == 'exist'){
					$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar el Usuario.');
				}else{
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Usuario.');
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			
		}
			die();
		}

		public function perfil()
		{
			$data['page_tag'] = "Perfil";
			$data['page_name'] = "perfil";
			$data['page_title'] = "Perfil de usuario ";
			$data['page_functions_js'] = "functions_usuarios.js";
			
			$this->views->getView($this,"perfil",$data);
		}

		public function putPerfil()
		{
			if($_POST){
				if(empty($_POST['txtCedula']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					$id_usuario = $_SESSION['id_User'];
					$strCedula = ($_POST['txtCedula']);
					$strNombre = strClean($_POST['txtNombre']);
					$strApellido = strClean($_POST['txtApellido']);
					$intTelefono = ($_POST['txtTelefono']);
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$strPassword = "";
					if(!empty($_POST['txtPassword'])){
						$strPassword = hash("SHA256",$_POST['txtPassword']);
					}
					$request_user = $this->model->updatePerfil($id_usuario,
																$strCedula, 
																$strNombre,
																$strApellido, 
																$intTelefono, 
																$strPassword);
					if($request_user)
					{
						sessionUser($_SESSION['id_User']);
						
						$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible actualizar los datos.');
					}
				}
				sleep(1);
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
	
 ?>