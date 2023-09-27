<?php  headerAdmin($data); ?> 
    <main class="app-content"> 

    <?php getModal('modalEspecialidad',$data); ?>
  
      <div class="app-title">
        <div>
          <h1><i class="fa-solid fa-puzzle-piece"></i> <?= $data['page_title']; ?>
          <?php if(!empty($_SESSION['permisos'][6]['w'])){ ?>
          <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fa-solid fa-circle-plus"></i> Nueva especialidad</button>
          <?php } ?>
        </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/especialidad"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>


     
      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableEspecialidad">
                  <thead>
                    <tr>
                      
                      <th>Acciones</th>
                      <th>Tipo de especialidad</th>
                      <th>Descripción</th>
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