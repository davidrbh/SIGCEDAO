<?php 

class Estudiantes_inicial extends Controllers
{
    public function __construct()
    {
        sessionStart();
        parent::__construct();
        if(empty($_SESSION['login']))
			{
				header('location:' .base_url() .'/login');
			}
    }
    public function estudiantes_inicial()
    {

        $data['page_id'] = 12;
        $data['page_tag'] = "Estudiantes inicial - SIGCEDAO";
        $data['page_name'] = "ESTUDIANTES INICIAL - SIGCEDAO";
        $data['page_title'] = "Estudiantes Inicial";
        $data['page_functions_js'] = "functions_estudiantesInicial.js";

        $this->views->getView($this, "estudiantes_inicial", $data);
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



		public function setPre_escolar()
        {
			//dep($_POST);
			if ($_POST) {

				$id_estudiante = intval($_POST['idPre-escolar']);
				
				$strNombre1 = $_POST['nombre_alumnoPre1'];
				$strNombre2 = $_POST['nombre_alumnoPre2'];
				$strApellido1 = $_POST['apellido_alumnoPre1'];
				$strApellido2 = $_POST['apellido_alumnoPre2'];
				$intCedula_escolar = $_POST['cedula_escolarPre'];
				$fecha_nac = $_POST['fecha_nac_pre'];
				$intGenero = $_POST['listGeneroPre'];
				$intNacionalidad = $_POST['listNacionalidadPre'];
				$selectEstadoid = $_POST['selectEstadoid2'];

				$lugar_nacimiento = $_POST['lugar_nacimientoPre'];
				$listTalla_camisa = $_POST['listTalla_camisa'];
				$listTalla_pantalon = $_POST['listTalla_pantalon'];
				$listTalla_zapato = $_POST['listTalla_zapato'];
				$peso = $_POST['peso'];
				$estatura = $_POST['estatura'];
				$listHermanosPre = $_POST['listHermanosPre'];
				$cuantos_hermanos = $_POST['cuantos_hermanos'];
				$listTipo_alumno_pre = $_POST['listTipo_alumno_pre'];
				$listTurnoPre = $_POST['listTurnoPre'];

				$selectSeccionid = $_POST['selectSeccionid'];
				$periodo_actual = $_POST['periodo-escolar-actual'];
				$funcionario = $_POST['funcionario'];
				$fecha_inscripcion = $_POST['fecha_inscripcion'];
				$nombre_madrePre = $_POST['nombre_madrePre'];
				$apellido_madrePre = $_POST['apellido_madrePre'];
				$listNacionalidad_madrePre_ = $_POST['listNacionalidad_madrePre_'];
				$cedula_madrePre = $_POST['cedula_madrePre'];
				$listEstado_civil_madre = $_POST['listEstado_civil_madre'];
				$lugar_nacimientoMadrePre = $_POST['lugar_nacimientoMadrePre'];

				$listNacionalidad_madrePre = $_POST['listNacionalidad_madrePre'];
				$selectEstadoid3 = $_POST['selectEstadoid3'];
				$fecha_nac_madrePre = $_POST['fecha_nac_madrePre'];
				$direccion_habitacion_madrePre = $_POST['direccion_habitacion_madrePre'];
				$telefono_madrePre = $_POST['telefono_madrePre'];
				$direccion_trabajo_madrePre = $_POST['direccion_trabajo_madrePre'];
				$telefono_madre_trabajo = $_POST['telefono_madre_trabajo'];
				$listNivel_academico_madre = $_POST['listNivel_academico_madre'];
				$otrosDatos_madre = $_POST['otrosDatos_madre'];
				$nombre_padrePre = $_POST['nombre_padrePre'];

				$apellido_padrePre = $_POST['apellido_padrePre'];
				$listNacionalidad_padrePre = $_POST['listNacionalidad_padrePre'];
				$cedula_padrePre = $_POST['cedula_padrePre'];
				$listEstado_civil_padre = $_POST['listEstado_civil_padre'];
				$lugar_nacimientoPadrePre = $_POST['lugar_nacimientoPadrePre'];
				$listNacionalidad_padrePre_ = $_POST['listNacionalidad_padrePre_'];
				$selectEstadoid4 = $_POST['selectEstadoid4'] ? $_POST['selectEstadoid4'] : "AAAAAAAAAA";
				$fecha_nac_padrePre = $_POST['fecha_nac_padrePre'];
				$direccion_habitacion_PadrePre = $_POST['direccion_habitacion_PadrePre'] ;
				$telefono_padrePre = $_POST['telefono_padrePre'];
				
				$direccion_trabajo_padre = $_POST['direccion_trabajo_padre'];
				$telefono_padre_trabajo = $_POST['telefono_padre_trabajo'];
				$listNivel_academico_padre = $_POST['listNivel_academico_padre'];
				$otrosDatos_padre = $_POST['otrosDatos_padre'];
				$listCome_solo = $_POST['listCome_solo'];
				$listLo_ayudan = $_POST['listLo_ayudan'];
				$quien_loayuda = $_POST['quien_loayuda'];
				$comida_prefiere = $_POST['comida_prefiere'];
				$comida_rechaza = $_POST['comida_rechaza'];
				$alimentos_prohibidos = $_POST['alimentos_prohibidos'];

				$listEsfinteres = $_POST['listEsfinteres'];
				$listAsea_solo = $_POST['listAsea_solo'];
				$horas_dormidas = $_POST['horas_dormidas'];
				$tiempo_dedica_madre = $_POST['tiempo_dedica_madre'];
				$tiempo_dedica_padre = $_POST['tiempo_dedica_padre'];
				$tiempo_dedica_abuelo = $_POST['tiempo_dedica_abuelo'];
				$persona_retirarlo = $_POST['persona_retirarlo'];
				$listNacionalidad_retiro = $_POST['listNacionalidad_retiro'] ;
				$cedula_retiro = $_POST['cedula_retiro'];
				$telefono_retiro = $_POST['telefono_retiro'];
				
				$listParentescoPre = $_POST['listParentescoPre'];				
				$embarazo_pre_escolar = $_POST['embarazo_pre_escolar'];
				$problema_embarazo = $_POST['problema_embarazo'] ;	
				$oficio_embarazo = $_POST['oficio_embarazo'];
				$parto_prescolar = $_POST['parto_prescolar'];
				$edad_embarazo = $_POST['edad_embarazo'];
				$listProblema_parto = $_POST['listProblema_parto'];
				$cual_problema_parto = $_POST['cual_problema_parto'];
				$peso_alnacer = $_POST['peso_alnacer'];
				$talla_alnacer = $_POST['talla_alnacer'];
				
				$listProblema_nacimiento = $_POST['listProblema_nacimiento'];
				$cual_problema_nacer = $_POST['cual_problema_nacer'];
				$comenzo_hablar = $_POST['comenzo_hablar'];
				$comenzo_caminar = $_POST['comenzo_caminar'];
				$dejo_panales = $_POST['dejo_panales'];
				$peso_nino = $_POST['peso_nino'];
				$talla_nino = $_POST['talla_nino'];
				$grupo_sanguineo = $_POST['grupo_sanguineo'];
				$listAlergicoPre = $_POST['listAlergicoPre'];
				$Especifique_alergico = $_POST['Especifique_alergico'];

				$enfermeda_padecida_nino = $_POST['enfermeda_padecida_nino'];
				$listHospitalizado = $_POST['listHospitalizado'];
				$alergico_causa = $_POST['alergico_causa'];
				$medicamento_fiebre = $_POST['medicamento_fiebre'];
				$checkMotora = $_POST['checkMotora'];
				$checkCrecimiento = $_POST['checkCrecimiento'];
				$checkAuditiva = $_POST['checkAuditiva'];
				$checkVisual = $_POST['checkVisual'];
				$checkOtra_discapacidad = $_POST['checkOtra_discapacidad'] ;
			
				$discapacidad_otra = $_POST['discapacidad_otra'];
				$listEspecialistas = $_POST['listEspecialistas'];
				$especialista_cual = $_POST['especialista_cual'];
				$listProblema_lenguaje = $_POST['listProblema_lenguaje'];
				$listMano_frecuentemente = $_POST['listMano_frecuentemente'];
				$tiempo_acuesta = $_POST['tiempo_acuesta'];
				$tiempo_selevanta = $_POST['tiempo_selevanta'];
				$listsueno_nino = $_POST['listsueno_nino'];
				$duerme_nino = $_POST['duerme_nino'];
				$informacion_sumisnitrar = $_POST['informacion_sumisnitrar'] ;
				$listStatus = $_POST['listStatus2'];
						
				

				if (empty($strNombre1) || 
					empty($strApellido1) || 
					empty($intCedula_escolar) ||
					empty($lugar_nacimiento) || 
					empty($nombre_madrePre) ||
					empty($apellido_madrePre) ||
				    empty($nombre_padrePre) || 
					empty($cedula_madrePre) ||
					empty($apellido_padrePre) ||
					empty($cedula_padrePre) 
					) {
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				} else {
	
	
					if ($id_estudiante == 0) {
						$option = 1;
	
						$request_estudiante = $this->model->insertEstudiante_inicial(
							
							
				
							ucwords(strClean($strNombre1)) ,
							ucwords(strClean($strNombre2)) ,
							ucwords(strClean($strApellido1)) ,
							ucwords(strClean($strApellido2)) ,
							$intCedula_escolar ,
							$fecha_nac ,
							$intGenero ,
							$intNacionalidad,
							$selectEstadoid ,
			
							strClean($lugar_nacimiento) ,
							$listTalla_camisa ,
							$listTalla_pantalon,
							$listTalla_zapato,
							$peso ,
							$estatura ,
							$listHermanosPre ,
							$cuantos_hermanos ,
							$listTipo_alumno_pre ,
							$listTurnoPre ,
			
							$selectSeccionid ,
							$periodo_actual ,
							$funcionario,					
							$fecha_inscripcion ,
							ucwords(strClean($nombre_madrePre)) ,
							ucwords(strClean($apellido_madrePre)) ,
							$listNacionalidad_madrePre_ ,
							$cedula_madrePre ,
							$listEstado_civil_madre ,
							(strClean($lugar_nacimientoMadrePre)) ,
			
							$listNacionalidad_madrePre ,
							$selectEstadoid3 ,
							$fecha_nac_madrePre ,
							strClean($direccion_habitacion_madrePre) ,
							$telefono_madrePre ,
							strClean($direccion_trabajo_madrePre) ,
							$telefono_madre_trabajo ,
							$listNivel_academico_madre ,
							strClean($otrosDatos_madre) ,
							ucwords(strClean($nombre_padrePre)) ,
			
							ucwords(strClean($apellido_padrePre)) ,
							$listNacionalidad_padrePre ,
							$cedula_padrePre ,
							$listEstado_civil_padre ,
							$lugar_nacimientoPadrePre ,
							$listNacionalidad_padrePre_ ,
							$selectEstadoid4 ,
							$fecha_nac_padrePre ,
							strClean($direccion_habitacion_PadrePre) ,
							$telefono_padrePre ,
							
							strClean($direccion_trabajo_padre) ,
							$telefono_padre_trabajo ,
							$listNivel_academico_padre ,
							strClean($otrosDatos_padre) ,
							$listCome_solo ,
							$listLo_ayudan ,
							strClean($quien_loayuda) ,
							$comida_prefiere ,
							$comida_rechaza ,
							strClean($alimentos_prohibidos) ,
			
							$listEsfinteres ,
							$listAsea_solo ,
							$horas_dormidas ,
							$tiempo_dedica_madre ,
							$tiempo_dedica_padre ,
							$tiempo_dedica_abuelo ,
							ucwords(strClean($persona_retirarlo)) ,
							$listNacionalidad_retiro ,
							$cedula_retiro ,
							$telefono_retiro ,
							
							$listParentescoPre ,				
							$embarazo_pre_escolar ,
							$problema_embarazo ,
							$oficio_embarazo ,
							$parto_prescolar ,
							$edad_embarazo ,
							$listProblema_parto ,
							strClean($cual_problema_parto) ,
							$peso_alnacer ,
							$talla_alnacer ,
							
							$listProblema_nacimiento ,
							strClean($cual_problema_nacer) ,
							$comenzo_hablar ,
							$comenzo_caminar ,
							$dejo_panales ,
							$peso_nino ,
							$talla_nino ,
							ucwords(strClean($grupo_sanguineo)) ,
							$listAlergicoPre ,
							$Especifique_alergico ,
			
							$enfermeda_padecida_nino ,
							$listHospitalizado ,
							$alergico_causa ,
							strClean($medicamento_fiebre) ,
							$checkMotora ,
							$checkCrecimiento ,
							$checkAuditiva ,
							$checkVisual ,
							$checkOtra_discapacidad ,
						
							$discapacidad_otra,
							$listEspecialistas ,
							ucwords(strClean($especialista_cual)) ,
							$listProblema_lenguaje ,
							$listMano_frecuentemente ,
							$tiempo_acuesta ,
							$tiempo_selevanta ,
							$listsueno_nino ,
							$duerme_nino ,
							$informacion_sumisnitrar ,
							$listStatus 
						);
	
					} else {
						$option = 2;
				
						$request_estudiante = $this->model->updateEstudiante_inicial(
							intval($id_estudiante) ,
				
							ucwords(strClean($strNombre1)) ,
							ucwords(strClean($strNombre2)) ,
							ucwords(strClean($strApellido1)) ,
							ucwords(strClean($strApellido2)) ,
							$intCedula_escolar ,
							$fecha_nac ,
							$intGenero ,
							$intNacionalidad,
							$selectEstadoid ,
			
							strClean($lugar_nacimiento) ,
							$listTalla_camisa ,
							$listTalla_pantalon,
							$listTalla_zapato,
							$peso ,
							$estatura ,
							$listHermanosPre ,
							$cuantos_hermanos ,
							$listTipo_alumno_pre ,
							$listTurnoPre ,
			
							$selectSeccionid ,
							$periodo_actual ,
							$funcionario,
							$fecha_inscripcion ,
							ucwords(strClean($nombre_madrePre)) ,
							ucwords(strClean($apellido_madrePre)) ,
							$listNacionalidad_madrePre_ ,
							$cedula_madrePre ,
							$listEstado_civil_madre ,
							(strClean($lugar_nacimientoMadrePre)) ,
			
							$listNacionalidad_madrePre ,
							$selectEstadoid3 ,
							$fecha_nac_madrePre ,
							strClean($direccion_habitacion_madrePre) ,
							$telefono_madrePre ,
							strClean($direccion_trabajo_madrePre) ,
							$telefono_madre_trabajo ,
							$listNivel_academico_madre ,
							strClean($otrosDatos_madre) ,
							ucwords(strClean($nombre_padrePre)) ,
			
							ucwords(strClean($apellido_padrePre)) ,
							$listNacionalidad_padrePre ,
							$cedula_padrePre ,
							$listEstado_civil_padre ,
							$lugar_nacimientoPadrePre ,
							$listNacionalidad_padrePre_ ,
							$selectEstadoid4 ,
							$fecha_nac_padrePre ,
							strClean($direccion_habitacion_PadrePre) ,
							$telefono_padrePre ,
							
							strClean($direccion_trabajo_padre) ,
							$telefono_padre_trabajo ,
							$listNivel_academico_padre ,
							strClean($otrosDatos_padre) ,
							$listCome_solo ,
							$listLo_ayudan ,
							strClean($quien_loayuda) ,
							$comida_prefiere ,
							$comida_rechaza ,
							strClean($alimentos_prohibidos) ,
			
							$listEsfinteres ,
							$listAsea_solo ,
							$horas_dormidas ,
							$tiempo_dedica_madre ,
							$tiempo_dedica_padre ,
							$tiempo_dedica_abuelo ,
							ucwords(strClean($persona_retirarlo)) ,
							$listNacionalidad_retiro ,
							$cedula_retiro ,
							$telefono_retiro ,
							
							$listParentescoPre ,				
							$embarazo_pre_escolar ,
							$problema_embarazo ,
							$oficio_embarazo ,
							$parto_prescolar ,
							$edad_embarazo ,
							$listProblema_parto ,
							strClean($cual_problema_parto) ,
							$peso_alnacer ,
							$talla_alnacer ,
							
							$listProblema_nacimiento ,
							strClean($cual_problema_nacer) ,
							$comenzo_hablar ,
							$comenzo_caminar ,
							$dejo_panales ,
							$peso_nino ,
							$talla_nino ,
							ucwords(strClean($grupo_sanguineo)),
							$listAlergicoPre ,
							$Especifique_alergico ,
			
							$enfermeda_padecida_nino ,
							$listHospitalizado ,
							$alergico_causa ,
							strClean($medicamento_fiebre) ,
							$checkMotora ,
							$checkCrecimiento ,
							$checkAuditiva ,
							$checkVisual ,
							$checkOtra_discapacidad ,
							$discapacidad_otra,
			
							$listEspecialistas ,
							ucwords(strClean($especialista_cual)) ,
							$listProblema_lenguaje ,
							$listMano_frecuentemente ,
							$tiempo_acuesta ,
							$tiempo_selevanta ,
							$listsueno_nino ,
							$duerme_nino ,
							$informacion_sumisnitrar ,
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

        public function getNombreDocente_inicial($id)
		{
			$htmlOptions = "";
			$intId = ($_POST['id']);
			$arrData = $this->model->selectNombreDocente_inicial($intId);
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

        public function getSelectSecciones_inicial($id)
		{
			$htmlOptions = "";
            $intTurno = ($_POST['id']);
			$arrData = $this->model ->selectSecciones_inicial($intTurno);
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					
					$htmlOptions .= '<option value="'.$arrData[$i]['id_seccion'].'">'.$arrData[$i]['nombre_seccion'].'</option>';
					
				}
			}
			echo $htmlOptions;
			die();		
		}


		public function getEstudiantes_inicial()
		{
			$arrData = $this->model->selectEstudiantes_inicial();

		for ($i = 0; $i < count($arrData); $i++) {
			$btnView = '';
			$btnEdit = '';
			$btnDelete = '';

			if ($arrData[$i]['status'] == 1) {
				$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
			} else {
				$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
			}

			if ($arrData[$i]['nombre_alumno2'] == "") {
				$arrData[$i]['nombre_alumno2'] = 'No posee';
			}else{
				$arrData[$i]['nombre_alumno2'] == $arrData[$i]['nombre_alumno2'] ;
			}

			if ($arrData[$i]['apellido_alumno2'] == "") {
				$arrData[$i]['apellido_alumno2'] = 'No posee';
			}else{
				$arrData[$i]['apellido_alumno2'] == $arrData[$i]['apellido_alumno2'] ;
			}

			if ($arrData[$i]['genero'] == 1) {
				$arrData[$i]['genero'] = 'Masculino';
			}else{
				$arrData[$i]['genero'] ='Femenino' ;
			}
			if ($arrData[$i]['nacionalidad_alumno'] == 1) {
				$arrData[$i]['nacionalidad_alumno'] = 'Venezolana';
			}else{
				$arrData[$i]['nacionalidad_alumno'] ='Extranjera' ;
			}

			if ($arrData[$i]['tipo_nacionalidad_padre'] == 1) {
				$arrData[$i]['tipo_nacionalidad_padre'] = 'Venezolana';
			}else{
				$arrData[$i]['tipo_nacionalidad_padre'] ='Extranjera' ;
			}

			if ($arrData[$i]['tiene_hermanos'] == 1) {
				$arrData[$i]['tiene_hermanos'] = 'Si';
			}else{
				$arrData[$i]['tiene_hermanos'] ='No' ;
			}

			if ($arrData[$i]['turno'] == 1) {
				$arrData[$i]['turno'] = 'Diurno';
			}else{
				$arrData[$i]['turno'] ='Vespertino' ;
			}

			if ($arrData[$i]['telefono_trabajo_madre'] == "") {
				$arrData[$i]['telefono_trabajo_madre'] = 'No posee';
			}else{
				$arrData[$i]['telefono_trabajo_madre'] == $arrData[$i]['telefono_trabajo_madre'] ;
			}

			if ($arrData[$i]['telefono_trabajo_padre'] == "") {
				$arrData[$i]['telefono_trabajo_padre'] = 'No posee';
			}else{
				$arrData[$i]['telefono_trabajo_padre'] == $arrData[$i]['telefono_trabajo_padre'] ;
			}

			if ($arrData[$i]['otros_datos_madre'] == "") {
				$arrData[$i]['otros_datos_madre'] = 'Ninguno';
			}else{
				$arrData[$i]['otros_datos_madre'] == $arrData[$i]['otros_datos_madre'] ;
			}

			if ($arrData[$i]['otros_datos_padre'] == "") {
				$arrData[$i]['otros_datos_padre'] = 'Ninguno';
			}else{
				$arrData[$i]['otros_datos_padre'] == $arrData[$i]['otros_datos_padre'] ;
			}

			if ($arrData[$i]['cual_problema_parto'] == "") {
				$arrData[$i]['cual_problema_parto'] = 'Ninguno';
			}else{
				$arrData[$i]['cual_problema_parto'] == $arrData[$i]['cual_problema_parto'] ;
			}

			if ($arrData[$i]['cual_problema'] == "") {
				$arrData[$i]['cual_problema'] = 'Ninguno';
			}else{
				$arrData[$i]['cual_problema'] == $arrData[$i]['cual_problema'] ;
			}

			if ($arrData[$i]['especifique_alergia'] == "") {
				$arrData[$i]['especifique_alergia'] = 'Ninguna';
			}else{
				$arrData[$i]['especifique_alergia'] == $arrData[$i]['especifique_alergia'] ;
			}

			if ($arrData[$i]['causa_hospitalizado'] == "") {
				$arrData[$i]['causa_hospitalizado'] = 'Ninguna';
			}else{
				$arrData[$i]['causa_hospitalizado'] == $arrData[$i]['causa_hospitalizado']  ;
			}

			if ($arrData[$i]['motora'] == 1) {
				$arrData[$i]['motora'] = 'Si';
			}else{
				$arrData[$i]['motora'] ='No' ;
			}

			if ($arrData[$i]['crecimiento'] == 1) {
				$arrData[$i]['crecimiento'] = 'Si';
			}else{
				$arrData[$i]['crecimiento'] ='No' ;
			}

			if ($arrData[$i]['auditiva'] == 1) {
				$arrData[$i]['auditiva'] = 'Si';
			}else{
				$arrData[$i]['auditiva'] ='No' ;
			}

			if ($arrData[$i]['visual'] == 1) {
				$arrData[$i]['visual'] = 'Si';
			}else{
				$arrData[$i]['visual'] ='No' ;
			}

			if ($arrData[$i]['otra_discapacidad'] == 1) {
				$arrData[$i]['otra_discapacidad'] = 'Si';
			}else{
				$arrData[$i]['otra_discapacidad'] ='No' ;
			}

			if ($arrData[$i]['especifique_discapacidad'] == "") {
				$arrData[$i]['especifique_discapacidad'] = 'Ninguna';
			}else{
				$arrData[$i]['especifique_discapacidad'] == $arrData[$i]['especifique_discapacidad'] ;
			}

			if ($arrData[$i]['cual_especialista'] == "") {
				$arrData[$i]['cual_especialista'] = 'Ninguna';
			}else{
				$arrData[$i]['cual_especialista'] == $arrData[$i]['cual_especialista'] ;
			}

			if ($arrData[$i]['informacion_importante'] == "") {
				$arrData[$i]['informacion_importante'] = 'Ninguna';
			}else{
				$arrData[$i]['informacion_importante'] == $arrData[$i]['informacion_importante'] ;
			}

			


			$btnView = '<button class="btn btn-info btn-sm btnViewEstudiante_inicial" onClick="ftnViewEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Ver Estudiante"><i class="fa fa-eye" aria-hidden="true"></i></button>';




			$btnEdit = '<button class="btn btn-primary btn-sm btnEditEstudiante_inicial" onClick="fntEditEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Editar Estudiante"><i class="fas fa-pencil-alt"></i></button>';

			//$btnEdit = '<button class="btn btn-secondary btn-sm" disabled><i class="fas fa-pencil-alt"></i></button>';





			//$btnDelete = '<button class="btn btn-danger btn-sm btnDelEstudiante_inicial" onClick="fntDelEstudiante_inicial(' . $arrData[$i]['inicial_id'] . ')" title="Eliminar Estudiante"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();
		}


		public function getEstudiante_inicial(int $intId_estudiante)
		{
	
			$intId_estudiante = intval($intId_estudiante);
			if ($intId_estudiante > 0) {
				$arrData = $this->model->selectEstudiante_inicial($intId_estudiante);
				if (empty($arrData)) {
					$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
				} else {
					$arrResponse = array('status' => true, 'data' => $arrData);
				}
				echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
			}
	
			die();
		}

		public function getEstudiante_inicial_1(int $intId_estudiante)
		{
	
			$intId_estudiante = intval($intId_estudiante);
			if ($intId_estudiante > 0) {
				$arrData = $this->model->selectEstudiante_inicial_1($intId_estudiante);
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