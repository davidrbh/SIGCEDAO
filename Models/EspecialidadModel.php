<?php

/**
 * Clase que hace referencia al EspecialidadModel.php
 */
class EspecialidadModel extends Mysql
{

    public $intId_especialidad;
	public $strNombre_especialidad;
	public $strDescripcion;
	public $intStatus;

    public function __construct()
    {
        parent::__construct();
    }

    public function selectEspecialidades()
	{

		$sql = "SELECT * FROM especialidad WHERE status != 0";
		$request = $this->select_all($sql);
		return $request;
	}

    public function selectEspecialidad(int $id_especialidad)
	{
		//BUSCAR Especialidad
		$this->intId_especialidad = $id_especialidad;
		$sql = "SELECT * FROM especialidad WHERE id_especialidad = $this->intId_especialidad";
		$request = $this->select($sql);
		return $request;
	}

    public function insertEspecialidad(string $especialidad, string $descripcion, int $status)
	{

		$return = "";
		$this->strNombre_especialidad = $especialidad;
		$this->strDescripcion = $descripcion;
		$this->intStatus = $status;

		$sql = "SELECT * FROM especialidad WHERE nombre_especialidad = '{$this->strNombre_especialidad}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO especialidad(nombre_especialidad,descripcion,status) VALUES(?,?,?)";
			$arrData = array($this->strNombre_especialidad, $this->strDescripcion, $this->intStatus);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = false;
		}
		return $return;


	}

    public function deleteEspecialidad(int $id_especialidad)
	{
		$this->intId_especialidad = $id_especialidad;
        $sql = "SELECT * FROM `docentes` WHERE `docentes`.`especialidad_id` = {$this->intId_especialidad} ";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE especialidad SET status = ? WHERE id_especialidad = $this->intId_especialidad ";
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


    public function updateEspecialidad(int $id_especialidad, string $nombre_especialidad, string $descripcion, int $status)
	{
		$this->intId_especialidad = $id_especialidad;
		$this->strNombre_especialidad = $nombre_especialidad;
		$this->strDescripcion = $descripcion;
		$this->intStatus = $status;

		$sql = "SELECT * FROM especialidad WHERE nombre_especialidad = '$this->strNombre_especialidad' AND id_especialidad != $this->intId_especialidad";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE especialidad SET nombre_especialidad = ?, descripcion = ?, status = ? WHERE id_especialidad = $this->intId_especialidad ";
			$arrData = array($this->strNombre_especialidad, $this->strDescripcion, $this->intStatus);
			$request = $this->update($sql, $arrData);
		} else {
			$request = false;
		}
		return $request;
	}



}




?>