<!-- Modal -->
<div class="modal fade" id="modalFormSecciones_config" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Sección</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

        <div class="tile">
            <div class="tile-body">
              <form id="formSecciones_config" name="formSecciones_config">
                <input type="hidden" id="id_seccion" name="id_seccion" value="">
                <div class="form-group">
                  <label for="selectSeccionesid">Secciones:</label>
                  <select class="form-control  " data-live-search="true" id="selectSeccionesid" name="selectSeccionesid"
                    required="">
                  </select>
                </div>
                <div class="form-group">
                  <label for="selectDocenteid">Docentes:</label>
                  <select class="form-control  " data-live-search="true" id="selectDocenteid" name="selectDocenteid"
                    required="">
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Período Escolar</label>
                  <textarea class="form-control valid validNumber" id="periodo_escolar" name="periodo_escolar" placeholder="Período Escolar" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Status</label>
                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                  <div class="tile-footer">
                  <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#" data-dismiss="modal" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
      </div> 
    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="modalViewSecciones_config" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog " >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos de la sección</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <table class="table table-bordered">
          <tbody>
           
            <tr>
              <td>Sección:</td>
              <td id="celNombre_seccion">Jacob</td>
            </tr>
            <tr>
              <td>Docente:</td>
              <td id="celNombre_docente">Jacob</td>
            </tr>
            <tr>
              <td>Periodo escolar:</td>
              <td id="celPeriodo_escolar">Larry</td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td id="celEstado">Larry</td>
            </tr>
           
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



