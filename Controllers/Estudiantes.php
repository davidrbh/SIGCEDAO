<?php
/**
 * Clases que representa estudiantes.
 * ----------------------------------
 * Class that represents estudiantes.
 */
class Estudiantes extends Controllers
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
     * la función estudiantes() se utiliza para cargar la vista a traves de la function "getView" roles.php y pasarle algunos datos específicos para que pueda ser renderizada correctamente.
     * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * The function estudiantes() is used to load the view through the getView() function, passing specific data so that it can be rendered correctly in the roles.php view.
     */

    public function estudiantes()
    {

        $data['page_id'] = 9;
        $data['page_tag'] = "Estudiantes - SIGCEDAO";
        $data['page_name'] = "ESTUDIANTES - SIGCEDAO";
        $data['page_title'] = "Estudiantes";
        $data['page_functions_js'] = "functions_estudiantes.js";

        $this->views->getView($this, "estudiantes", $data);
    }

    /**
     * La funcion getSelectEstados() se usa para generar dinámicamente opciones de selección HTML a partir de los datos obtenidos desde una base de datos, en este caso, de los estados de Venezuela.
     */

     public function getSelectEstados()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectEstados();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_estado'].'">'.$arrData[$i]['desc_estado'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

        public function setEstudiante()
        {
			//dep($_POST);
			if ($_POST) {

				$id_estudiante = intval($_POST['idEstudiante']);
				
				$strNombre1 = $_POST['nombre_alumno1'];
				$strNombre2 = $_POST['nombre_alumno2'];
				$strApellido1 = $_POST['apellido_alumno1'];
				$strApellido2 = $_POST['apellido_alumno2'];
				$intCedula_escolar = $_POST['cedula_escolar'];
				$fecha_nac = $_POST['fecha_nac'];
				$intGenero = $_POST['listGenero'];
				$intNacionalidad = $_POST['listNacionalidad'];
				$selectEstadoid = $_POST['selectEstadoid'];

				$lugar_nacimiento = $_POST['lugar_nacimiento'];
				$direccion_habitacion = $_POST['direccion_habitacion'];
				$nombre_madre = $_POST['nombre_madre'];
				$apellido_madre = $_POST['apellido_madre'];
				$listNacionalidad_madre = $_POST['listNacionalidad_madre'];
				$cedula_madre = $_POST['cedula_madre'];
				$ocupacion_madre = $_POST['ocupacion_madre'];
				$telefono_madre = $_POST['telefono_madre'];
				$nombre_padre = $_POST['nombre_padre'];
				$apellido_padre = $_POST['apellido_padre'];

				$listNacionalidad_padre = $_POST['listNacionalidad_padre'];
				$cedula_padre = $_POST['cedula_padre'];
				$ocupacion_padre = $_POST['ocupacion_padre'];
				$telefono_padre = $_POST['telefono_padre'];
				$nombre_repre = $_POST['nombre_repre'];
				$apellido_repre = $_POST['apellido_repre'];
				$listNacionalidad_rep = $_POST['listNacionalidad_rep'];
				$cedula_repre = $_POST['cedula_repre'];
				$listParentesco = $_POST['listParentesco'];
				$ocupacion_repre = $_POST['ocupacion_repre'];

				$telefono_repre = $_POST['telefono_repre'];
				$celular_repre = $_POST['celular_repre'];
				$direccion_repre = $_POST['direccion_repre'];
				$colaboracion_plantel = $_POST['colaboracion_plantel'];
				$plantel = $_POST['plantel'];
				$listGrado_cursado = $_POST['listGrado_cursado'];
				$Periodo_anterior = $_POST['periodo-escolar-anterior'];
				$literal = $_POST['literal'];
				$listRepitiente = $_POST['listRepitiente'];
				$listTipo_alumno = $_POST['listTipo_alumno'];

				$listTurno = $_POST['listTurno'];
				$selectSeccionid = $_POST['selectSeccionid'];
				$periodo_nuevo = $_POST['periodo-escolar-actual'];
				$funcionario = $_POST['funcionario'];
				$fecha_inscripcion = $_POST['fecha_inscripcion'];
				$listPadece_enfermedad = $_POST['listPadece_enfermedad'];
				$enfermedad_padece = $_POST['enfermedad_padece'] ? $_POST['enfermedad_padece'] : "No padece de enfermedad";
				$listTratamiento = $_POST['listTratamiento'] ? $_POST['listTratamiento'] : "No";
				$tratamiento = $_POST['tratamiento'] ? $_POST['tratamiento'] : "Ninguno";
				$listAlergico_medicamento = $_POST['listAlergico_medicamento'];
				
				$medicamento = $_POST['medicamento'] ? $_POST['medicamento'] : "Ninguno";
				$checkRubeola = $_POST['checkRubeola'];
				$checkSarampion = $_POST['checkSarampion'];
				$checkLechina = $_POST['checkLechina'];
				$checkPapera = $_POST['checkPapera'];
				$checkOtra = $_POST['checkOtra'];
				$otra_enfermedad_cual = $_POST['otra_enfermedad_cual'] ? $_POST['otra_enfermedad_cual'] : "Ninguna";
				$checkNinguna = $_POST['checkNinguna'];
				$listPsicologo = $_POST['listPsicologo'];
				$nacimiento_parto = $_POST['nacimiento_parto'];

				$listSeva_solo = $_POST['listSeva_solo'];
				$autorizada_retirarlo = $_POST['autorizada_retirarlo'];
				$listParentesco_retiro = $_POST['listParentesco_retiro'];
				$checkMadre = $_POST['checkMadre'];
				$checkPadre = $_POST['checkPadre'];
				$checkHermano = $_POST['checkHermano'];
				$checkOtro = $_POST['checkOtro'];
				$alumnoVive_otra = $_POST['alumnoVive_otra'] ? $_POST['alumnoVive_otra'] : "No" ;
				$cuantos_hermanos = $_POST['cuantos_hermanos'] ? $_POST['cuantos_hermanos'] : 0;
				$cuantos_hermanas = $_POST['cuantos_hermanas'] ? $_POST['cuantos_hermanas'] : 0;
				
				$listHermano_plantel = $_POST['listHermano_plantel'];				
				$hermanos_plantel = $_POST['hermanos_plantel'] ? $_POST['hermanos_plantel'] : null;
				$grado_hermanos = $_POST['grado_hermanos'] ? $_POST['grado_hermanos'] : null;
				$turno_hermanos = $_POST['turno_hermanos'] ? $_POST['turno_hermanos'] : null;
				$listVivienda = $_POST['listVivienda'];
				$listCondicion_vivienda = $_POST['listCondicion_vivienda'];
				$ingreso_familia = $_POST['ingreso_familia'];
				$ingreso_numeroPersona = $_POST['ingreso_numeroPersona'];
				$checkBoletin = $_POST['checkBoletin'];
				$checkPromocion = $_POST['checkPromocion'];
				
				$checkconducta = $_POST['checkconducta'];
				$checkPartida = $_POST['checkPartida'];
				$checkCedulaAlumno = $_POST['checkCedulaAlumno'];
				$checkCedulaRepre = $_POST['checkCedulaRepre'];
				$checkFotosAlumno = $_POST['checkFotosAlumno'];
				$checkFotosRepre = $_POST['checkFotosRepre'];
				$checkBoletinGrado = $_POST['checkBoletinGrado'];
				$checkOtrosDocumentos = $_POST['checkOtrosDocumentos'];
				$otros_documentos = $_POST['otros_documentos'] ? $_POST['otros_documentos']  : null;
				$listStatus = $_POST['listStatus'];
	
				

				if (empty($strNombre1) || 
					empty($strApellido1) || 
					empty($intCedula_escolar) ||
					empty($lugar_nacimiento) || 
					empty($direccion_habitacion) ||
					empty($nombre_madre) ||
					empty($cedula_madre) ||
				    empty($nombre_padre) || 
					empty($cedula_padre) ||
					empty($nombre_repre) ||
					empty($cedula_repre) ||
					empty($telefono_repre) ||
					empty($direccion_repre) ||
					empty($literal)) {
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				} else {
	
	
					if ($id_estudiante == 0) {
						$option = 1;
	
						$request_estudiante = $this->model->insertEstudiante(
							ucwords(strClean($strNombre1)),
							ucwords(strClean($strNombre2)),
							ucwords(strClean($strApellido1)),
							ucwords(strClean($strApellido2)),
							$intCedula_escolar,
							$fecha_nac,
							$intGenero,
							$intNacionalidad,
							$selectEstadoid,
							ucwords(strClean($lugar_nacimiento)),
							
							ucwords(strClean($direccion_habitacion)),
							ucwords(strClean($nombre_madre)),
							ucwords(strClean($apellido_madre)),
							$listNacionalidad_madre,
							$cedula_madre,
							ucwords(strClean($ocupacion_madre)),
							$telefono_madre,
							ucwords(strClean($nombre_padre)),
							ucwords(strClean($apellido_padre)),
							$listNacionalidad_padre,

							$cedula_padre,
							ucwords(strClean($ocupacion_padre)),
							$telefono_padre,
							ucwords(strClean($nombre_repre)),
							ucwords(strClean($apellido_repre)),
							$listNacionalidad_rep,
							$cedula_repre,
							$listParentesco,
							ucwords(strClean($ocupacion_repre)),
							$telefono_repre,

							$celular_repre,
							ucwords(strClean($direccion_repre)),
							ucwords(strClean($colaboracion_plantel)),
							$plantel,
							$listGrado_cursado,
							$Periodo_anterior,
							ucwords(strClean($literal)),
							$listRepitiente,
							$listTipo_alumno,
							$listTurno,

							$selectSeccionid,
							$periodo_nuevo,
							$funcionario,
							$fecha_inscripcion,
							$listPadece_enfermedad,
							ucwords(strClean($enfermedad_padece)),
							$listTratamiento,
							ucwords(strClean($tratamiento)),
							$listAlergico_medicamento,
							ucwords(strClean($medicamento)),
							$checkRubeola,

							$checkSarampion,
							$checkLechina,
							$checkPapera,
							$checkOtra,
							$otra_enfermedad_cual,
							$checkNinguna,
							$listPsicologo,
							$nacimiento_parto,
							$listSeva_solo,
							ucwords(strClean($autorizada_retirarlo)),

							$listParentesco_retiro,
							$checkMadre,
							$checkPadre,
							$checkHermano,
							$checkOtro,
							$alumnoVive_otra,
							$cuantos_hermanos,
							$cuantos_hermanas,
							$listHermano_plantel,
							$hermanos_plantel,

							$grado_hermanos,
							$turno_hermanos,
							$listVivienda,
							$listCondicion_vivienda,
							$ingreso_familia,
							$ingreso_numeroPersona,
							$checkBoletin,
							$checkPromocion,
							$checkconducta,
							$checkPartida,

							$checkCedulaAlumno,
							$checkCedulaRepre,
							$checkFotosAlumno,
							$checkFotosRepre,
							$checkBoletinGrado,
							$checkOtrosDocumentos,
							$otros_documentos,
							$listStatus
						);
	
					} else {
						$option = 2;
				
						$request_estudiante = $this->model->updateEstudiante(
							intval($id_estudiante),
							ucwords(strClean($strNombre1)),
							ucwords(strClean($strNombre2)),
							ucwords(strClean($strApellido1)),
							ucwords(strClean($strApellido2)),
							$intCedula_escolar,
							$fecha_nac,
							$intGenero,
							$intNacionalidad,
							$selectEstadoid,
							ucwords(strClean($lugar_nacimiento)),
							
							ucwords(strClean($direccion_habitacion)),
							ucwords(strClean($nombre_madre)),
							ucwords(strClean($apellido_madre)),
							$listNacionalidad_madre,
							$cedula_madre,
							ucwords(strClean($ocupacion_madre)),
							$telefono_madre,
							ucwords(strClean($nombre_padre)),
							ucwords(strClean($apellido_padre)),
							$listNacionalidad_padre,

							$cedula_padre,
							ucwords(strClean($ocupacion_padre)),
							$telefono_padre,
							ucwords(strClean($nombre_repre)),
							ucwords(strClean($apellido_repre)),
							$listNacionalidad_rep,
							$cedula_repre,
							$listParentesco,
							ucwords(strClean($ocupacion_repre)),
							$telefono_repre,

							$celular_repre,
							ucwords(strClean($direccion_repre)),
							ucwords(strClean($colaboracion_plantel)),
							$plantel,
							$listGrado_cursado,
							$Periodo_anterior,
							ucwords(strClean($literal)),
							$listRepitiente,
							$listTipo_alumno,
							$listTurno,

							$selectSeccionid,
							$periodo_nuevo,
							$funcionario,
							$fecha_inscripcion,
							$listPadece_enfermedad,
							ucwords(strClean($enfermedad_padece)),
							$listTratamiento,
							ucwords(strClean($tratamiento)),
							$listAlergico_medicamento,
							ucwords(strClean($medicamento)),
							$checkRubeola,

							$checkSarampion,
							$checkLechina,
							$checkPapera,
							$checkOtra,
							$otra_enfermedad_cual,
							$checkNinguna,
							$listPsicologo,
							$nacimiento_parto,
							$listSeva_solo,
							ucwords(strClean($autorizada_retirarlo)),

							$listParentesco_retiro,
							$checkMadre,
							$checkPadre,
							$checkHermano,
							$checkOtro,
							$alumnoVive_otra,
							$cuantos_hermanos,
							$cuantos_hermanas,
							$listHermano_plantel,
							$hermanos_plantel,

							$grado_hermanos,
							$turno_hermanos,
							$listVivienda,
							$listCondicion_vivienda,
							$ingreso_familia,
							$ingreso_numeroPersona,
							$checkBoletin,
							$checkPromocion,
							$checkconducta,
							$checkPartida,

							$checkCedulaAlumno,
							$checkCedulaRepre,
							$checkFotosAlumno,
							$checkFotosRepre,
							$checkBoletinGrado,
							$checkOtrosDocumentos,
							$otros_documentos,
							$listStatus
						 );
	
	
					}
	
	
	
					if ($request_estudiante > 0) {
						if ($option == 1) {
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						} else {
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					} else if ($request_estudiante == false) {
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el estudiante ya existe, ingrese otra.');
					} else {
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
	
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
			die();

		


			
			
			
			
	
		}
			
        

        public function getNombreDocente($id)
		{
			$htmlOptions = "";
			$intId = ($_POST['id']);
			$arrData = $this->model->selectNombreDocente($intId);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_seccion'].'">'.$arrData[$i]['nombre_completo'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getPeriodo($id)
		{
			$htmlOptions = "";
			$intId = ($_POST['id']);
			$arrData = $this->model->selectPeriodo($intId);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['periodo_escolar'].'">'.$arrData[$i]['periodo_escolar'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

        public function getSelectSecciones($id)
		{
			
			
			$htmlOptions = "";
            $intTurno = ($_POST['id']);
			$arrData = $this->model ->selectSecciones($intTurno);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_seccion'].'">'.$arrData[$i]['nombre_seccion'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getEstudiantes()
		{
			$arrData = $this->model->selectEstudiantes();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}
			if ($arrData[$i]['turno'] == 1) {
				$arrData[$i]['turno'] = 'Diurno';
			}else{
				$arrData[$i]['turno'] ='Vespertino' ;
			}
			if ($arrData[$i]['genero']== 1){
				$arrData[$i]['genero'] = 'Masculino';
			}else{
				$arrData[$i]['genero'] = 'Femenino';
			}if ($arrData[$i]['nacionalidad_alumno']== 1){
				$arrData[$i]['nacionalidad_alumno'] = 'Venezolana';
			}else{
				$arrData[$i]['nacionalidad_alumno'] = 'Extranjera';
			}if ($arrData[$i]['repitiente']== 1){
				$arrData[$i]['repitiente'] = 'Si';
			}else{
				$arrData[$i]['repitiente'] = 'No';
			}if ($arrData[$i]['enfermedad_padece']== 1){
				$arrData[$i]['enfermedad_padece'] = 'Si';
			}else{
				$arrData[$i]['enfermedad_padece'] = 'No';
			}if ($arrData[$i]['enfermedad_1']== ""){
				$arrData[$i]['enfermedad_1'] = 'No padece de enfermedad';
			}else{
				$arrData[$i]['enfermedad_1'] == $arrData[$i]['enfermedad_1'];
			}if ($arrData[$i]['tratamiento_enfermedad']== 1){
				$arrData[$i]['tratamiento_enfermedad'] = 'Si';
			}else{
				$arrData[$i]['tratamiento_enfermedad'] = 'No';
			}if ($arrData[$i]['tratamiento_1']== ""){
				$arrData[$i]['tratamiento_1'] = 'Ninguno';
			}else{
				$arrData[$i]['tratamiento_1'] == $arrData[$i]['tratamiento_1'];
			}if ($arrData[$i]['alergico_medicamento']== 1){
				$arrData[$i]['alergico_medicamento'] = 'Si';
			}else{
				$arrData[$i]['alergico_medicamento'] = 'No';
			}if ($arrData[$i]['alergico_1']== ""){
				$arrData[$i]['alergico_1'] = 'Ninguno';
			}else{
				$arrData[$i]['alergico_1'] == $arrData[$i]['alergico_1'] ;
			}if ($arrData[$i]['rubeola']== 1){
				$arrData[$i]['rubeola'] = 'Si padecio';
			}else{
				$arrData[$i]['rubeola'] = 'No padecio' ;
			}if ($arrData[$i]['sarampion']== 1){
				$arrData[$i]['sarampion'] = 'Si padecio';
			}else{
				$arrData[$i]['sarampion'] = 'No padecio' ;
			}if ($arrData[$i]['lechina']== 1){
				$arrData[$i]['lechina'] = 'Si padecio';
			}else{
				$arrData[$i]['lechina'] ='No padecio';
			}if ($arrData[$i]['paperas']== 1){
				$arrData[$i]['paperas'] = 'Si padecio';
			}else{
				$arrData[$i]['paperas'] ='No padecio' ;
			}if ($arrData[$i]['otra_enfermedad']== 1){
				$arrData[$i]['otra_enfermedad'] = 'Si';
			}else{
				$arrData[$i]['otra_enfermedad'] ='No' ;
			}if ($arrData[$i]['ninguna_enfermedad']== 1){
				$arrData[$i]['ninguna_enfermedad'] = 'Ninguna enfermedad';
			}else{
				$arrData[$i]['ninguna_enfermedad'] ='Estuvo enfermo' ;
			}if ($arrData[$i]['psicologo']== 1){
				$arrData[$i]['psicologo'] = 'Si';
			}else{
				$arrData[$i]['psicologo'] ='No' ;
			}

			if ($arrData[$i]['alumno_seva_solo']== 1){
				$arrData[$i]['alumno_seva_solo'] = 'Si';
			}else{
				$arrData[$i]['alumno_seva_solo'] ='No' ;
			}

			if ($arrData[$i]['vive_madre']== 1){
				$arrData[$i]['vive_madre'] = 'Si';
			}else{
				$arrData[$i]['vive_madre'] ='No' ;
			}

			if ($arrData[$i]['vive_padre']== 1){
				$arrData[$i]['vive_padre'] = 'Si';
			}else{
				$arrData[$i]['vive_padre'] ='No' ;
			}

			if ($arrData[$i]['vive_hermanos']== 1){
				$arrData[$i]['vive_hermanos'] = 'Si';
			}else{
				$arrData[$i]['vive_hermanos'] ='No' ;
			}

			if ($arrData[$i]['vive_otra_persona']== 1){
				$arrData[$i]['vive_otra_persona'] = 'Si';
			}else{
				$arrData[$i]['vive_otra_persona'] ='No' ;
			}

			if ($arrData[$i]['hermanos_plantel']== 1){
				$arrData[$i]['hermanos_plantel'] = 'Si';
			}else{
				$arrData[$i]['hermanos_plantel'] ='No' ;
			}

			if ($arrData[$i]['cuantos_hermanos_plantel']== ""){
				$arrData[$i]['cuantos_hermanos_plantel'] = 'Ninguno';
			}else{
				$arrData[$i]['cuantos_hermanos_plantel'] == $arrData[$i]['cuantos_hermanos_plantel'];
			}

			if ($arrData[$i]['grado_cursanHermanos']== ""){
				$arrData[$i]['grado_cursanHermanos'] = 'Ninguno';
			}else{
				$arrData[$i]['grado_cursanHermanos'] == $arrData[$i]['grado_cursanHermanos'];
			}

			if ($arrData[$i]['turno_cursanHermanos']== ""){
				$arrData[$i]['turno_cursanHermanos'] = 'Ninguno';
			}else{
				$arrData[$i]['turno_cursanHermanos'] == $arrData[$i]['turno_cursanHermanos'] ;
			}

			if ($arrData[$i]['boletin_calificacion']== 1){
				$arrData[$i]['boletin_calificacion'] = 'Si';
			}else{
				$arrData[$i]['boletin_calificacion'] ='No' ;
			}

			if ($arrData[$i]['boletin_promocion']== 1){
				$arrData[$i]['boletin_promocion'] = 'Si';
			}else{
				$arrData[$i]['boletin_promocion'] ='No' ;
			}

			if ($arrData[$i]['carta_conducta']== 1){
				$arrData[$i]['carta_conducta'] = 'Si';
			}else{
				$arrData[$i]['carta_conducta'] ='No' ;
			}

			if ($arrData[$i]['copia_partida_nac']== 1){
				$arrData[$i]['copia_partida_nac'] = 'Si';
			}else{
				$arrData[$i]['copia_partida_nac'] ='No' ;
			}

			if ($arrData[$i]['copia_cedula_alumno']== 1){
				$arrData[$i]['copia_cedula_alumno'] = 'Si';
			}else{
				$arrData[$i]['copia_cedula_alumno'] ='No' ;
			}

			if ($arrData[$i]['copia_cedula_repre']== 1){
				$arrData[$i]['copia_cedula_repre'] = 'Si';
			}else{
				$arrData[$i]['copia_cedula_repre'] ='No' ;
			}

			if ($arrData[$i]['foto_alumno']== 1){
				$arrData[$i]['foto_alumno'] = 'Si';
			}else{
				$arrData[$i]['foto_alumno'] ='No' ;
			}

			if ($arrData[$i]['foto_repre']== 1){
				$arrData[$i]['foto_repre'] = 'Si';
			}else{
				$arrData[$i]['foto_repre'] ='No' ;
			}

			if ($arrData[$i]['boletin_grado']== 1){
				$arrData[$i]['boletin_grado'] = 'Si';
			}else{
				$arrData[$i]['boletin_grado'] ='No' ;
			}

			if ($arrData[$i]['otros_documentos']== 1){
				$arrData[$i]['otros_documentos'] = 'Si';
			}else{
				$arrData[$i]['otros_documentos'] ='No' ;
			}

			if ($arrData[$i]['documentos_1']== ""){
				$arrData[$i]['documentos_1'] = 'Ninguno';
			}else{
				$arrData[$i]['documentos_1'] == $arrData[$i]['documentos_1'] ;
			}

		

			
			
			$arrData[$i]['nombre_repre'] =   $arrData[$i]['nombre_repre'].' '.$arrData[$i]['apellido_repre'];


			$btnView = '<button class="btn btn-info btn-sm btnViewEstudiante" onClick="ftnViewEstudiante(' . $arrData[$i]['id_estudiante'] . ')" title="Ver Estudiante"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditEstudiante" onClick="fntEditEstudiante(' . $arrData[$i]['id_estudiante'] . ')" title="Editar Estudiante"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			//$btnDelete = '<button class="btn btn-danger btn-sm btnDelEstudiante" onClick="fntDelEstudiante(' . $arrData[$i]['id_estudiante'] . ')" title="Eliminar Estudiante"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();
		}

		// public function delEstudiante()
		// {
		// 	if ($_POST) {
	
		// 		$intId_estudiante = intval($_POST['id_estudiante']);
		// 		$requestDelete = $this->model->deleteEstudiante($intId_estudiante);
		// 		if ($requestDelete == 'ok') {
	
		// 			$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado al Estudiante');
		// 		} else if ($requestDelete == 'exist') {
		// 			$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar al estudiante asociado a una sección.');
		// 		} else {
		// 			$arrResponse = array('status' => false, 'msg' => 'Error al eliminar al estudiante.');
		// 		}
		// 		echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
	
		// 	}
		// 	die();
		// }

		public function getEstudiante(int $intId_estudiante)
	{

		$intId_estudiante = intval($intId_estudiante);
		if ($intId_estudiante > 0) {
			$arrData = $this->model->selectEstudiante($intId_estudiante);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}


	public function getEstudiante_1(int $intId_estudiante)
	{


		$intId_estudiante = intval($intId_estudiante);
		if ($intId_estudiante > 0) {
			
			$arrData = $this->model->selectEstudiante_1($intId_estudiante);
			if (empty($arrData)) {
				$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
			} else {
				$arrResponse = array('status' => true, 'data' => $arrData);
			}
			echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
		}

		die();
	}
	
	










        
}






?>