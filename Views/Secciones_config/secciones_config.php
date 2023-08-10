<?php  headerAdmin($data); ?> 
    <main class="app-content"> 
    <?php getModal('modalSecciones_config',$data); ?>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-id-card-o"></i> <?= $data['page_title']; ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nueva Sección</button>

        </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/secciones_config"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>
      <div class="row">

      <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableSecciones_config">
                  <thead>
                    <tr>
                      
                      <th>Acciones</th>
                      <th>Sección</th>
                      <th>Docente</th>
                      <th>Periodo escolar</th>
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
      
    </main>
    

<?php  footerAdmin($data); ?>