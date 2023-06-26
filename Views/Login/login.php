<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="David Barrera">
    <meta name="theme-color" content="#2196F3">
    <link rel="shortcut icon" href="<?= media(); ?>/images/icon-logo.ico">

   <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SIGCEDAO</h1>
      </div>
      <div class="login-box">
        <div id="divLoading">
          <div>
          <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
      </div>
        <form class="login-form" name="formLogin" id="formLogin" autocomplete="off" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input id="txtEmail" name="txtEmail" autocomplete="off" class="form-control valid validEmail" type="email" placeholder="Correo electrónico"  autofocus>
          </div>
          <div class="form-group">
            <label class="control-label" >CONTRASEÑA </label> 
            <input id="txtPassword" name="txtPassword" autocomplete="off" class="form-control" type="password" placeholder="Contraseña ">
            <label id="show-hide-password" action="hide" class="control-label fa-solid fa-eye"></label>
           <span id="mostrar"> mostrar contraseña </span>
          </div>
        
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-right-to-bracket"></i> INICIAR SESIÓN</button>
          </div>
        </form>
      
      </div>
    </section>

    <div class="container panal-footer">
    <hr width="95%">
    <p class="text-center">Sistema de Gestion y Control de Estudiantes para la Escuela Distrital Antonio Ornés</p>
    <p class="text-center">Copyright © 2023 Universidad Politecnica Territorial de Caracas Mariscal Sucre</p>
    <p class="text-center">Todos los Derechos Reservados</p>
    <img class="logos-logo" src="<?= media(); ?>/images/logo-colegio.png" alt width="80px">
    <img class="logos-logo" src="<?= media(); ?>/images/logo-uni.png" alt width="100px">
    <img class="logos-logo" src="<?= media(); ?>/images/logo-alcaldia.png" alt width="120px">
</div>

    <script >
      const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>

    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>