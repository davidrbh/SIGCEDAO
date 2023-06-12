<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="David Barrera, Richard Parra, Jildry Marquez">
    <meta name="theme-color" content="#2196F3">
    <link rel="shortcut icon" href="<?= media(); ?>/images/favicon_vzl.ico">

   <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">

    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Cambiar contraseña</h1>
      </div>
      <div class="login-box flipped">
        <div id="divLoading">
          <div>
          <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
      </div>
     
        <form id="formCambiarPass" name="formCambiarPass" class="forget-form" action="">
          <h3 class="login-head"> <i class="fas fa-key"></i> Cambiar contraseña</h3>
          <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $data['id_usuario']; ?>"required>
          <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>"required>
          <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>"required>
          <div class="form-group">
            
            <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Nueva contraseña" required >
          </div>

          <div class="form-group">
            
            <input id="txtPasswordConfirm" name="txtPasswordConfirm" class="form-control" type="password" placeholder="Confirmar contraseña" required >
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ACEPTAR</button>
          </div>
          
        </form>
      </div>
    </section>

    <div class="container panal-footer">
        <hr width="95%">
        <p class="text-center">Sistema de Gestion y control para la Asignación de Beneficios del Ambulatorio Isaias Medina Angarita</p>
        <p class="text-center">Copyright © 2022 Ministerio del Poder Popular Para La Salud</p>
        <p class="text-center">Todos los Derechos Reservados</p>
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