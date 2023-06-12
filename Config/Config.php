<?php 
	
	//define("BASE_URL", "https://c196-201-248-9-217.ngrok.io/sigcabaima";
	//http://localhost/sigcabaima "http://192.168.1.102/sigcabaima";

	const BASE_URL = "http://localhost/sigcedao" ;

	//Zona horaria
	date_default_timezone_set('America/Caracas');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_sigcedao";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "BsD";

	//Datos de envio de correos
	const NOMBRE_REMITENTE = "SIGCEDAO";
	const EMAIL_REMITENTE = "no-reply@sigcedao.com";
	
	//const WEB_EMPRESA = "http://190.94.247.11/proyecto-araguaney/";
	const NOMBRE_EMPRESA = "UNNIDAD EDUCATIVA DISTRITAL ANTONIO ORNES";
	


 ?>