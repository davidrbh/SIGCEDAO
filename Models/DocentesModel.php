<?php

/**
 * Clase que hace referencia a DocentesModel.php
 */

class DocentesModel extends Mysql
{
	public $intId_docente;
	public $strNombre_docente;
	public $strApellido_docente;
	public $strNacionalidad;
	public $intCedula_docente;
	public $intTelefono_docente;
	public $strEmail_docente;
	public $intEspecialidad;
	public $intStatus;
	public function __construct()
	{
		parent::__construct();
	}

	public function selectDocentes()
	{

		$sql = "SELECT `docentes`.`id_docentes`,`docentes`.`nombre_docente`,`docentes`.`apellido_docente`,
				CONCAT(`docentes`.`nacionalidad_docente`,`docentes`.`cedula_docente`)
				AS 'cedula',`especialidad`.`nombre_especialidad`,`docentes`.`celular_docente`,`docentes`.`correo_docente`,`docentes`.`correo_docente`,`docentes`.`status`
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
		$sql = "SELECT `docentes`.`id_docentes`,`docentes`.`nombre_docente`,`docentes`.`apellido_docente`,
		CONCAT(`docentes`.`nacionalidad_docente`,`docentes`.`cedula_docente`)
		AS 'cedula',`especialidad`.`nombre_especialidad`,`docentes`.`celular_docente`,`docentes`.`correo_docente`,`docentes`.`correo_docente`,`docentes`.`status`
		FROM `docentes`
		INNER JOIN `especialidad`
		ON `especialidad`.`id_especialidad` = `docentes`.`especialidad_id`
		WHERE id_docentes = {$this->intId_docente}";
		$request = $this->select($sql);
		return $request;
	}

	public function selectEspecialidad()
	{
		$sql ="SELECT `especialidad`.`id_especialidad`,`especialidad`.`nombre_especialidad` FROM especialidad WHERE `especialidad`.`status` != 0";
		$request = $this->select_all($sql);
		return $request;
	}

	public function insertDocente(string $nombre_docente, string $apellido_docente, string $nacionalidad, int $cedula,  $telefono, string $email, int $especialidad, int $status)
	{

		$return = "";
		$this->strNombre_docente = $nombre_docente;
		$this->strApellido_docente = $apellido_docente;
		$this->strNacionalidad = $nacionalidad;
		$this->intCedula_docente = $cedula;
		$this->intTelefono_docente = $telefono;
		$this->strEmail_docente = $email;
		$this->intEspecialidad = $especialidad;
		$this->intStatus = $status;


		$sql = "SELECT * FROM docentes WHERE cedula_docente = '{$this->intCedula_docente}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO docentes(especialidad_id,nombre_docente,apellido_docente,nacionalidad_docente,cedula_docente,celular_docente,correo_docente,status) VALUES(?,?,?,?,?,?,?,?)";
			$arrData = array($this->intEspecialidad,$this->strNombre_docente, $this->strApellido_docente, $this->strNacionalidad, $this->intCedula_docente, $this->intTelefono_docente, $this->strEmail_docente, $this->intStatus);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = false;
		}
		return $return;


	}

	public function deleteDocente(int $id_docente)
	{
		$this->intId_Docente = $id_docente;
        $sql = "SELECT * FROM `seccion` WHERE `seccion`.`docente_id` = {$this->intId_Docente} ";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE docentes SET status = ? WHERE id_docentes = {$this->intId_Docente} ";
			$arrData = array(0);
			$request = $this->update($sql, $arrData);
			if ($request) {
				$request = 'ok';
			} else {
				$request = 'error';
			}
		} else {
			$request = 'exist';
		}
		return $request;
	}


    public function updateDocente(int $id_docente ,string $nombre_docente, string $apellido_docente, string $nacionalidad, int $cedula,  int $telefono, string $email, int $especialidad, int $status)
	{
		$this->intId_docente = $id_docente;
		$this->strNombre_docente = $nombre_docente;
		$this->strApellido_docente = $apellido_docente;
		$this->strNacionalidad = $nacionalidad;
		$this->intCedula_docente = $cedula;
		$this->intTelefono_docente = $telefono;
		$this->strEmail_docente = $email;
		$this->intEspecialidad = $especialidad;
		$this->intStatus = $status;

		$sql = "SELECT * FROM docentes WHERE nombre_docente = '$this->strNombre_docente' AND id_docentes != $this->intId_docente";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE docentes SET especialidad_id = ?, nombre_docente = ?, apellido_docente = ?, nacionalidad_docente = ? , cedula_docente = ? , celular_docente = ? , correo_docente = ? , status = ?  WHERE id_docentes = $this->intId_docente ";
			$arrData = array($this->intEspecialidad, $this->strNombre_docente, $this->strApellido_docente, $this->strNacionalidad, $this->intCedula_docente, $this->intTelefono_docente, $this->strEmail_docente, $this->intStatus);
			$request = $this->update($sql, $arrData);
		} else {
			$request = false;
		}
		return $request;
	}




}
?>

