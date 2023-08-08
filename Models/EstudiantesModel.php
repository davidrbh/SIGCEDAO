<?php
/**
 * Clase que hace referencia a EstudiantesModel.php
 */
class EstudiantesModel extends Mysql
{

    public $turno;
    public $seccion;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectEstudiantes()
	{

		$sql = "SELECT `estudiantes`.`id_estudiante`,`estudiantes`.`nombre_alumno1`,`estudiantes`.`apellido_alumno1`,`estudiantes`.`cedula_escolar`,`estudiantes`.`nombre_repre`,`estudiantes`.`telefono_repre`,`estudiantes`.`celular_repre`,`estudiantes`.`seccion_id`,`estudiantes`.`turno`,`estudiantes`.`status`
                FROM `estudiantes` 
                WHERE `estudiantes`.`status` != 0";
		$request = $this->select_all($sql);
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
            $sql ="SELECT `seccion`.`id_seccion`,`seccion`.`docente_id`,`seccion`.`desc_seccion_id`,`desc_seccion`.`nombre_seccion`,`seccion`.`periodo_escolar`,`desc_seccion`.`turno_id`
            FROM `seccion`
            JOIN `desc_seccion` 
            ON   `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
            AND  `desc_seccion`.`id_desc_seccion` < 17
            AND  `desc_seccion`.`turno_id` = $this->intTurno
            WHERE`seccion`.`periodo_escolar` = '2023-2024' OR '1'
            AND  `seccion`.`status` = 1  
            ORDER BY `seccion`.`desc_seccion_id` DESC";
			$request = $this->select_all($sql);
			return $request;

        }

        public function selectNombreDocente($seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, `docentes`.`nombre_docente`
                    FROM `seccion`
                    JOIN `docentes`
                    ON docentes.id_docentes = seccion.docente_id
                    WHERE`seccion`.`id_seccion` =   $this->intSeccion";
			$request = $this->select_all($sql);
			return $request;
		}

}
?>