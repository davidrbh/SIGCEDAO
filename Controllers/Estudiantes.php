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
            dep($_POST);
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





			$btnDelete = '<button class="btn btn-danger btn-sm btnDelEstudiante" onClick="fntDelEstudiante(' . $arrData[$i]['id_estudiante'] . ')" title="Eliminar Estudiante"><i class="far fa-trash-alt"></i></button>';

			//$btnDelete = '<button class="btn btn-secondary btn-sm" disabled><i class="far fa-trash-alt"></i></button>';






			$arrData[$i]['options'] = '<div class="text-center">' . $btnView . ' ' . $btnEdit . ' ' . $btnDelete . '</div>';
		}

		echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

		die();
		}







        
}






?>