<?php
/**
 * Clase que representa el logout.
 * -------------------------------
 * Class that represent logout.
 */

/**
 * se utiliza para cerrar la sesión de un usuario.
 * ----------------------------------------------
 * It is used to log out a user.
 */
class Logout
{
	public function __construct()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location:' . base_url() . '/login');
	}

}
?>