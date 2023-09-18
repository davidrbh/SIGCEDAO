<?php  headerAdmin($data); ?> 
    <main class="app-content"> 
  
      <div class="app-title">
        <div>
          <h1><i class="fa-solid fa-chalkboard-user"></i> <?= $data['page_title']; ?></h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/secciones"><?= $data['page_title']; ?></a></li>
        </ul>
      </div>

      <div class="col-md-13">
          <div class="tile">
          
            <h3 class="tile-title">Filtrar por secciones</h3>
            <div class="tile-body">
              <form class="row"  id="formSecciones" name="formSecciones">

              <div class="form-group col-md-3">
                  <label class="control-label">Periodo Escolar</label>
                  <input class="form-control valid " id="periodo" name="periodo" type="text" placeholder="Periodo escolar" required="">
                </div>

                <div class="form-group col-md-2">
                <label for="listNivel">Nivel:</label>
                <select class="form-control selectpicker" id="listNivel" name="listNivel" required>
                  <option value="">Seleccione</option>
                  <option value="1">Inicial</option>
                  <option value="2">Basica</option>
                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="listTurno">Turno:</label>
                <select class="form-control selectpicker" id="listTurno" name="listTurno" required>
                  <option value="">Seleccione</option>
                  <option value="1">Diurno</option>
                  <option value="2">Vespertino</option>
                </select>
              </div>


              

              <div class="form-group col-md-2">
                  <label for="listSeccion">Grado:</label>
                  <select class="form-control  " data-live-search="true" id="listSeccion" name="listSeccion"
                    required="">


                  </select>
                </div>

               
                <div class="mb-3 col-md-2 align-self-end">
                  <button class="btn btn-primary" onClick="ftnSearchSecciones();" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Buscar</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      <div class="row">
         <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered display responsive nowrap" id="tableSecciones">
                  <thead>
                    <tr>
                      
                
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cédula escolar</th>
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