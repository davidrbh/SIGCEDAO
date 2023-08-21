<?php
/**
 * Clase que hace referencia a Secciones_configModel.php
 */

class Secciones_configModel extends Mysql
{

    public $intId_seccion_config;
    public $int_nombreSeccion;
    public$int_nombreDocente;
    public	$strPeriodo;
    public	$intStatus;
    public function __construct()
    {
        parent::__construct();
    }

    public function selectSecciones_config_all()
    {
        $sql ="SELECT `seccion`.`id_seccion`, `desc_seccion`.`nombre_seccion`,CONCAT(`docentes`.`nombre_docente`,' ',`docentes`.`apellido_docente`) 
               AS 'nombre_completo',`seccion`.`periodo_escolar`,`seccion`.`status` 
               FROM `seccion`
               INNER JOIN `desc_seccion` 
               ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id` 
               INNER JOIN `docentes` 
               ON `docentes`.`id_docentes` = `seccion`.`docente_id`
               WHERE `seccion`.`status` != 0";
        $request = $this->select_all($sql);
        return $request;
    }


    public function selectSecciones_config()
    {
        $sql ="SELECT `id_desc_seccion`,`nombre_seccion`
               FROM `desc_seccion`  
               WHERE `nombre_seccion` 
               NOT IN ('Seleccione:')";
        $request = $this->select_all($sql);
        return $request;
    }

    public function selectNombre_docente()
    {
        $sql ="SELECT `id_docentes`, CONCAT(`nombre_docente`,' ', `apellido_docente`) 
               AS 'nombre_completo' 
               FROM `docentes`
               WHERE `docentes`.`status` = 1";
        $request = $this->select_all($sql);
        return $request;
    }


    public function insertSeccion_config( int $nombre_seccion, int $nombre_docente, string $periodo, int $status)
    {
        $return = "";
		$this->int_nombreSeccion = $nombre_seccion;
		$this->int_nombreDocente = $nombre_docente;
		$this->strPeriodo = $periodo;
        $this->intStatus = $status;

    
        $sql = "SELECT * 
                FROM `seccion` 
                WHERE `desc_seccion_id` = '{$this->int_nombreSeccion}' 
                AND `docente_id` = '{$this->int_nombreDocente}' 
                AND `periodo_escolar` = '{$this->strPeriodo}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO seccion(desc_seccion_id,docente_id,periodo_escolar,status) VALUES(?,?,?,?)";
			$arrData = array($this->int_nombreSeccion, $this->int_nombreDocente, $this->strPeriodo, $this->intStatus);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = false;
		}
		return 
        $return;
    }

    public function selectSeccion_config(int $id_secion_config)
	{
		
		$this->intId_seccion_config = $id_secion_config;
		$sql = "SELECT `seccion`.`id_seccion`, `desc_seccion`.`nombre_seccion`,CONCAT(`docentes`.`nombre_docente`,' ',`docentes`.`apellido_docente`) 
                AS 'nombre_completo',`seccion`.`periodo_escolar`,`seccion`.`status` 
                FROM `seccion`
                INNER JOIN `desc_seccion` 
                ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id` 
                INNER JOIN `docentes` 
                ON `docentes`.`id_docentes` = `seccion`.`docente_id` WHERE id_seccion = $this->intId_seccion_config";
		$request = $this->select($sql);
		return $request;
	}

    public function selectSeccion_config2(int $id_secion_config)
	{
        $this->intId_seccion_config = $id_secion_config;
		$sql = "SELECT * FROM seccion WHERE id_seccion = $this->intId_seccion_config";
		$request = $this->select($sql);
		return $request;
		
	}


    public function updateSeccion_config(int $id_secion_config, int $nombre_seccion, int $nombre_docente, string $periodo, int $status)
	{
		$this->intId_seccion_config = $id_secion_config;
		$this->int_nombreSeccion = $nombre_seccion;
		$this->int_nombreDocente = $nombre_docente;
		$this->strPeriodo = $periodo;
        $this->intStatus = $status;

		$sql = "SELECT * 
                FROM `seccion` 
                WHERE `desc_seccion_id` = '{$this->int_nombreSeccion}' 
                AND `docente_id` = '{$this->int_nombreDocente}' 
                AND `periodo_escolar` = '{$this->strPeriodo}' AND id_seccion != {$this->intId_seccion_config}";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE `seccion` SET desc_seccion_id = ?, docente_id = ?, periodo_escolar = ?, status = ? WHERE id_seccion = $this->intId_seccion_config ";
			$arrData = array($this->int_nombreSeccion, $this->int_nombreDocente, $this->strPeriodo, $this->intStatus);
			$request = $this->update($sql, $arrData);
		} else {
			$request = false;
		}
		return $request;
	}

    public function deleteSeccion_config(int $id_secion_config)
	{
		$this->intId_seccion_config = $id_secion_config;
        $sql = "SELECT * FROM `estudiantes` WHERE `estudiantes`.`seccion_id` = {$this->intId_seccion_config} ";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE seccion SET status = ? WHERE `id_seccion` = {$this->intId_seccion_config} ";
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

    


   
}
?>





   