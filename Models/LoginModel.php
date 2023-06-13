<?php
/**
 * Clase que hace referencia al LoginModel.php
 */
class LoginModel extends Mysql
{
	private $intId_Usuario;
	private $strUsuario;
	private $strPassword;
	private $strToken;

	/**
	 * Summary function __construct
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 *La función loginUser() se usa para autenticar a un usuario mediante consulta a base de datos.
	 *Retorna los resultados de la consulta si el usuario se encuentra y su estado es distinto de 0, de lo contrario retorna null.
	 *@param string $usuario Nombre de usuario para autenticar
	 *@param string $password Contraseña del usuario para autenticar.
	 */

	public function loginUser(string $usuario, string $password)
	{
		$this->strUsuario = $usuario;
		$this->strPassword = $password;
		$sql = "SELECT id_usuario,status FROM usuario WHERE
					email_user = '$this->strUsuario' AND 
					password = '$this->strPassword' AND
					status != 0";

		$request = $this->select($sql);
		return $request;
	}

	/**
	 * La Función sessionLogin() se usa para buscar la información de un usuario y su rol en la base de datos y guardarla en la sesión del usuario.
	 *@param int $iduser ID del usuario para buscar su información y rol.
	 */
	public function sessionLogin(int $iduser)
	{
		$this->intId_Usuario = $iduser;
		//BUSCAR ROLE 
		$sql = "SELECT p.id_usuario,
							p.cedula,
							p.nombres,
							p.apellidos,
							p.telefono,
							p.email_user,
							r.id_rol,r.nombre_rol,
							p.status 
					FROM usuario p
					INNER JOIN rol r
					ON p.rol_id = r.id_rol
					WHERE p.id_usuario = $this->intId_Usuario";
		$request = $this->select($sql);
		$_SESSION['userData'] = $request;
		return $request;
	}

	/**
	 * La function getUserEmail() Busca un usuario en la base de datos por su dirección de correo electrónico y estado activo.
	 *@param string $strEmail Dirección de correo electrónico del usuario a buscar.
	 */

	public function getUserEmail(string $strEmail)
	{
		$this->strUsuario = $strEmail;
		$sql = "SELECT id_usuario,nombres,apellidos,status FROM usuario WHERE email_user = '$this->strUsuario' AND status = 1";
		$request = $this->select($sql);
		return $request;

	}

	/**
	 * La function setTokenUser() Actualiza el campo "token" de un usuario en la base de datos con un nuevo token proporcionado como parámetro.
	 *Construye y ejecuta una sentencia SQL que actualiza el campo "token" de la tabla "usuario" donde el ID de usuario coincide con el parámetro de entrada.
	 *@param int $id_usuario ID del usuario a actualizar su token.
	 *@param string $token Nuevo token a asignar al usuario.
	 *@return bool Retorna true si la actualización fue exitosa, de lo contrario retorna false.
	 */

	public function setTokenUser(int $id_usuario, string $token)
	{
		$this->intId_Usuario = $id_usuario;
		$this->strToken = $token;
		$sql = "UPDATE usuario SET token = ? WHERE id_usuario = $this->intId_Usuario";
		$arrData = array($this->strToken);
		$request = $this->update($sql, $arrData);
		return $request;
	}

	/**
	 * La function getUsuario Busca un usuario en la base de datos por su dirección de correo electrónico y token.
	 *Retorna los resultados de la consulta si se encuentra un usuario y su estado es activo (1), de lo contrario retorna null.
	 *@param string $email Dirección de correo electrónico del usuario a buscar.
	 *@param string $token Token del usuario a buscar.
	 */
	public function getUsuario(string $email, string $token)
	{
		$this->strUsuario = $email;
		$this->strToken = $token;
		$sql = "SELECT id_usuario FROM usuario WHERE email_user = '$this->strUsuario' 
			AND token = '$this->strToken' AND status = 1";
		$request = $this->select($sql);
		return $request;
	}

	/**
	 * La function insertPassword() actualiza la contraseña y el token de un usuario en la base de datos.
	 *@param int $id_usuario ID del usuario a actualizar su contraseña.
	 *@param string $password Nueva contraseña a asignar al usuario.
	 *@return bool Retorna true si la actualización fue exitosa, de lo contrario false.
	 */
	public function insertPassword(int $id_usuario, string $password)
	{
		$this->intId_Usuario = $id_usuario;
		$this->strPassword = $password;
		$sql = "UPDATE usuario SET password = ?, token = ? WHERE id_usuario = $this->intId_Usuario ";
		$arrData = array($this->strPassword, "");
		$request = $this->update($sql, $arrData);
		return $request;
	}


}
?>