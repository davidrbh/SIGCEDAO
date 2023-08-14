<!-- Modal -->
<div class="modal fade" id="modalFormDocente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

        <div class="tile">
            <div class="tile-body">
              <form id="formDocente" name="formDocente">
              <input type="hidden" id="id_docente" name="id_docente" value="">

              <div class="form-group">
                  <label class="control-label">Nombre:</label>
                  <input class="form-control valid validText" id="nombreDocente" name="nombreDocente" type="text" placeholder="" required="">
                </div>
                <div class="form-group">
                  <label class="control-label">Apellido:</label>
                  <input class="form-control valid validText" id="apellidoDocente" name="apellidoDocente" type="text" placeholder="" required="">
                </div>
                <div class="form-group">
                <label for="listNacionalidad_docente">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_docente" name="listNacionalidad_docente" required>
                  <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>

              <div class="form-group">
                  <label class="control-label">Cédula:</label>
                  <input class="form-control valid validNumber" id="cedulaDocente" name="cedulaDocente" type="text" placeholder="" required="">
                </div>

                <div class="form-group">
                  <label class="control-label">Teléfono:</label>
                  <input class="form-control valid validNumber" id="telefonoDocente" name="telefonoDocente" type="text" placeholder="" required="">
                </div>

                <div class="form-group">
                  <label class="control-label">Email:</label>
                  <input class="form-control valid valid" id="emailDocente" name="emailDocente" type="text" placeholder="" required="">
                </div>

                <div class="form-group">
                    <label for="listEspecialidad">Tipo de especialidad:</label>
                    <select class="form-control" data-live-search="true" id="listEspecialidad" name="listEspecialidad" required="" >
                    </select>
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
<div class="modal fade" id="modalViewDocente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog " >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos de la especialidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <table class="table table-bordered">
          <tbody>
           
            <tr>
              <td>Nombre:</td>
              <td id="celNombre">Jacob</td>
            </tr>
            <tr>
              <td>Apellido:</td>
              <td id="celApellido">Jacob</td>
            </tr>
            <tr>
              <td>Cédula:</td>
              <td id="celCedula">Larry</td>
            </tr>
            <tr>
              <td>Teléfono:</td>
              <td id="celTelefono">Larry</td>
            </tr>
            <tr>
              <td>Email:</td>
              <td id="celEmail">Larry</td>
            </tr>
            <tr>
              <td>Especialidad:</td>
              <td id="celEspecialidad">Larry</td>
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



