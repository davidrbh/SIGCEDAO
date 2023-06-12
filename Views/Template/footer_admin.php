<div class="container panal-footer">
    <hr width="95%">
    <p class="text-center">Sistema de Gestión y Control de Estudiantes para la Escuela Distrital Antonio Ornes</p>
    <p class="text-center">Copyright © 2023 Universidad Politecnica Territorial de Caracas Mariscal Sucre</p>
    <p class="text-center">Todos los Derechos Reservados</p>
    <img class="logos-logo" src="<?= media(); ?>/images/logo-colegio.png" alt width="80px">
    <img class="logos-logo" src="<?= media(); ?>/images/logo-uni.png" alt width="100px">
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
<script src="<?= media(); ?>/js/datepicker/jquery-ui.min.js"></script>



<script type="text/javascript" src="<?= media(); ?>/js/functions_admin.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>



</body>

</html>