<?php  headerAdmin($data); ?>
<div id="contentAjax"></div>
<main class="app-content"> 

<?php 
      getModal('modalPre-escolar',$data);  ?> 


  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-solid fa-users"> </i> <?= $data['page_title']; ?>
          <?php if(!empty($_SESSION['permisos'][7]['w'])){ ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nuevo Alumno</button>  
          <?php } ?>     
        </h1>
         

          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/estudiantes_inicial"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>


      
      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableEstudiantesInicial">
                  <thead>
                    <tr>
                      
                     <th>Acciones</th>
                     <th>Primer nombre</th>
                     <th>Segundo nombre</th>
                     <th>Primer apellido</th>
                     <th>Segundo apellido</th>
                     <th>Cédula escolar</th>
                     <th>Fecha de nacimiento</th>
                     <th>Género</th>
                     <th>Nacionalidad</th>
                     <th>Entidad federal</th>
                     <th>Lugar de nacimiento</th>
                     <th>Talla de camisa</th>
                     <th>Talla de pantalón</th>
                     <th>Talla de zapato</th>
                     <th>Peso (KG)</th>
                     <th>Estatura (Metro)</th>
                     <th>Tiene hermanos?</th>
                     <th>Cuantos hermanos?</th>
                     <th>Tipo de Alumno</th>
                     <th>Turno</th>
                     <th>Sección</th>
                     <th>Periodo escolar</th>
                     <th>Funcionario</th>
                     <th>Fecha de inscripción</th>
                     <th>Nombre de la madre</th>
                     <th>Apellido de la madre</th>
                     <th>Nacionalidad de la madre</th>
                     <th>Cédula de la madre</th>
                     <th>Estado civil</th>
                     <th>Lugar de nacimiento de la madre</th>
                     <th>Nacionalidad</th>
                     <th>Entidad federal</th>
                     <th>Fecha de nacimiento de la madre</th>
                     <th>Dirección de la madre</th>
                     <th>Teléfono de la madre</th>
                     <th>Dirección de trabajo de la madre</th>
                     <th>Teléfono de trabajo</th>
                     <th>Nivel academico</th>
                     <th>Otros datos importantes de la madre</th>
                     <th>Nombre del padre</th>
                     <th>Apellido del padre</th>
                     <th>Nacionalidad del padre</th>
                     <th>Cédula del padre</th>
                     <th>Estado civil</th>
                     <th>Lugar de nacimiento del padre</th>
                     <th>Nacionalidad del padre</th>
                     <th>Entidad federal</th>
                     <th>Fecha de nacimiento del padre</th>
                     <th>Dirección del padre</th>
                     <th>Teléfono del padre</th>
                     <th>Dirección de trabajo del padre</th>
                     <th>Teléfono de trabajo</th>
                     <th>Nivel academico</th>
                     <th>Otros datos importantes del padre</th>
                     <th>Come solo?</th>
                     <th>Lo ayudan?</th>
                     <th>Quién lo ayuda?</th>
                     <th>Comida favorita</th>
                     <th>Comida que rechaza</th>
                     <th>Alimentos prohibidos</th>
                     <th>Controla el esfinteres?</th>
                     <th>Se asea solo?</th>
                     <th>Cuantas horas duerme?</th>
                     <th>Tiempo que le dedica la madre</th>
                     <th>Tiempo que le dedica el padre</th>
                     <th>Tiempo que le dedica los abuelos</th>
                     <th>Nombre de la persona que lo retira</th>
                     <th>Nacionalidad</th>
                     <th>Cédula</th>
                     <th>Teléfono</th>
                     <th>Parentesco con el alumno</th>
                     <th>Situación del embarazo de la madre</th>
                     <th>Enfermedades durante el embarazo</th>
                     <th>Oficio o trabajo realizado durante el mismo</th>
                     <th>Situación del parto en el nacimiento</th>
                     <th>Edad durante el parto</th>
                     <th>Problemas durante el parto?</th>
                     <th>Cual problema?</th>
                     <th>Peso al nacer(KG)</th>
                     <th>Talla(CM)</th>
                     <th>Problemas a los primeros dias del parto?</th>
                     <th>Cual problema?</th>
                     <th>Edad que comenzo hablar</th>
                     <th>Edad que comenzo a caminar</th>
                     <th>Edad que dejo de utilizar pañales</th>
                     <th>Peso del alumno actual (KG):</th>
                     <th>Talla (CM)</th>
                     <th>Grupo sanguineo</th>
                     <th>Es alergico?</th>
                     <th>Especifique alergia</th>
                     <th>Enfermedades padecidas</th>
                     <th>Ha sido hospitalizado alguna vez?</th>
                     <th>Causa?</th>
                     <th>En caso de fiebre alta, que medicamento le administra?</th>
                     <th>Discapacidad motora</th>
                     <th>Discapacidad de crecimiento</th>
                     <th>Discapacidad auditiva</th>
                     <th>Discapacidad visual</th>
                     <th>Otra discapacidad?</th>
                     <th>Cuál?</th>
                     <th>Es atendido por especialitas?</th>
                     <th>Cuál?</th>
                     <th>Presento problemas en el lenguaje?</th>
                     <th>Mano que utiliza frecuentemente</th>
                     <th>Hora en que se acuesta</th>
                     <th>Hora en que se levanta</th>
                     <th>Sueño del niño(a)</th>
                     <th>Con quién duerme el niño?</th>
                     <th>Otra informacion que desee suministrar y deba suministrar:</th>
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