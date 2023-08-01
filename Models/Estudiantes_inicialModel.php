<?php
/**
 * Clase que hace referencia a EstudiantesInicialModel.php
 */
class Estudiantes_inicialModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function selectEstados()
		{
			$sql ="SELECT * FROM estado ORDER BY `estado`.`desc_estado` ASC";
			$request = $this->select_all($sql);
			return $request;
		}

        public function selectTipoSecciones_inicial(int $turno)
        {
            $this->intTurno = $turno;
            $sql ="SELECT tipo_seccion.id_tipo_seccion, tipo_seccion.nombre_seccion
                   FROM `tipo_seccion` 
                   WHERE turno_id = $this->intTurno AND `id_tipo_seccion` >14 OR `id_tipo_seccion` = 1";
			$request = $this->select_all($sql);
			return $request;

        }

        public function selectNombreDocente($seccion)
		{
			$this->intSeccion = $seccion;
			$sql = "SELECT `tipo_seccion`.`id_tipo_seccion`, `tipo_seccion`.`docente_id`, `docentes`.`nombre_docente`
                    FROM `tipo_seccion` 
                    LEFT JOIN `docentes` 
                    ON `tipo_seccion`.`docente_id` = `docentes`.`id_docentes` 
                    WHERE `tipo_seccion`.`id_tipo_seccion` = $this->intSeccion";
			$request = $this->select_all($sql);
			return $request;
		}

}
?>