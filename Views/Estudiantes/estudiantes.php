<?php  headerAdmin($data); ?>
<div id="contentAjax"></div>
<main class="app-content"> 

<?php getModal('modalEstudiantes',$data);
       ?> 


  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-solid fa-users"> </i> <?= $data['page_title']; ?>
          <?php if(!empty($_SESSION['permisos'][8]['w'])){ ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nuevo Alumno</button>
          <?php } ?>
        </h1>
         

          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/estudiantes"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>


      
      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableEstudiantes">
                  <thead>
                    <tr>
                      
               
                      <th>Acciones</th>
                      <th>Primer nombre</th>
                      <th>Segundo nombre</th>
                      <th>Primer apellido</th>
                      <th>Segundo apellido</th>
                      <th>Cédula escolar</th>
                      <th>fecha nacimiento</th>
                      <th>Género</th>
                      <th>Nacionalidad</th>
                      <th>Estado</th>
                      <th>Lugar de nacimiento</th>
                      <th>Dirección</th>
                      <th>Nombre de la madre</th>
                      <th>Apellido de la madre</th>
                      <th>Nacionalidad de la madre</th>
                      <th>Cédula de la madre</th>
                      <th>Ocupación de la madre</th>
                      <th>Teléfono de la madre</th>
                      <th>Nombre del padre</th>
                      <th>Apellido del padre</th>
                      <th>Nacionalidad del padre</th>
                      <th>Cédula del padre</th>
                      <th>Ocupación del padre</th>
                      <th>Teléfono del padre</th>
                      <th>Nombre del representante</th>
                      <th>Apellido del representante</th>
                      <th>Nacionalidad del representante</th>
                      <th>Cédula del representante</th>
                      <th>Parentesco del representante</th>
                      <th>Ocupación del representante</th>
                      <th>Teléfono del representante</th>
                      <th>Celular del representante</th>
                      <th>Dirección del representante</th>
                      <th>Colaboración con el plantel</th>
                      <th>Nombre del plantel</th>
                      <th>Grado cursado</th>
                      <th>Périodo escolar</th>
                      <th>Literal</th>
                      <th>Es repitiente?</th>
                      <th>Tipo de alumno</th>
                      <th>Turno</th>
                      <th>Sección</th>
                      <th>Nuevo périodo escolar</th>
                      <th>Fucionario que registra</th>
                      <th>Fecha de inscripción</th>
                      <th>Padece de enfermedad?</th>
                      <th>Nombre de la enfermedad</th>
                      <th>Utiliza tratamiento?</th>
                      <th>Nombre del tratamiento</th>
                      <th>Alergico a medicamento?</th>
                      <th>Nombre del medicamento</th>
                      <th>Rubeola</th>
                      <th>Sarampión</th>
                      <th>Lechina</th>
                      <th>Paperas</th>
                      <th>Posee otra enfermedad?</th>
                      <th>Nombre de la enfermedad</th>
                      <th>Ninguna enfermdad</th>
                      <th>Atendido por psicológo?</th>
                      <th>Tipo de nacimiento de parto</th>
                      <th>Se va solo?</th>
                      <th>Nombre del representante</th>
                      <th>Parentesco</th>
                      <th>Vive con la madre</th>
                      <th>Vive con el padre</th>
                      <th>Vive con hermanos</th>
                      <th>Cuantos hermanos</th>
                      <th>Cuantas hermanas</th>
                      <th>Vive con otra persona</th>
                      <th>Con quién vive?</th>
                      <th>Tiene Hermanos en el plantel?</th>
                      <th>Cuantos hermanos</th>
                      <th>Grado que cursan</th>
                      <th>Turno que cursan</th>
                      <th>Tipo de vivienda</th>
                      <th>Condición de la vivienda</th>
                      <th>Ingresos familiares</th>
                      <th>N* personas que dependen del ingreso</th>
                      <th>Boletin de calificaciones</th>
                      <th>Boletin de promoción</th>
                      <th>Carta de buena conducta</th>
                      <th>Copia de partida de nacimiento</th>
                      <th>Copia de cedula del alumno/a</th>
                      <th>Foto del alumno</th>
                      <th>Copia de cedula del representante</th>
                      <th>Foto del representante</th>
                      <th>Boletin de grando</th>
                      <th>Otros documentos</th>
                      <th>Documentos</th>
                      <th>Status</th>
                      
                   


                      
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         </div>
         </div>
    
    </main>
    

<?php  footerAdmin($data); ?>