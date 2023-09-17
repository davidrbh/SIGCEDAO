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

      <div class="col-md-8">
          <div class="tile">
          
            <h3 class="tile-title">Filtrar por secciones</h3>
            <div class="tile-body">
              <form class="row"  id="formSecciones" name="formSecciones">

              <!-- <div class="form-group col-md-3">
                <label for="listPeriodo">Periodo Escolar:</label>
                <select class="form-control selectpicker" id="listPeriodo" name="listPeriodo"  required>
                  <option value="">Seleccione</option>
                  <option value="2020-2021">2020-2021</option>
                  <option value="2021-2022">2021-2022</option>
                  <option value="2022-2023">2022-2023</option>
                  <option value="2023-2024">2023-2024</option>
                  <option value="2024-2025">2024-2025</option>
                  <option value="2025-2026">2025-2026</option>
                  <option value="2026-2027">2026-2027</option>
                  <option value="2027-2028">2027-2028</option>
                  <option value="2028-2029">2028-2029</option>
                  <option value="2029-2030">2029-2030</option>
                  <option value="2030-2031">2030-2031</option>
                  <option value="2031-2032">2031-2032</option>
                  <option value="2032-2033">2032-2033</option>
                  <option value="2033-2034">2033-2034</option>
                  <option value="2034-2035">2034-2035</option>
                  <option value="2035-2036">2035-2036</option>
                  <option value="2036-2037">2036-2037</option>
                  <option value="2037-2038">2037-2038</option>
                  <option value="2038-2039">2038-2039</option>
                  <option value="2039-2040">2039-2040</option>
                
                </select>
              </div> -->
              <div class="form-group col-md-3">
                  <label class="control-label">Periodo Escolar</label>
                  <input class="form-control valid " id="periodo" name="periodo" type="text" placeholder="Periodo escolar" required="">
                </div>


              <div class="form-group col-md-3">
                <label for="listTurno">Turno:</label>
                <select class="form-control selectpicker" id="listTurno" name="listTurno" required>
                  <option value="">Seleccione</option>
                  <option value="1">Diurno</option>
                  <option value="2">Vespertino</option>
                </select>
              </div>
<!-- 
              <div class="form-group col-md-3">
                <label for="listSeccion">Grado a cursar:</label>
                <select class="form-control selectpicker" id="listSeccion" name="listSeccion" required>
                  <option value="">Seleccione</option>
                  <option value="3">Primero A</option>
                  <option value="4">Primero B</option>
                  <option value="5">Segundo A</option>
                  <option value="6">Segundo B</option>
                  <option value="7">Tercero A</option>
                  <option value="8">Tercero B</option>
                  <option value="9">Cuarto A</option>
                  <option value="10">Cuarto B</option>
                  <option value="11">Quinto A</option>
                  <option value="12">Quinto B</option>
                  <option value="13">Sexto A</option>
                  <option value="14">Sexto B</option>
                  <option value="17">Inicial A</option>
                  <option value="18">Inicial B</option>
                 

                </select>
              </div> -->

              

              <div class="form-group col-md-3">
                  <label for="listSeccion">Grado a cursar:</label>
                  <select class="form-control  " data-live-search="true" id="listSeccion" name="listSeccion"
                    required="">


                  </select>
                </div>

               
                <div class="mb-3 col-md-3 align-self-end">
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