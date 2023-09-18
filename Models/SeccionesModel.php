<?php
/**
 * Clase que hace referencia a SeccionesModel.php
 */
class SeccionesModel extends Mysql
{
	public $intTurno;
	public $strPeriodo;
	public $intGrado;
	public function __construct()
	{
		parent::__construct();
	}

	public function selectSecciones_Turno(int $turno)
	{
		$this->intTurno = $turno;
		$sql ="SELECT `id_desc_seccion`,`nombre_seccion` 
			   FROM `desc_seccion`
			   WHERE `desc_seccion`.`turno_id` =  {$this->intTurno} 
			   AND `desc_seccion`.`id_desc_seccion` < 15";
			  
			
		$request = $this->select_all($sql);
		return $request;

	}

	public function getSelectTurno_inicial(int $turno)
	{
		$this->intTurno = $turno;
		$sql ="SELECT `id_desc_seccion`,`nombre_seccion` 
			   FROM `desc_seccion`
			   WHERE `desc_seccion`.`turno_id` =  {$this->intTurno} 
			   AND `desc_seccion`.`id_desc_seccion` > 14";
			  
			
		$request = $this->select_all($sql);
		return $request;

	}

	

	public function selectSecciones(string $periodo, int $grado)
	{
		$this->strPeriodo = $periodo;
		$this->intGrado = $grado;
			$sql ="SELECT `estudiantes`.`nombre_alumno1`,
					`estudiantes`.`apellido_alumno1`,
					`estudiantes`.`cedula_escolar`,
					CONCAT(`docentes`.`nombre_docente`,' ',`docentes`.`apellido_docente`)AS 'nombre_docente',
					`desc_seccion`.`nombre_seccion`,
					`estudiantes`.`status`
					FROM `estudiantes`
					INNER JOIN `seccion` 
					ON `estudiantes`.`seccion_id` = `seccion`.`id_seccion`
					AND `seccion`.`periodo_escolar` = '{$this->strPeriodo}'
					AND `seccion`.`desc_seccion_id` = $this->intGrado
					INNER JOIN `docentes`
					ON `docentes`.`id_docentes` = `seccion`.`docente_id`
					INNER JOIN `desc_seccion`
                    ON `seccion`.`desc_seccion_id` = `desc_seccion`.`id_desc_seccion`";

		
		$request = $this->select_all($sql);
		return $request;

	}



	public function selectSecciones_inicial(string $periodo, int $grado)
	{
		$this->strPeriodo = $periodo;
		$this->intGrado = $grado;
			$sql ="SELECT `estudiantes_inicial`.`nombre_alumno1`,
					`estudiantes_inicial`.`apellido_alumno1`,
					`estudiantes_inicial`.`cedula_escolar`,
					CONCAT(`docentes`.`nombre_docente`,' ',`docentes`.`apellido_docente`)AS 'nombre_docente',
					`desc_seccion`.`nombre_seccion`,
					`estudiantes_inicial`.`status`
					FROM `estudiantes_inicial`
					INNER JOIN `seccion` 
					ON `estudiantes_inicial`.`seccion_id` = `seccion`.`id_seccion`
					AND `seccion`.`periodo_escolar` = '{$this->strPeriodo}'
					AND `seccion`.`desc_seccion_id` = $this->intGrado
					INNER JOIN `docentes`
					ON `docentes`.`id_docentes` = `seccion`.`docente_id`
					INNER JOIN `desc_seccion`
                    ON `seccion`.`desc_seccion_id` = `desc_seccion`.`id_desc_seccion`";

		
		$request = $this->select_all($sql);
		return $request;

	}

	


	

	
}
?>