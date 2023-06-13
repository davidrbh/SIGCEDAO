<?php
/**
 * Clase que hace referencia a RolesModel.php
 */
class RolesModel extends Mysql
{

	public $intId_rol;
	public $strNombre_rol;
	public $strDescripcion;
	public $intStatus;

	/**
	 * Summary function __construct
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * La function selectRoles() Busca en la tabla "rol" de la base de datos todos los roles activos y los devuelve en una matriz asociativa.
	 *@return array Retorna los resultados de la consulta en forma de matriz asociativa.
	 */
	public function selectRoles()
	{

		$sql = "SELECT * FROM rol WHERE status != 0";
		$request = $this->select_all($sql);
		return $request;
	}

	/**
	 * La function selectRol() Busca en la tabla "rol" de la base de datos un rol específico por su ID y lo devuelve en una matriz asociativa.
	 *@param int $id_rol ID del rol para buscar.
	 *@return array Retorna los resultados de la consulta en forma de matriz asociativa.
	 */

	public function selectRol(int $id_rol)
	{
		//BUSCAR ROLE
		$this->intId_rol = $id_rol;
		$sql = "SELECT * FROM rol WHERE id_rol = $this->intId_rol";
		$request = $this->select($sql);
		return $request;
	}

	/**
	 *La function insertRol() inserta un nuevo rol en la tabla "rol" de la base de datos con los valores de los parámetros de entrada.
	 *Verifica si ya existe un rol con el mismo nombre antes de realizar la inserción.
	 *Retorna true si la inserción fue exitosa, de lo contrario retorna false.
	 *@param string $rol Nombre del rol a insertar.
	 *@param string $descripcion Descripción del rol a insertar.
	 *@param int $status Estado del rol a insertar.
	 *@return bool Retorna true si la inserción fue exitosa, de lo contrario false.
	 */

	public function insertRol(string $rol, string $descripcion, int $status)
	{

		$return = "";
		$this->strNombre_rol = $rol;
		$this->strDescripcion = $descripcion;
		$this->intStatus = $status;

		$sql = "SELECT * FROM rol WHERE nombre_rol = '{$this->strNombre_rol}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO rol(nombre_rol,descripcion,status) VALUES(?,?,?)";
			$arrData = array($this->strNombre_rol, $this->strDescripcion, $this->intStatus);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = false;
		}
		return $return;


	}

	/**
	 * La function deleteRol() elimina un rol de la tabla "rol" de la base de datos por su ID, siempre y cuando no haya usuarios asociados a él.
	 *Verifica si hay usuarios que tienen asignado el rol antes de eliminarlo.
	 *Retorna un mensaje indicando si la eliminación fue exitosa, si el rol no existe, o si hay usuarios asociados a él.
	 *@param int $id_rol ID del rol a eliminar.
	 *@return string Retorna un mensaje indicando si la eliminación fue exitosa, si el rol no existe, o si hay usuarios asociados a él.
	 */

	public function deleteRol(int $id_rol)
	{
		$this->intId_rol = $id_rol;
		$sql = "SELECT * FROM usuario WHERE rol_id = $this->intId_rol";
		$request = $this->select_all($sql);
		if (empty($request)) {
			$sql = "UPDATE rol SET status = ? WHERE id_rol = $this->intId_rol ";
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

	/**
	 * La function updateRol() actualiza un rol existente en la tabla "rol" de la base de datos por su ID con los valores de los parámetros de entrada.
	 *Verifica si ya existe otro rol con el mismo nombre antes de realizar la actualización.
	 *Retorna true si la actualización fue exitosa, de lo contrario retorna false.
	 *@param int $id_rol ID del rol a actualizar.
	 *@param string $nombre_rol Nuevo nombre del rol.
	 *@param string $descripcion Nueva descripción del rol.
	 *@param int $status Nuevo estado del rol.
	 *@return bool Retorna true si la actualización fue exitosa, de lo contrario false.
	 */
	public function updateRol(int $id_rol, string $nombre_rol, string $descripcion, int $status)
	{
		$this->intId_rol = $id_rol;
		$this->strNombre_rol = $nombre_rol;
		$this->strDescripcion = $descripcion;
		$this->intStatus = $status;

		$sql = "SELECT * FROM rol WHERE nombre_rol = '$this->strNombre_rol' AND id_rol != $this->intId_rol";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$sql = "UPDATE rol SET nombre_rol = ?, descripcion = ?, status = ? WHERE id_rol = $this->intId_rol ";
			$arrData = array($this->strNombre_rol, $this->strDescripcion, $this->intStatus);
			$request = $this->update($sql, $arrData);
		} else {
			$request = false;
		}
		return $request;
	}
}
?>