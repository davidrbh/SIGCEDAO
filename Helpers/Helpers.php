<?php 
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use setasign\Fpdi\Fpdi; 

    

    require 'Libraries/phpmailer/Exception.php';
    require 'Libraries/phpmailer/PHPMailer.php';
    require 'Libraries/phpmailer/SMTP.php';
 // require 'Libraries/Fpdi/src/FpdfTpl/FpdfTpl.php';
   // require 'Libraries/FPDI/src/Fpdi.php';

   // require 'Libraries/FPDI/src/FpdfTpl/FpdfTpl.php';


    // if (!function_exists('generateNewPdf')) {
    //     function generateNewPdf($outputFilename, $content)
    //     {
    //         $pdf = new Fpdi();
    //         $pdf->AddPage();
    //         $pdf->SetFont('Arial', 'B', 16);
    //         $pdf->Cell(40, 10, $content);
    //         $pdf->Output($outputFilename, 'F');
    //         return $outputFilename;
    //     }
    // }
    
    // if (!function_exists('importPdfContent')) {
    //     function importPdfContent($outputFilename, $importFilename)
    //     {
    //         $pdf = new Fpdi();
    //         $pageCount = $pdf->setSourceFile($importFilename);
    //         $templateId = $pdf->importPage(1);
    //         $pdf->AddPage();
    //         $pdf->useTemplate($templateId);
    //         $pdf->Output($outputFilename, 'F');
    //         return $outputFilename;
    //     }
    // }
 
    //Retorna la url del proyecto
    function base_url()
    {
        return BASE_URL;
    }
    //Retorla la url del Assets
    function media()
    {
        return BASE_URL."/Assets";
    }

    function headerAdmin($data="")
    {
        $view_header = "./Views/Template/header_admin.php";
        require_once ($view_header);
    }
     function footerAdmin($data="")
    {
        $view_footer = "./Views/Template/footer_admin.php";
        require_once ($view_footer);
    }

    function obtenerPeriodoEscolarActual() {
        $fechaActual = new DateTime();
        $mesActual = $fechaActual->format('m');
        $anioActual = $fechaActual->format('Y');
        $anioInicio = ($mesActual >= 8) ? $anioActual : $anioActual - 1;
        $anioFin = $anioInicio + 1;
        $periodoEscolar = "$anioInicio-$anioFin";
        
        return $periodoEscolar;
      }
      


    
    //Muestra información formateada
    function dep($data)
    {
        $format  = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }

    function getModal(string $nameModal, $data)
    {
        $view_modal = "Views/Template/Modals/{$nameModal}.php";
        require_once ($view_modal);
    }

    function getFile(string $url, $data)
    {
        ob_start();
        require_once("Views/{$url}.php");
        $file = ob_get_clean();
        return $file;        
    }

    //Envio de correos
    function sendEmail($data,$template)
    {
        $asunto = $data['asunto'];
        $emailDestino = $data['email'];
        $empresa = NOMBRE_REMITENTE;
        $remitente = EMAIL_REMITENTE;
        //ENVIO DE CORREO
        $de = "MIME-Version: 1.0\r\n";
        $de .= "Content-type: text/html; charset=UTF-8\r\n";
        $de .= "From: {$empresa} <{$remitente}>\r\n";
        ob_start();
        require_once("Views/Template/Email/".$template.".php");
        $mensaje = ob_get_clean();
        $send = mail($emailDestino, $asunto, $mensaje, $de);
        return $send;
    }

    function sendMailLocal($data,$template)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        ob_start();
        require_once("Views/Template/Email/".$template.".php");
        $mensaje = ob_get_clean();

    try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sigcedao@gmail.com';                     //SMTP username
    $mail->Password   = 'yrilrnjbzcbvbhjq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sigcedao@gmail.com', 'SIGCEDAO');
    $mail->addAddress($data['email']);     //Add a recipient
    //if(!empty($data['emailCopia'])){
        //$mail->addBCC($data['emailCopia']);
    //}
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $data['asunto'];
    $mail->Body    = $mensaje;
    

    $mail->send();
    return true;
    } catch (Exception $e) {
    return false;
    }
    }

    function getPermisos(int $id_modulo)
    {
        require_once ("Models/PermisosModel.php");
        $objPermisos = new PermisosModel();
        $id_rol = $_SESSION['userData']['id_rol'];
        $arrPermisos = $objPermisos->permisosModulos($id_rol);
        $permisos = '';
        $permisosMod = '';

        if(count($arrPermisos) > 0 ){
            $permisos = $arrPermisos;
            $permisosMod = isset($arrPermisos[$id_modulo]) ? $arrPermisos[$id_modulo] : "";
        }
        $_SESSION['permisos'] = $permisos;
        $_SESSION['permisosMod'] = $permisosMod;
    }

    function sessionUser(int $id_usuario)
    {
        require_once ("Models/LoginModel.php");
        $objLogin = new LoginModel();
        $request = $objLogin->sessionLogin($id_usuario);
        return $request;
    }

    function sessionStart()
    {
        session_start();
        $inactive = 12000;
        if(isset($_SESSION['timeout']))
        {
            $session_in = time() - $_SESSION['inicio'];
            if($session_in > $inactive)
            {
                header("Location: ".BASE_URL."/logout");
            }
        }else{
            header("Location: ".BASE_URL."/logout");
        }
    }


    function Meses()
    {
        $meses = array("Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre");
        return $meses;
    }

    



    //Elimina exceso de espacios entre palabras
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }
    //Genera una contraseña de 10 caracteres
    function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }
    //Genera un token
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    //Formato para valores monetarios
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }
    

 ?>