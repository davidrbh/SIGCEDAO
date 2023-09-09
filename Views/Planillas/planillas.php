<?php  headerAdmin($data); ?> 
    <main class="app-content"> 
  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-invoice"> </i> <?= $data['page_title']; ?></h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/planillas"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
           <div conteiner>



           <div class="col-md-3">
            <a href="<?= media(); ?>/archivos/constancia_estudio.pdf" download="constancia_estudio" class="linkw">

          <div class="widget-small primary"><i class="icon fa fa-file-invoice"></i>
            <div class="info">
              <h5>Constancia de Estudio</h5>
              <p><b>

              </b></p>
            </div>
          </div>
          </a>
        </div>

        <div class="col-md-3">
        <a href="<?= media(); ?>/archivos/constancia_inscripcion.pdf" download="constancia_inscripcion" class="linkw">
          <div class="widget-small info"><i class="icon fa fa fa-id-card-o fa-3x"></i>
            <div class="info">
              <h5>Constancia de Inscripción</h5>
             
              <p><b>

              </b></p>
            </div>
          </div>
          </a>
        </div>

        
        <div class="col-md-3">
        <a href="<?= media(); ?>/archivos/acta_compromiso.pdf" download="acta_compromiso type="button" onclick="openModalAgotado();" class="linkw">
          <div class="widget-small danger"><i class="icon fa fa fa-file-pdf fa-3x"></i>
            <div class="info">
              <h5>Acta de Compromiso</h5>
             
              <p><b>

              </b></p>
            </div>
          </div>
          </a>
        </div>


    
            </div>

          
          </div>
        </div>
      </div>
    
    </main>
    

<?php  footerAdmin($data); ?>