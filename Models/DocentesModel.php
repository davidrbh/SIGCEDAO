<?php

/**
 * Clase que hace referencia a DocentesModel.php
 */

class DocentesModel extends Mysql
{
	public $intId_docente;
	public $strNombre_docente;
	public $strApellido_docente;
	public $intCedula_docente;
	public $strEmail_docente;
	public $intEspecialidad;
	public $intStatus;
	public function __construct()
	{
		parent::__construct();
	}

	public function selectDocentes()
	{

		$sql = "SELECT *,CONCAT(`docentes`.`nacionalidad_docente`,`docentes`.`cedula_docente`)
				AS 'cedula',`especialidad`.`nombre_especialidad` 
				FROM `docentes`
			    INNER JOIN `especialidad`
				ON `especialidad`.`id_especialidad` = `docentes`.`especialidad_id`
		 		WHERE `docentes`.`status` != 0";
		$request = $this->select_all($sql);
		return $request;
	}

    public function selectDocente(int $id_docente)
	{
		//BUSCAR Docente
		$this->intId_docente = $id_docente;
		$sql = "SELECT * FROM docentes WHERE id_docente = {$this->intId_docente}";
		$request = $this->select($sql);
		return $request;
	}

	public function selectEspecialidad()
	{
		$sql ="SELECT `especialidad`.`id_especialidad`,`especialidad`.`nombre_especialidad` FROM especialidad WHERE `especialidad`.`status` != 0";
		$request = $this->select_all($sql);
		return $request;
	}


}
?>

