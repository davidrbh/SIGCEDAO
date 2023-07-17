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

}
?>