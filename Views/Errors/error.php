<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?= media(); ?>/images/icon-logo.ico">
	<title>Pagina no encontrada
	
	</title>
	
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <!-- Main CSS-->
	  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
  	<link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
</head>

<body class="app sidebar-mini">

  <div id="divLoading">
    <div>
      <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
  </div>

  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">SIGCEDAO</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">

          <li><a class="dropdown-item" href="<?= base_url(); ?>/usuarios/perfil"><i class="fa fa-user fa-lg"></i>
              Perfil</a></li>
          <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="fa fa-sign-out fa-lg"></i>
              Cerrar Sesión</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/image-perfil.jpeg"
            alt="User Image">
        <div>
        <p class="app-sidebar__user-name"> <?= $_SESSION['userData']['nombres']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombre_rol']; ?></p>
        </div>
    </div>
    <ul class="app-menu">

        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                <i class="app-menu__icon fa fa-house"></i>
                <span class="app-menu__label">Inicio</span>
            </a>
        </li>



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-cubes" aria-hidden="true"></i>
                <span class="app-menu__label">Módulos administrativo</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">


                <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i>
                        Roles</a></li>


                <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>
                        Usuarios</a></li>

                <li><a class="treeview-item" href="<?= base_url(); ?>/personal_administrativo"><i
                            class="icon fa fa-circle-o"></i>
                        Personal administrativo</a></li>



                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                        <i class="app-menu__icon fa fa-sitemap" aria-hidden="true"></i>
                        <span class="app-menu__label">Configuraciones</span><i
                            class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">

                    <li><a class="treeview-item" href="<?= base_url(); ?>/secciones"><i
                                    class="icon fa fa-circle-o"></i>
                                Secciones</a></li>



                        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                       
                                <i class="app-menu__icon fa fa-chalkboard-user" aria-hidden="true"></i>
                                <span class="app-menu__label">Docentes</span><i
                                    class="treeview-indicator fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">

                                <li><a class="treeview-item" href="<?= base_url(); ?>/docentes"><i
                                            class="icon fa fa-circle-o"></i>
                                        Docentes</a></li>

                                <li><a class="treeview-item" href="<?= base_url(); ?>/especialidad"><i
                                            class="icon fa fa-circle-o"></i>
                                        Especialidad</a></li>

                            </ul>
                        </li>


                    </ul>
                </li>


            </ul>
        </li>


        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-solid fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Estudiantes</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">


                <li><a class="treeview-item" href="<?= base_url(); ?>/estudiantes_inicial"><i class="icon fa fa-circle-o"></i>
                        Inicial</a></li>


                <li><a class="treeview-item" href="<?= base_url(); ?>/estudiantes"><i class="icon fa fa-circle-o"></i>
                        Basica</a></li>

            </ul>
        </li>


        <li><a class="app-menu__item" href="<?= base_url(); ?>/representantes">
                <i class="app-menu__icon fa fa-id-card-o" aria-hidden="true"></i>
                <span class="app-menu__label">Representantes</span></a></li>


        <li><a class="app-menu__item" href="<?= base_url(); ?>/planillas">
                <i class="app-menu__icon fa fa-file-invoice" aria-hidden="true"></i>
                <span class="app-menu__label">Planillas</span></a></li>


                <li><a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar Sesión</span></a></li>
    </ul>
</aside>
<main class="app-content">
      <div class="page-error tile">
        <h1><i class="fa fa-exclamation-circle"></i> Error 404: Página no encontrada</h1>
        <p>No se encuentra la página que ha solicitado.</p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Regresar</a></p>
      </div>
    </main>

	<div class="container panal-footer">
    <hr width="95%">
    <p class="text-center">Sistema de Gestión y Control de Estudiantes para la Escuela Distrital Antonio Ornés</p>
    <p class="text-center">Copyright © 2023 Universidad Politecnica Territorial de Caracas Mariscal Sucre</p>
    <p class="text-center">Todos los Derechos Reservados</p>
    <img class="logos-logo" src="<?= media(); ?>/images/logo-colegio.png" alt width="80px">
    <img class="logos-logo" src="<?= media(); ?>/images/logo-uni.png" alt width="100px">
    <img class="logos-logo" src="<?= media(); ?>/images/logo-alcaldia.png" alt width="120px">

</div>

<script>
    const base_url = "<?= base_url(); ?>";
</script>
<!-- Essential javascripts for application to work-->
<script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= media(); ?>/js/popper.min.js"></script>
<script src="<?= media(); ?>/js/bootstrap.min.js"></script>
<script src="<?= media(); ?>/js/main.js"></script>
<script src="<?= media(); ?>/js/fontawesome.js"></script>


<!-- The javascript plugin to display page loading on top-->
<script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/plugins/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/dataTables-buttons-min.js"></script>
<script type="text/javascript" src="<?= media(); ?>/js/ajax-jszip-min.js"></script> 
<script type="text/javascript" src="<?= media(); ?>/js/ajax-pdfmake-min.js"></script> 
<script type="text/javascript" src="<?= media(); ?>/js/ajax-vsf-fonts-min.js"></script> 
<script type="text/javascript" src="<?= media(); ?>/js/buttons-html-min.js"></script> 
<script type="text/javascript" src="<?= media(); ?>/js/datatable-resposive-min.js"></script> 
<script type="text/javascript" src="<?= media(); ?>/js/functions_admin.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>



</body>

</html>

</body>
</html>