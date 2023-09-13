<?php
/**
 * Clase que hace referencia a EstudiantesInicialModel.php
 */
class Estudiantes_inicialModel extends Mysql
{
    public $turno;
    public $seccion;
    public $periodo;
    public $id_estudiante;
    public function __construct()
    {
        parent::__construct();
    }
    
    public function selectEstudiantes_inicial()
	{

        $sql = "SELECT  `estudiantes_inicial`.`inicial_id`, 
                        `estudiantes_inicial`.`nombre_alumno1`,
                        `estudiantes_inicial`.`nombre_alumno2`,
                        `estudiantes_inicial`.`apellido_alumno1`,
                        `estudiantes_inicial`.`apellido_alumno2`,
                        `estudiantes_inicial`.`cedula_escolar`,
                        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
                        `estudiantes_inicial`.`genero`,
                        `estudiantes_inicial`.`nacionalidad_alumno`,
                        `estado`.`desc_estado`,
                        `estudiantes_inicial`.`nacimiento_alumno`,
                        `estudiantes_inicial`.`talla_camisa`,
                        `estudiantes_inicial`.`talla_pantalon`,
                        `estudiantes_inicial`.`talla_zapato`,
                        `estudiantes_inicial`.`peso`,
                        `estudiantes_inicial`.`estatura`,
                        `estudiantes_inicial`.`tiene_hermanos`,
                        `estudiantes_inicial`.`cuantos_hermanos`,
                        `estudiantes_inicial`.`tipo_alumno`,
                        `estudiantes_inicial`.`turno`,
                        `desc_seccion`.`nombre_seccion`,
                        `estudiantes_inicial`.`periodo_escolar`,
                        `estudiantes_inicial`.`funcionario`,
                        DATE_FORMAT(`estudiantes_inicial`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
                        `estudiantes_inicial`.`nombre_madre`,
                        `estudiantes_inicial`.`apellido_madre`,
                        `estudiantes_inicial`.`nacionalidad_madre`,
                        `estudiantes_inicial`.`cedula_madre`,
                        `estudiantes_inicial`.`estado_civil_madre`,
                        `estudiantes_inicial`.`nacimiento_madre`,
                        `estudiantes_inicial`.`tipo_nacionalidad_madre`,
                        `estado`.`desc_estado`,
                        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_madre`,'%d-%m-%Y') AS 'fecha_nac_madre',
                        `estudiantes_inicial`.`direccion_hab_madre`,
                        `estudiantes_inicial`.`telefono_madre`,
                        `estudiantes_inicial`.`direccion_trabajo_madre`,
                        `estudiantes_inicial`.`telefono_trabajo_madre`,
                        `estudiantes_inicial`.`nivel_academico_madre`,
                        `estudiantes_inicial`.`otros_datos_madre`,
                        `estudiantes_inicial`.`nombre_padre`,
                        `estudiantes_inicial`.`apellido_padre`,
                        `estudiantes_inicial`.`nacionalidad_padre`,
                        `estudiantes_inicial`.`cedula_padre`,
                        `estudiantes_inicial`.`estado_civil_padre`,
                        `estudiantes_inicial`.`nacimiento_padre`,
                        `estudiantes_inicial`.`tipo_nacionalidad_padre`,
                        `estado`.`desc_estado`,
                        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_padre`,'%d-%m-%Y') AS 'fecha_nac_padre',
                        `estudiantes_inicial`.`direccion_hab_padre`,
                        `estudiantes_inicial`.`telefono_padre`,
                        `estudiantes_inicial`.`direccion_trabajo_padre`,
                        `estudiantes_inicial`.`telefono_trabajo_padre`,
                        `estudiantes_inicial`.`nivel_academico_padre`,
                        `estudiantes_inicial`.`otros_datos_padre`,
                        `estudiantes_inicial`.`come_solo`,
                        `estudiantes_inicial`.`lo_ayudan`,
                        `estudiantes_inicial`.`quien_ayuda`,
                        `estudiantes_inicial`.`comida_favortia`,
                        `estudiantes_inicial`.`comida_rechaza`,
                        `estudiantes_inicial`.`alimientos_prohibidos`,
                        `estudiantes_inicial`.`enfinteres`,
                        `estudiantes_inicial`.`asea_solo`,
                        `estudiantes_inicial`.`horas_duerme`,
                        `estudiantes_inicial`.`tiempo_dedica_madre`,
                        `estudiantes_inicial`.`tiempo_dedica_padre`,
                        `estudiantes_inicial`.`tiempo_dedica_abuelos`,
                        `estudiantes_inicial`.`nombre_retiro`,
                        `estudiantes_inicial`.`nacionalidad_retiro`,
                        `estudiantes_inicial`.`cedula_retiro`,
                        `estudiantes_inicial`.`celular_retiro`,
                        `estudiantes_inicial`.`parentesco_retiro`,
                        `estudiantes_inicial`.`situacion_embarazo`,
                        `estudiantes_inicial`.`enfermedad_durante_embarazo`,
                        `estudiantes_inicial`.`oficio_durante_embarazo`,
                        `estudiantes_inicial`.`situacion_parto_nacimiento`,
                        `estudiantes_inicial`.`edad_madre_embarazo`,
                        `estudiantes_inicial`.`problemas_parto`,
                        `estudiantes_inicial`.`cual_problema_parto`,
                        `estudiantes_inicial`.`peso_alnacer`,
                        `estudiantes_inicial`.`talla_alnacer`,
                        `estudiantes_inicial`.`problemas_primeros_dias`,
                        `estudiantes_inicial`.`cual_problema`,
                        `estudiantes_inicial`.`edad_hablar`,
                        `estudiantes_inicial`.`edad_caminar`,
                        `estudiantes_inicial`.`edad_panales`,
                        `estudiantes_inicial`.`peso_nino`,
                        `estudiantes_inicial`.`talla_nino`,
                        `estudiantes_inicial`.`grupo_sanguineo`,
                        `estudiantes_inicial`.`alergico`,
                        `estudiantes_inicial`.`especifique_alergia`,
                        `estudiantes_inicial`.`enfermedades_padrecidad`,
                        `estudiantes_inicial`.`hospitalizado`,
                        `estudiantes_inicial`.`causa_hospitalizado`,
                        `estudiantes_inicial`.`fiebre_alta_medicamento`,
                        `estudiantes_inicial`.`motora`,
                        `estudiantes_inicial`.`crecimiento`,
                        `estudiantes_inicial`.`auditiva`,
                        `estudiantes_inicial`.`otra_discapacidad`,
                        `estudiantes_inicial`.`especifique_discapacidad`,
                        `estudiantes_inicial`.`atendido_especialista`,
                        `estudiantes_inicial`.`cual_especialista`,
                        `estudiantes_inicial`.`problemas_lenguaje`,
                        `estudiantes_inicial`.`mano_habil`,
                        `estudiantes_inicial`.`hora_para_dormir`,
                        `estudiantes_inicial`.`hora_se_levanta`,
                        `estudiantes_inicial`.`sueno_nino`,
                        `estudiantes_inicial`.`con_quien_duerme`,
                        `estudiantes_inicial`.`imporfacion_importante`,
                        `estudiantes_inicial`.`status` 
                        FROM `estudiantes_inicial` 
                        LEFT JOIN `seccion` 
                        ON `estudiantes_inicial`.`seccion_id` = `seccion`.`id_seccion`
                        LEFT JOIN `desc_seccion` 
                        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
                        LEFT JOIN `estado`
                        ON `estudiantes_inicial`.`estado_id` = `estado`.`id_estado`
                        AND `estudiantes_inicial`.estado_madre_id = `estado`.`id_estado`
                        AND `estudiantes_inicial`.estado_padre_id = `estado`.`id_estado`
                        WHERE `estudiantes_inicial`.`status` != 0";

		$request = $this->select_all($sql);
		return $request;
	}

    public function selectEstudiante_inicial(int $id_estudiante)
	{
        //BUSCAR Estudiante
		$this->intId_estudiante_inicial = $id_estudiante;
		$sql = "SELECT  `estudiantes_inicial`.`inicial_id`, 
        `estudiantes_inicial`.`nombre_alumno1`,
        `estudiantes_inicial`.`nombre_alumno2`,
        `estudiantes_inicial`.`apellido_alumno1`,
        `estudiantes_inicial`.`apellido_alumno2`,
        `estudiantes_inicial`.`cedula_escolar`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
        `estudiantes_inicial`.`genero`,
        `estudiantes_inicial`.`nacionalidad_alumno`,
        `estado`.`desc_estado`,
        `estudiantes_inicial`.`nacimiento_alumno`,
        `estudiantes_inicial`.`talla_camisa`,
        `estudiantes_inicial`.`talla_pantalon`,
        `estudiantes_inicial`.`talla_zapato`,
        `estudiantes_inicial`.`peso`,
        `estudiantes_inicial`.`estatura`,
        `estudiantes_inicial`.`tiene_hermanos`,
        `estudiantes_inicial`.`cuantos_hermanos`,
        `estudiantes_inicial`.`tipo_alumno`,
        `estudiantes_inicial`.`turno`,
        `desc_seccion`.`nombre_seccion`,
        `estudiantes_inicial`.`periodo_escolar`,
        `estudiantes_inicial`.`funcionario`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
        `estudiantes_inicial`.`nombre_madre`,
        `estudiantes_inicial`.`apellido_madre`,
        `estudiantes_inicial`.`nacionalidad_madre`,
        `estudiantes_inicial`.`cedula_madre`,
        `estudiantes_inicial`.`estado_civil_madre`,
        `estudiantes_inicial`.`nacimiento_madre`,
        `estudiantes_inicial`.`tipo_nacionalidad_madre`,
        `estado`.`desc_estado`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_madre`,'%d-%m-%Y') AS 'fecha_nac_madre',
        `estudiantes_inicial`.`direccion_hab_madre`,
        `estudiantes_inicial`.`telefono_madre`,
        `estudiantes_inicial`.`direccion_trabajo_madre`,
        `estudiantes_inicial`.`telefono_trabajo_madre`,
        `estudiantes_inicial`.`nivel_academico_madre`,
        `estudiantes_inicial`.`otros_datos_madre`,
        `estudiantes_inicial`.`nombre_padre`,
        `estudiantes_inicial`.`apellido_padre`,
        `estudiantes_inicial`.`nacionalidad_padre`,
        `estudiantes_inicial`.`cedula_padre`,
        `estudiantes_inicial`.`estado_civil_padre`,
        `estudiantes_inicial`.`nacimiento_padre`,
        `estudiantes_inicial`.`tipo_nacionalidad_padre`,
        `estado`.`desc_estado`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_padre`,'%d-%m-%Y') AS 'fecha_nac_padre',
        `estudiantes_inicial`.`direccion_hab_padre`,
        `estudiantes_inicial`.`telefono_padre`,
        `estudiantes_inicial`.`direccion_trabajo_padre`,
        `estudiantes_inicial`.`telefono_trabajo_padre`,
        `estudiantes_inicial`.`nivel_academico_padre`,
        `estudiantes_inicial`.`otros_datos_padre`,
        `estudiantes_inicial`.`come_solo`,
        `estudiantes_inicial`.`lo_ayudan`,
        `estudiantes_inicial`.`quien_ayuda`,
        `estudiantes_inicial`.`comida_favortia`,
        `estudiantes_inicial`.`comida_rechaza`,
        `estudiantes_inicial`.`alimientos_prohibidos`,
        `estudiantes_inicial`.`enfinteres`,
        `estudiantes_inicial`.`asea_solo`,
        `estudiantes_inicial`.`horas_duerme`,
        `estudiantes_inicial`.`tiempo_dedica_madre`,
        `estudiantes_inicial`.`tiempo_dedica_padre`,
        `estudiantes_inicial`.`tiempo_dedica_abuelos`,
        `estudiantes_inicial`.`nombre_retiro`,
        `estudiantes_inicial`.`nacionalidad_retiro`,
        `estudiantes_inicial`.`cedula_retiro`,
        `estudiantes_inicial`.`celular_retiro`,
        `estudiantes_inicial`.`parentesco_retiro`,
        `estudiantes_inicial`.`situacion_embarazo`,
        `estudiantes_inicial`.`enfermedad_durante_embarazo`,
        `estudiantes_inicial`.`oficio_durante_embarazo`,
        `estudiantes_inicial`.`situacion_parto_nacimiento`,
        `estudiantes_inicial`.`edad_madre_embarazo`,
        `estudiantes_inicial`.`problemas_parto`,
        `estudiantes_inicial`.`cual_problema_parto`,
        `estudiantes_inicial`.`peso_alnacer`,
        `estudiantes_inicial`.`talla_alnacer`,
        `estudiantes_inicial`.`problemas_primeros_dias`,
        `estudiantes_inicial`.`cual_problema`,
        `estudiantes_inicial`.`edad_hablar`,
        `estudiantes_inicial`.`edad_caminar`,
        `estudiantes_inicial`.`edad_panales`,
        `estudiantes_inicial`.`peso_nino`,
        `estudiantes_inicial`.`talla_nino`,
        `estudiantes_inicial`.`grupo_sanguineo`,
        `estudiantes_inicial`.`alergico`,
        `estudiantes_inicial`.`especifique_alergia`,
        `estudiantes_inicial`.`enfermedades_padrecidad`,
        `estudiantes_inicial`.`hospitalizado`,
        `estudiantes_inicial`.`causa_hospitalizado`,
        `estudiantes_inicial`.`fiebre_alta_medicamento`,
        `estudiantes_inicial`.`motora`,
        `estudiantes_inicial`.`crecimiento`,
        `estudiantes_inicial`.`auditiva`,
        `estudiantes_inicial`.`otra_discapacidad`,
        `estudiantes_inicial`.`especifique_discapacidad`,
        `estudiantes_inicial`.`atendido_especialista`,
        `estudiantes_inicial`.`cual_especialista`,
        `estudiantes_inicial`.`problemas_lenguaje`,
        `estudiantes_inicial`.`mano_habil`,
        `estudiantes_inicial`.`hora_para_dormir`,
        `estudiantes_inicial`.`hora_se_levanta`,
        `estudiantes_inicial`.`sueno_nino`,
        `estudiantes_inicial`.`con_quien_duerme`,
        `estudiantes_inicial`.`imporfacion_importante`,
        `estudiantes_inicial`.`status` 
        FROM `estudiantes_inicial` 
        LEFT JOIN `seccion` 
        ON `estudiantes_inicial`.`seccion_id` = `seccion`.`id_seccion`
        LEFT JOIN `desc_seccion` 
        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
        LEFT JOIN `estado`
        ON `estudiantes_inicial`.`estado_id` = `estado`.`id_estado`
        AND `estudiantes_inicial`.estado_madre_id = `estado`.`id_estado`
        AND `estudiantes_inicial`.estado_padre_id = `estado`.`id_estado`
        WHERE `estudiantes_inicial`.`status` != 0 AND inicial_id = $this->intId_estudiante_inicial";
		$request = $this->select($sql);
		return $request;
	}

    public function selectEstados()
		{
			$sql ="SELECT * FROM estado ORDER BY `estado`.`desc_estado` ASC";
			$request = $this->select_all($sql);
			return $request;
		}

        public function selectSecciones_inicial(int $turno)
        {
            $this->intTurno = $turno;
            $this->strPeriodo = obtenerPeriodoEscolarActual();
            $sql ="SELECT `seccion`.`id_seccion`,`seccion`.`docente_id`,`seccion`.`desc_seccion_id`,`desc_seccion`.`nombre_seccion`,`seccion`.`periodo_escolar`,`desc_seccion`.`turno_id`
                   FROM `seccion`
                   JOIN `desc_seccion` 
                   ON   `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
                   AND  `desc_seccion`.`id_desc_seccion` > 14 
                   AND  `desc_seccion`.`turno_id` = {$this->intTurno}
                   WHERE`seccion`.`periodo_escolar` = '$this->strPeriodo'
                   AND  `seccion`.`status` = 1  OR `seccion`.`periodo_escolar` = 1
                   ORDER BY `seccion`.`desc_seccion_id`";
			$request = $this->select_all($sql);
			return $request;

        }

        
        public function selectNombreDocente_inicial($seccion)
		{
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, CONCAT(`docentes`.`nombre_docente`,' ', `docentes`.`apellido_docente`)
                    AS 'nombre_completo' 
                    FROM `seccion`
                    JOIN `docentes`
                    ON docentes.id_docentes = seccion.docente_id
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion} AND `seccion`.`status` = 1 ";
			$request = $this->select_all($sql);
			return $request;
		}

        public function selectPeriodo(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, `seccion`.`periodo_escolar`
                    FROM `seccion`
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion} AND `seccion`.`status` = 1";
			$request = $this->select_all($sql);
			return $request;
		}

}
?>