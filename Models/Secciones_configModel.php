<?php
/**
 * Clase que hace referencia a Secciones_configModel.php
 */
class Secciones_configModel extends Mysql
{
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
               WHERE `seccion`.`status` = 1";
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
               FROM `docentes`";
        $request = $this->select_all($sql);
        return $request;
    }


    
}
?>