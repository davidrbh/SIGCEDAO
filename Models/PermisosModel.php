<?php
/**
 * Clase que hace referencia a PermisosModel.php
 */

class PermisosModel extends Mysql
{
	public $intIdpermiso;
	public $intRolid;
	public $intModuloid;
	public $r;
	public $w;
	public $u;
	public $d;

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * La función selectModulos() busca en la tabla "modulos" de la base de datos todos los registros cuyo estado no sea 0, lo que significa que están activos.
	 *Construye y ejecuta una sentencia SQL que selecciona todos los campos de la tabla "modulos" donde el estado es distinto de 0.
	 *Retorna los resultados de la consulta en forma de matriz asociativa.
	 *@return array Retorna los resultados de la consulta en forma de matriz asociativa.
	 */

	public function selectModulos()
	{
		$sql = "SELECT * FROM modulos WHERE status != 0";
		$request = $this->select_all($sql);
		return $request;
	}

	/**
	 * La función selectPermisosRol() busca en la tabla "permisos" de la base de datos todos los permisos asociados a un rol específico.
	 *Construye y ejecuta una sentencia SQL que selecciona todos los campos de la tabla "permisos" donde el ID de rol coincide con el parámetro de entrada.
	 *Retorna los resultados de la consulta en forma de matriz asociativa.
	 *@param int $id_rol ID del rol para buscar sus permisos.
	 *@return array Retorna los resultados de la consulta en forma de matriz asociativa.
	 */
	public function selectPermisosRol(int $id_rol)
	{
		$this->intRolid = $id_rol;
		$sql = "SELECT * FROM permisos WHERE rol_id = $this->intRolid";
		$request = $this->select_all($sql);
		return $request;
	}

	/**
	 * La function deletePermisos() Elimina todos los permisos asociados a un rol de la tabla "permisos" en la base de datos.
	 *@param int $id_rol ID del rol para eliminar sus permisos.
	 *@return bool Retorna true si la eliminación fue exitosa, de lo contrario false.
	 */

	public function deletePermisos(int $id_rol)
	{
		$this->intRolid = $id_rol;
		$sql = "DELETE FROM permisos WHERE rol_id = $this->intRolid";
		$request = $this->delete($sql);
		return $request;
	}

	/**
	 * La function insertPermisos() Inserta un nuevo registro en la tabla "permisos" de la base de datos con los permisos asignados a un rol y módulo específicos.
	 *@param int $id_rol ID del rol al que se asignarán los permisos.
	 *@param int $id_modulo ID del módulo al que se asignarán los permisos.
	 *@param int $r Valor del permiso de lectura (1 si tiene permiso, 0 si no).
	 *@param int $w Valor del permiso de escritura (1 si tiene permiso, 0 si no).
	 *@param int $u Valor del permiso de actualización (1 si tiene permiso, 0 si no).
	 *@param int $d Valor del permiso de eliminación (1 si tiene permiso, 0 si no).
	 *@return bool Retorna true si la inserción fue exitosa, de lo contrario false.
	 */

	public function insertPermisos(int $id_rol, int $id_modulo, int $r, int $w, int $u, int $d)
	{
		$this->intRolid = $id_rol;
		$this->intModuloid = $id_modulo;
		$this->r = $r;
		$this->w = $w;
		$this->u = $u;
		$this->d = $d;
		$query_insert = "INSERT INTO permisos(rol_id,modulo_id,r,w,u,d) VALUES(?,?,?,?,?,?)";
		$arrData = array($this->intRolid, $this->intModuloid, $this->r, $this->w, $this->u, $this->d);
		$request_insert = $this->insert($query_insert, $arrData);
		return $request_insert;
	}

	/**
	 * La function PermisosModulos() Busca los permisos asociados a un rol en la tabla "permisos" de la base de datos y los devuelve en una matriz asociativa donde las claves son los IDs de los módulos.
	 *@param int $id_rol ID del rol para buscar sus permisos.
	 *@return array Retorna los permisos del rol en una matriz asociativa donde las claves son los IDs de los módulos.
	 */

	public function PermisosModulos(int $id_rol)
	{
		$this->intRolid = $id_rol;
		$sql = "SELECT p.rol_id,
			              p.modulo_id,
			              m.titulo as modulos,
			              p.r,
			              p.w,
			              p.u,
			              p.d
			        FROM permisos p
			        INNER JOIN modulos m
			        ON p.modulo_id = m.id_modulo
			        WHERE p.rol_id = $this->intRolid";
		$request = $this->select_all($sql);

		$arrPermisos = array();
		for ($i = 0; $i < count($request); $i++) {
			$arrPermisos[$request[$i]['modulo_id']] = $request[$i];
		}
		return $arrPermisos;
	}
}
?>