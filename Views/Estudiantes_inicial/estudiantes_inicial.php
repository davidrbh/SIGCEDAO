<?php  headerAdmin($data); ?>
<div id="contentAjax"></div>
<main class="app-content"> 

<?php 
      getModal('modalPre-escolar',$data);  ?> 


  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-solid fa-users"> </i> <?= $data['page_title']; ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nuevo Alumno</button>       
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
                      <th>Nombre del alumno</th>
                      <th>Apellido del alumno</th>
                      <th>Cédula escolar</th>
                      <th>Nombre de la madre</th>
                      <th>Teléfono</th>
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