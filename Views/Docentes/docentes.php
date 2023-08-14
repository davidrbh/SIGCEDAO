<?php  headerAdmin($data); ?> 
    <main class="app-content"> 
    <?php getModal('modalDocentes',$data); ?>
      <div class="app-title">
        <div>
          <h1><i class=" fa fa-chalkboard-user"></i> <?= $data['page_title']; ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nuevo Docente</button>

        </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/docentes"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableDocentes">
                  <thead>
                    <tr>
                      
                      <th>Acciones</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cédula</th>
                      <th>Teléfono</th>
                      <th>Email</th>
                      <th>Especialidad</th>
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