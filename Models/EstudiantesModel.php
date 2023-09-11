<?php
/**
 * Clase que hace referencia a EstudiantesModel.php
 */
class EstudiantesModel extends Mysql
{

    public $turno;
    public $seccion;
    public $periodo;
    public $id_estudiante;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectEstudiantes()
	{
        

		$sql = "SELECT  `estudiantes`.`id_estudiante`,
                        `estudiantes`.`nombre_alumno1`,
                        `estudiantes`.`nombre_alumno2`,
                        `estudiantes`.`apellido_alumno1`,
                        `estudiantes`.`apellido_alumno2`,
                        `estudiantes`.`cedula_escolar`,
                        DATE_FORMAT(`estudiantes`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
                        `estudiantes`.`genero`,
                        `estudiantes`.`nacionalidad_alumno`,
                        `estado`.`desc_estado`,
                        `estudiantes`.`lugar_nacimiento`,
                        `estudiantes`.`direccion_hab`,
                        `estudiantes`.`nombre_madre`,
                        `estudiantes`.`apellido_madre`,
                        `estudiantes`.`nacionalidad_madre`,
                        `estudiantes`.`cedula_madre`,
                        `estudiantes`.`ocupacion_madre`,
                        `estudiantes`.`telefono_madre`,
                        `estudiantes`.`nombre_padre`,
                        `estudiantes`.`apellido_padre`,
                        `estudiantes`.`nacionalidad_padre`,
                        `estudiantes`.`cedula_padre`,
                        `estudiantes`.`ocupacion_padre`,
                        `estudiantes`.`telefono_padre`,
                        `estudiantes`.`nombre_repre`,
                        `estudiantes`.`apellido_repre`,
                        `estudiantes`.`nacionalidad_repre`,
                        `estudiantes`.`cedula_repre`,
                        `estudiantes`.`parentesco_repre`,
                        `estudiantes`.`ocupacion_repre`,
                        `estudiantes`.`telefono_repre`,
                        `estudiantes`.`celular_repre`,
                        `estudiantes`.`direccion_repre`,
                        `estudiantes`.`colaboracion_plantel`,
                        `estudiantes`.`plantel`,
                        `estudiantes`.`grado_cursado`,
                        `estudiantes`.`periodo_escolar`,
                        `estudiantes`.`literal`,
                        `estudiantes`.`repitiente`,
                        `estudiantes`.`tipo_alumno`,
                        `estudiantes`.`turno`,
                        `desc_seccion`.`nombre_seccion`,
                        `estudiantes`.`periodo_escolar_new`,
                        `estudiantes`.`funcionario`,
                        DATE_FORMAT(`estudiantes`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
                        `estudiantes`.`enfermedad_padece`,
                        `estudiantes`.`enfermedad_1`,
                        `estudiantes`.`tratamiento_enfermedad`,
                        `estudiantes`.`tratamiento_1`,
                        `estudiantes`.`alergico_medicamento`,
                        `estudiantes`.`alergico_1`,
                        `estudiantes`.`rubeola`,
                        `estudiantes`.`sarampion`,
                        `estudiantes`.`lechina`,
                        `estudiantes`.`paperas`,
                        `estudiantes`.`otra_enfermedad`,
                        `estudiantes`.`otra_enfermedad_cual`,
                        `estudiantes`.`ninguna_enfermedad`,
                        `estudiantes`.`psicologo`,
                        `estudiantes`.`nacimiento_parto`,
                        `estudiantes`.`alumno_seva_solo`,
                        `estudiantes`.`nombre_retiro`,
                        `estudiantes`.`parestesco_retiro`,
                        `estudiantes`.`vive_madre`,
                        `estudiantes`.`vive_padre`,
                        `estudiantes`.`vive_hermanos`,
                        `estudiantes`.`cuantos_hermanos`,
                        `estudiantes`.`cuantas_hermanas`,
                        `estudiantes`.`vive_otra_persona`,
                        `estudiantes`.`cual_persona_vive`,
                        `estudiantes`.`hermanos_plantel`,
                        `estudiantes`.`cuantos_hermanos_plantel`,
                        `estudiantes`.`grado_cursanHermanos`,
                        `estudiantes`.`turno_cursanHermanos`,
                        `estudiantes`.`tipo_vivienda`,
                        `estudiantes`.`condicion_vivienda`,
                        `estudiantes`.`ingresos_familiares`,
                        `estudiantes`.`dependecia_ingreso`,
                        `estudiantes`.`boletin_calificacion`,
                        `estudiantes`.`boletin_promocion`,
                        `estudiantes`.`carta_conducta`,
                        `estudiantes`.`copia_partida_nac`,
                        `estudiantes`.`copia_cedula_alumno`,
                        `estudiantes`.`copia_cedula_repre`,
                        `estudiantes`.`foto_alumno`,
                        `estudiantes`.`foto_repre`,
                        `estudiantes`.`boletin_grado`,
                        `estudiantes`.`otros_documentos`,
                        `estudiantes`.`documentos_1`,
                        `estudiantes`.`status` 
                FROM `estudiantes`  
                LEFT JOIN `seccion` 
                ON `estudiantes`.`seccion_id` = `seccion`.`id_seccion`
                LEFT JOIN `desc_seccion` 
                ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
                LEFT JOIN `estado`
                ON `estudiantes`.`estado_id` = `estado`.`id_estado`
                WHERE `estudiantes`.`status` != 0";
		$request = $this->select_all($sql);
		return $request;
	}

    public function selectEstudiante(int $id_estudiante)
	{
		//BUSCAR Estudiante
		$this->intId_estudiante = $id_estudiante;
                $sql = "SELECT  `estudiantes`.`id_estudiante`,
                `estudiantes`.`nombre_alumno1`,
                `estudiantes`.`nombre_alumno2`,
                `estudiantes`.`apellido_alumno1`,
                `estudiantes`.`apellido_alumno2`,
                `estudiantes`.`cedula_escolar`,
                DATE_FORMAT(`estudiantes`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
                `estudiantes`.`genero`,
                `estudiantes`.`nacionalidad_alumno`,
                `estado`.`desc_estado`,
                `estudiantes`.`lugar_nacimiento`,
                `estudiantes`.`direccion_hab`,
                `estudiantes`.`nombre_madre`,
                `estudiantes`.`apellido_madre`,
                `estudiantes`.`nacionalidad_madre`,
                `estudiantes`.`cedula_madre`,
                `estudiantes`.`ocupacion_madre`,
                `estudiantes`.`telefono_madre`,
                `estudiantes`.`nombre_padre`,
                `estudiantes`.`apellido_padre`,
                `estudiantes`.`nacionalidad_padre`,
                `estudiantes`.`cedula_padre`,
                `estudiantes`.`ocupacion_padre`,
                `estudiantes`.`telefono_padre`,
                `estudiantes`.`nombre_repre`,
                `estudiantes`.`apellido_repre`,
                `estudiantes`.`nacionalidad_repre`,
                `estudiantes`.`cedula_repre`,
                `estudiantes`.`parentesco_repre`,
                `estudiantes`.`ocupacion_repre`,
                `estudiantes`.`telefono_repre`,
                `estudiantes`.`celular_repre`,
                `estudiantes`.`direccion_repre`,
                `estudiantes`.`colaboracion_plantel`,
                `estudiantes`.`plantel`,
                `estudiantes`.`grado_cursado`,
                `estudiantes`.`periodo_escolar`,
                `estudiantes`.`literal`,
                `estudiantes`.`repitiente`,
                `estudiantes`.`tipo_alumno`,
                `estudiantes`.`turno`,
                `desc_seccion`.`nombre_seccion`,
                `estudiantes`.`periodo_escolar_new`,
                `estudiantes`.`funcionario`,
                DATE_FORMAT(`estudiantes`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
                `estudiantes`.`enfermedad_padece`,
                `estudiantes`.`enfermedad_1`,
                `estudiantes`.`tratamiento_enfermedad`,
                `estudiantes`.`tratamiento_1`,
                `estudiantes`.`alergico_medicamento`,
                `estudiantes`.`alergico_1`,
                `estudiantes`.`rubeola`,
                `estudiantes`.`sarampion`,
                `estudiantes`.`lechina`,
                `estudiantes`.`paperas`,
                `estudiantes`.`otra_enfermedad`,
                `estudiantes`.`otra_enfermedad_cual`,
                `estudiantes`.`ninguna_enfermedad`,
                `estudiantes`.`psicologo`,
                `estudiantes`.`nacimiento_parto`,
                `estudiantes`.`alumno_seva_solo`,
                `estudiantes`.`nombre_retiro`,
                `estudiantes`.`parestesco_retiro`,
                `estudiantes`.`vive_madre`,
                `estudiantes`.`vive_padre`,
                `estudiantes`.`vive_hermanos`,
                `estudiantes`.`cuantos_hermanos`,
                `estudiantes`.`cuantas_hermanas`,
                `estudiantes`.`vive_otra_persona`,
                `estudiantes`.`cual_persona_vive`,
                `estudiantes`.`hermanos_plantel`,
                `estudiantes`.`cuantos_hermanos_plantel`,
                `estudiantes`.`grado_cursanHermanos`,
                `estudiantes`.`turno_cursanHermanos`,
                `estudiantes`.`tipo_vivienda`,
                `estudiantes`.`condicion_vivienda`,
                `estudiantes`.`ingresos_familiares`,
                `estudiantes`.`dependecia_ingreso`,
                `estudiantes`.`boletin_calificacion`,
                `estudiantes`.`boletin_promocion`,
                `estudiantes`.`carta_conducta`,
                `estudiantes`.`copia_partida_nac`,
                `estudiantes`.`copia_cedula_alumno`,
                `estudiantes`.`copia_cedula_repre`,
                `estudiantes`.`foto_alumno`,
                `estudiantes`.`foto_repre`,
                `estudiantes`.`boletin_grado`,
                `estudiantes`.`otros_documentos`,
                `estudiantes`.`documentos_1`,
                `estudiantes`.`status` 
        FROM `estudiantes`  
        LEFT JOIN `seccion` 
        ON `estudiantes`.`seccion_id` = `seccion`.`id_seccion`
        LEFT JOIN `desc_seccion` 
        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
        LEFT JOIN `estado`
        ON `estudiantes`.`estado_id` = `estado`.`id_estado` WHERE id_estudiante = $this->intId_estudiante";
		$request = $this->select($sql);
		return $request;
	}

    
    public function selectEstados()
		{
			$sql ="SELECT * FROM estado ORDER BY `estado`.`desc_estado` ASC";
			$request = $this->select_all($sql);
			return $request;
		}


        public function selectSecciones(int $turno)
        {
            
            $this->intTurno = $turno;
            $this->strPeriodo = obtenerPeriodoEscolarActual();
          
            $sql ="SELECT `seccion`.`id_seccion`,`seccion`.`docente_id`,`seccion`.`desc_seccion_id`,`desc_seccion`.`nombre_seccion`,`seccion`.`periodo_escolar`,`desc_seccion`.`turno_id`
            FROM `seccion`
            JOIN `desc_seccion` 
            ON   `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
            AND  `desc_seccion`.`id_desc_seccion` < 17
            AND  `desc_seccion`.`turno_id` = $this->intTurno
            WHERE`seccion`.`periodo_escolar` = '$this->strPeriodo'
            AND  `seccion`.`status` = 1  OR `seccion`.`periodo_escolar` = 1
            ORDER BY `seccion`.`desc_seccion_id` DESC";
			$request = $this->select_all($sql);
			return $request;

        }

        public function selectNombreDocente(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, CONCAT(`docentes`.`nombre_docente`,' ', `docentes`.`apellido_docente`)
                    AS 'nombre_completo' 
                    FROM `seccion`
                    JOIN `docentes`
                    ON docentes.id_docentes = seccion.docente_id
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion}";
			$request = $this->select_all($sql);
			return $request;
		}

       
               

        public function selectPeriodo(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, `seccion`.`periodo_escolar`
                    FROM `seccion`
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion}";
			$request = $this->select_all($sql);
			return $request;
		}

        // public function deleteEstudiante(int $id_estudiante)
        // {
        //     $this->intId_estudiante = $id_estudiante;
        //     $sql = "SELECT * FROM `estudiantes` WHERE `estudiantes`.`estudiante_id` = {$this->intId_estudiante} ";
        //     $request = $this->select_all($sql);
    
        //     if (empty($request)) {
        //         $sql = "UPDATE estudiantes SET status = ? WHERE id_estudiante = $this->intId_estudiante ";
        //         $arrData = array(0);
        //         $request = $this->update($sql, $arrData);
        //         if ($request) {
        //             $request = 'ok';
        //         } else {
        //             $request = 'error';
        //         }
        //     } else {
        //         $request = 'exist';
        //     }
        //     return $request;
        // }

}
?>