<?php

/**
 * Clase que hace referencia a UsuariosModel.php
 */
class UsuariosModel extends Mysql
{
	private $intId_Usuario;
	private $intCedula;
	private $strNombre;
	private $strApellido;
	private $intTelefono;
	private $strEmail;
	private $strPassword;
	private $strToken;
	private $intUsuario;
	private $intStatus;


	/**
	 * Summary function __construct
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * La function selectUsuarios() Busca en la tabla "usuario" de la base de datos todos los usuarios activos y une los resultados con la tabla "rol" para obtener el nombre del rol asociado a cada usuario.
	 *Retorna los resultados de la consulta en forma de matriz asociativa.
	 *@return array Retorna los resultados de la consulta en forma de matriz asociativa.
	 */
	public function selectUsuarios()
	{
		//EXTRAE USUARIOS

		$sql = "SELECT p.id_usuario,
						   p.cedula,
						   p.nombres,
						   p.apellidos,
						   p.telefono,
						   p.email_user,
						   r.nombre_rol,
						   p.status,
						   r.id_rol
					FROM usuario p
					INNER JOIN rol r 
					ON p.rol_id = r.id_rol
					WHERE p.status !=0 ";

		$request = $this->select_all($sql);
		return $request;



	}

	/**
	 *La function selectUsuario() Busca en la tabla "usuario" de la base de datos un usuario específico por su ID y une el resultado con la tabla "rol" para obtener el nombre del rol asociado al usuario.
	 *Retorna un único resultado en forma de matriz asociativa.
	 *@param int $id_usuario ID del usuario a buscar.
	 *@return array Retorna un único resultado en forma de matriz asociativa.
	 */

	public function selectUsuario($id_usuario)
	{
		$this->intId_Usuario = $id_usuario;

		$sql = "SELECT p.id_usuario,p.cedula,p.nombres,p.apellidos,p.telefono,p.email_user,r.id_rol,r.nombre_rol,p.status, DATE_FORMAT(p.datecreated, '%d-%m-%Y') as fechaRegistro 
					FROM usuario p
					INNER JOIN rol r
					ON p.rol_id = r.id_rol
					WHERE p.id_usuario = $this->intId_Usuario";
		$request = $this->select($sql);
		return $request;



	}




	/**
	 * La function insertUsuario() inserta un nuevo usuario en la tabla "usuario" de la base de datos con los valores de los parámetros de entrada.
	 *Verifica si ya existe un usuario con el mismo correo electrónico o número de cédula antes de realizar la inserción.
	 *Retorna el ID del usuario insertado si la inserción fue exitosa, de lo contrario retorna false.
	 *@param int $cedula Número de cédula del usuario a insertar.
	 *@param string $nombre Nombre del usuario a insertar.
	 *@param string $apellido Apellido del usuario a insertar.
	 *@param int $telefono Número de teléfono del usuario a insertar.
	 *@param string $email Correo electrónico del usuario a insertar.
	 *@param string $password Contraseña del usuario a insertar.
	 *@param int $usuario ID del rol del usuario a insertar.
	 *@param int $status Estado del usuario a insertar.
	 */

	public function insertUsuario(
		$cedula, string $nombre, string $apellido,
		$telefono,
		string $email, string $password, int $usuario, int $status
	) {


		$this->intCedula = $cedula;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
		$this->intUsuario = $usuario;
		$this->intStatus = $status;

		$return = 0;


		$sql = "SELECT * FROM usuario WHERE email_user = '{$this->strEmail}' or cedula = '{$this->intCedula}'";
		$request = $this->select_all($sql);

		if (empty($request)) {
			$query_insert = "INSERT INTO usuario(cedula,nombres,apellidos,telefono,email_user,password,rol_id,status) VALUES(?,?,?,?,?,?,?,?)";
			$arrData = array(
				$this->intCedula, $this->strNombre, $this->strApellido,
				$this->intTelefono, $this->strEmail, $this->strPassword, $this->intUsuario,
				$this->intStatus
			);
			$request_insert = $this->insert($query_insert, $arrData);
			$return = $request_insert;
		} else {
			$return = false;
		}
		return $return;


	}

	/**
	 * La function deleteUsuario() elimina un usuario de la tabla "usuario" de la base de datos por su ID, cambiando su estado a 0.
	 *Retorna un mensaje indicando si la eliminación fue exitosa o si el usuario no existe.
	 *@param int $id_usuario ID del usuario a eliminar.
	 *@return string Retorna un mensaje indicando si la eliminación fue exitosa o si el usuario no existe.
	 */

	public function deleteUsuario(int $id_usuario)
	{
		$this->intId_usuario = $id_usuario;

		if (empty($request)) {
			$sql = "UPDATE usuario SET status = ? WHERE id_usuario = $this->intId_usuario ";
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
	 * La function updatePerfil Actualiza un usuario existente en la tabla "usuario" de la base de datos por su ID con los valores de los parámetros de entrada.
	 *Retorna true si la actualización fue exitosa, de lo contrario false.
	 *@param int $id_usuario ID del usuario a actualizar.
	 *@param int $cedula Número de cédula del usuario a actualizar.
	 *@param string $nombre Nombre del usuario a actualizar.
	 *@param string $apellido Apellido del usuario a actualizar.
	 *@param int $telefono Número de teléfono del usuario a actualizar.
	 *@param string $email Correo electrónico del usuario a actualizar.
	 *@param string|null $password Nueva contraseña del usuario a actualizar.
	 *@param int $usuario ID del rol del usuario a actualizar.
	 *@param int $status Estado del usuario a actualizar.
	 *@return bool Retorna true si la actualización fue exitosa, de lo contrario false.
	 */
	public function updateUsuario(
		int $id_usuario,
		$cedula, string $nombre, string $apellido,
		$telefono,
		string $email, string $password, int $usuario, int $status
	) {
		$this->intId_Usuario = $id_usuario;
		$this->intCedula = $cedula;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
		$this->intUsuario = $usuario;
		$this->intStatus = $status;

		$sql = "SELECT * FROM usuario WHERE (email_user = '{$this->strEmail}' AND id_usuario != $this->intId_Usuario)
										  OR (cedula = '{$this->intCedula}' AND id_usuario != $this->intId_Usuario) ";
		$request = $this->select_all($sql);

		if (empty($request)) {
			if ($this->strPassword != "") {
				$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, email_user=?, 
					password=?, rol_id=?, status=? 
							WHERE id_usuario = $this->intId_Usuario ";
				$arrData = array(
					$this->intCedula,
					$this->strNombre,
					$this->strApellido,
					$this->intTelefono,
					$this->strEmail,
					$this->strPassword,
					$this->intUsuario,
					$this->intStatus
				);
			} else {
				$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, email_user=?, 
					rol_id=?, status=? 
							WHERE id_usuario = $this->intId_Usuario ";
				$arrData = array(
					$this->intCedula,
					$this->strNombre,
					$this->strApellido,
					$this->intTelefono,
					$this->strEmail,
					$this->intUsuario,
					$this->intStatus
				);
			}
			$request = $this->update($sql, $arrData);
		} else {
			$request = false;
		}
		return $request;

	}

	/**
	 * Actualiza el perfil de un usuario existente en la tabla "usuario" de la base de datos por su ID con los valores de los parámetros de entrada.
	 *Si se proporciona una nueva contraseña, la actualización incluirá la nueva contraseña, de lo contrario, la contraseña existente no se actualizará.
	 *Retorna true si la actualización fue exitosa, de lo contrario false.
	 *@param int $id_usuario ID del usuario a actualizar.
	 *@param int $cedula Número de cédula del usuario a actualizar.
	 *@param string $nombre Nombre del usuario a actualizar.
	 *@param string $apellido Apellido del usuario a actualizar.
	 *@param int $telefono Número de teléfono del usuario a actualizar.
	 *@param string|null $password Nueva contraseña del usuario a actualizar.
	 *@return bool Retorna true si la actualización fue exitosa, de lo contrario false.
	 */
	public function updatePerfil(
		int $id_usuario,
		$cedula, string $nombre, string $apellido,
		$telefono, string $password
	) {
		$this->intId_Usuario = $id_usuario;
		$this->intCedula = $cedula;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strPassword = $password;

		if ($this->strPassword != "") {
			$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?, 
					password=?
							WHERE id_usuario = $this->intId_Usuario ";
			$arrData = array(
				$this->intCedula,
				$this->strNombre,
				$this->strApellido,
				$this->intTelefono,
				$this->strPassword
			);

		} else {
			$sql = "UPDATE usuario SET cedula=?, nombres=?, apellidos=?, telefono=?
							WHERE id_usuario = $this->intId_Usuario ";
			$arrData = array(
				$this->intCedula,
				$this->strNombre,
				$this->strApellido,
				$this->intTelefono
			);
		}
		$request = $this->update($sql, $arrData);
		return $request;

	}


}
?>