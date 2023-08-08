<?php  headerAdmin($data); ?>
<div id="contentAjax"></div>
<main class="app-content"> 

<?php getModal('modalEstudiantes',$data);
       ?> 


  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-solid fa-users"> </i> <?= $data['page_title']; ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nuevo Alumno</button>
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
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cédula</th>
                      <th>Representante</th>
                      <th>Teléfono</th>
                      <th>Celular</th>
                      <th>Sección</th>
                      <th>Turno</th>
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