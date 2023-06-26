<!-- Modal -->
<div class="modal fade" id="modalFormEstudiante" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <h3 class="titulo-modal">DATOS DEL ALUMNO</h3>
      </div>
      <form id="formEstudiante" name="formEstudiante" class="form-horizontal">
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">
            
              <input type="hidden" id="idEstudiante" name="idEstudiante" value="">
              <p class="text-primary">Todos los campos son obligatorios.</p>



              <div class="form-row">


                <div class="form-group col-md-3">
                  <label class="control-label">Primer nombre:</label>
                  <input class="form-control valid validText" id="nombre_alumno1" name="nombre_alumno1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo Nombre (opcional):</label>
                  <input class="form-control valid validText" id="nombre_alumno2" name="nombre_alumno2" type="text" placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Primer apellido:</label>
                  <input class="form-control valid validText" id="apellido_alumno1" name="apellido_alumno1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo apellido (opcional):</label>
                  <input class="form-control valid validText" id="apellido_alumno2" name="apellido_alumno2" type="text"
                    placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label for="cedula_escolar">Cédula de identidad o Escolar:</label>
                  <input type="text" class="form-control valid validNumber" id="cedula_escolar" name="cedula_escolar"
                    placeholder="" maxlength="8" required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="fecha_nac">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac" value="" class="form-control" id="fecha_nac" step="1">
                </div>

                <div class="form-group col-md-3">
                  <label for="listGenero">Género:</label>
                  <select class="form-control selectpicker " id="listGenero" name="listGenero" required>
                    <option value="">Seleccione</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidad">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidad" name="listNacionalidad" required>
                    <option value="">Seleccione</option>
                    <option value="1">Venezolana</option>
                    <option value="2">Extranjera</option>
                  </select>
                </div>


                <div class="form-group col-md-3">
                  <label for="selectEstadoid">Entidad federal:</label>
                  <select class="form-control  " data-live-search="true" id="selectEstadoid" name="selectEstadoid"
                    required="">


                  </select>
                </div>


                <div class="form-group col-md-3">
                  <label class="control-label">Lugar de nacimiento:</label>
                  <input class="form-control valid" id="lugar_nacimiento" name="lugar_nacimiento" type="text" placeholder=""
                    required="">
                </div>



                <div class="form-group col-md-6">
                  <label class="control-label">Dirección de Habitación:</label>
                  <input class="form-control valid" id="direccion_habitacion" name="direccion_habitacion" type="text"
                    placeholder="" required="">
                </div>


              </div>

          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DATOS DE PADRES Y REPRESENTANTE</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">



              <div class="form-group col-md-2">
                <label class="control-label">Nombre de la madre:</label>
                <input class="form-control valid validText" id="nombre_madre" name="nombre_madre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Apellido de la madre:</label>
                <input class="form-control valid validText" id="apellido_madre" name="apellido_madre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-1">
                <label for="listNacionalidad_madre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_madre" name="listNacionalidad_madre" required>
                  <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_madre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_madre" name="cedula_madre" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Ocupación:</label>
                <input class="form-control valid validText" id="ocupacion_madre" name="ocupacion_madre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="telefono_madre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_madre" name="telefono_madre"
                  required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Nombre del padre:</label>
                <input class="form-control valid validText" id="nombre_padre" name="nombre_padre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Apellido del padre:</label>
                <input class="form-control valid validText" id="apellido_padre" name="apellido_padre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-1">
                <label for="listNacionalidad_padre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_padre" name="listNacionalidad_padre" required>
                  <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="cedula_padre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_padre" name="cedula_padre" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Ocupación:</label>
                <input class="form-control valid validText" id="ocupacion_padre" name="ocupacion_padre" type="text"
                  placeholder="">
              </div>

              <div class="form-group col-md-2">
                <label for="telefono_padre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_padre" name="telefono_padre">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Nombre del representante:</label>
                <input class="form-control valid validText" id="nombre_repre" name="nombre_repre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Apellido del representante:</label>
                <input class="form-control valid validText" id="apellido_repre" name="apellido_repre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-1">
                <label for="listNacionalidad_rep">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_rep" name="listNacionalidad_rep"
                  required>
                  <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>

              <div class="form-group col-md-2">
                <label for="cedula_repre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_repre" name="cedula_repre"
                  placeholder="" maxlength="8" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listParentesco">Parentesco con el Alumno:</label>
                <select class="form-control selectpicker " id="listParentesco" name="listParentesco" required>
                  <option value="">Seleccione</option>
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  <option value="Abuela">Abuela</option>
                  <option value="Abuelo">Abuelo</option>
                  <option value="Hermano">Hermano</option>
                  <option value="Hermana">Hermana</option>
                  <option value="Tio">Tio</option>
                  <option value="Tia">Tia</option>
                  
                </select>
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Ocupación:</label>
                <input class="form-control valid validText" id="ocupacion_repre" name="ocupacion_repre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="telefono_repre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_repre" name="telefono_repre"
                  required="">
              </div>

              <div class="form-group col-md-2">
                <label for="celular_repre">celular:</label>
                <input type="text" class="form-control valid validNumber" id="celular_repre" name="celular_repre"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-5">
                <label class="control-label">Dirección de Habitación:</label>
                <input class="form-control valid" id="direccion_repre" name="direccion_repre" type="text" placeholder=""
                  required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Colaboración que puede prestar al plantel:</label>
                <input class="form-control valid" id="colaboracion_plantel" name="colaboracion_plantel" type="text" placeholder="">
              </div>



            </div>


          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DATOS DEL AÑO ESCOLAR ANTERIOR</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">



              <div class="form-group col-md-3">
                <label class="control-label">Escuela:</label>
                <input class="form-control valid" id="plantel" name="plantel" type="text"
                  placeholder="Plantel de procedencia" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listGrado_cursado">Grado cursado:</label>
                <select class="form-control selectpicker" id="listGrado_cursado" name="listGrado_cursado" required>
                  <option value="">Seleccione</option>
                  <option value="Primero">Primero (1)</option>
                  <option value="Segundo">Segundo (2)</option>
                  <option value="Tercero">Tercero (3)</option>
                  <option value="Cuarto">Cuarto (4)</option>
                  <option value="Quinto">Quinto (5)</option>
                  <option value="Sexto">Sexto (6)</option>



                </select>
              </div>


              <div class="form-group col-md-2">

                <label class="control-label" for="periodo-escolar-anterior">Periodo escolar:</label>
                <select class="form-control" id="periodo-escolar-anterior" name="periodo-escolar-anterior">
                  <option value="2022-2023">2022-2023</option>
                </select>

              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Literal:</label>
                <input class="form-control valid " id="literal" name="literal" type="text" placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label for="listRepitiente">Repitiente:</label>
                <select class="form-control selectpicker" id="listRepitiente" name="listRepitiente" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>


            </div>

          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DATOS DE INSCRIPCIÓN DEL NUEVO AÑO ESCOLAR</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

      
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">

            <div class="form-group col-md-2">
                <label for="listTipo_alumno">Tipo de Alumno:</label>
                <select class="form-control selectpicker" id="listTipo_alumno" name="listTipo_alumno" required>
                  <option value="">Seleccione</option>
                  <option value="Nuevo ingreso">Nuevo Ingreso</option>
                  <option value="Segundo">Regular</option>
      
                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="listGrado_acursar">Grado a cursar:</label>
                <select class="form-control selectpicker" id="listGrado_acursar" name="listGrado_acursar" required>
                  <option value="">Seleccione</option>
                  <option value="Primero">Primero (1)</option>
                  <option value="Segundo">Segundo (2)</option>
                  <option value="Tercero">Tercero (3)</option>
                  <option value="Cuarto">Cuarto (4)</option>
                  <option value="Quinto">Quinto (5)</option>
                  <option value="Sexto">Sexto (6)</option>



                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="listTurno">Turno:</label>
                <select class="form-control selectpicker" id="listTurno" name="listTurno" required>
                  <option value="">Seleccione</option>
                  <option value="Diurno">Diurno</option>
                  <option value="Vespertino">Vespertino</option>




                </select>
              </div>



              <div class="form-group col-md-2">

                <label class="control-label" for="periodo-escolar-actual">Periodo escolar:</label>
                <select class="form-control" id="periodo-escolar-actual" name="periodo-escolar-actual">
                  <option value="2022-2023">2022-2023</option>
                </select>

              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Funcionario que realiza la inscripción:</label>
                <input class="form-control valid " id="funcionario" name="funcionario" type="text" placeholder=""
                  required="">
              </div>

              <div class="form-group col-md-3">
                <label for="fecha_inscripcion">Fecha de inscripción:</label>
                <input type="date" name="fecha_inscripcion" value="" class="form-control" id="fecha_inscripcion"
                  step="1">
              </div>


            </div>

          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DATOS SOCIO-ECONÓMICOS</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">


            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">

              <div class="form-group col-md-3" >
                <label for="padece_enfermedad">Padece de alguna enfermedad?</label>
                <select class="form-control selectpicker " id="listPadece_enfermedad" name="listPadece_enfermedad" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="form-group col-md-3 oculto" style="display: none;">
                <label class="control-label">Enfermedades que padece:</label>
                <input class="form-control valid" id="enfermedad_padece" name="enfermedad_padece" type="text" value="" placeholder="">
              </div>

              <div class="form-group col-md-2 oculto" style="display: none;">
                <label for="listTratamiento">Sigue tratamiento?</label>
                <select class="form-control selectpicker " id="listTratamiento"  name="listTratamiento">
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="form-group col-md-4 oculto oculto1" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid " id="tratamiento" name="tratamiento" value="" type="text" placeholder="">
              </div>


              <div class="form-group col-md-3 ">
                <label for="listAlergico_medicamento">Alergico a algún medicamento?</label>
                <select class="form-control selectpicker " id="listAlergico_medicamento" name="listAlergico_medicamento" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="form-group col-md-4 oculto2" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid" id="medicamento" name="medicamento" value="" type="text" placeholder="">
              </div>



              <div class="form-group col-md-5 enfermedades">
                <label for="alumno_enfermedades" class="control-label">El Alumno ha padecido de estas
                  enfermedades?</label>
                <div class="animated-checkbox">
                  <label>
                    <input type="checkbox" id="checkRubeola" name="checkRubeola" value="0"><span
                      class="label-text">Rubeola</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkSarampion" name="checkSarampion" value="0"><span
                      class="label-text">Sarampión</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkLechina" name="checkLechina" value="0"><span
                      class="label-text">Lechina</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkPapera" name="checkPapera" value="0"><span
                      class="label-text">Paperas</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkOtra" name="checkOtra" value="0"><span
                      class="label-text">Otra</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkNinguna" name="checkNinguna" value="0"><span
                      class="label-text">Ninguna</span>
                  </label>
                  </label>
                </div>
              </div>

              <div class="form-group col-md-3 oculto3" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid" id="otra_enfermedad" name="otra_enfermedad" value="" type="text" placeholder="">
              </div>

              <div class="form-group col-md-3">
                <label for="listPsicologo">Ha sido tratado por psicologos?</label>
                <select class="form-control selectpicker" id="listPsicologo" name="listPsicologo" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="nacimiento_parto">Situación del nacimiento (parto):</label>
                <select class="form-control selectpicker " id="nacimiento_parto" name="nacimiento_parto" required>
                  <option value="">Seleccione</option>
                  <option value="Normal">Normal</option>
                  <option value="Cesaria">Cesária</option>
                  <option value="Forceps">Forceps</option>


                </select>
              </div>



              <div class="form-group col-md-3">
                <label for="listSeva_solo">El Alumno se va solo?</label>
                <select class="form-control selectpicker" id="listSeva_solo" name="listSeva_solo" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>

              <div class="form-group col-md-5">
                <label class="control-label">Nombre de la persona autorizada para retirarlo:</label>
                <input class="form-control valid validText" id="autorizada_retirarlo" value="" name="autorizada_retirarlo" type="text" placeholder="">
              </div>


              <div class="form-group col-md-3">
                <label for="listParentesco_retiro">Parentesco con el Estudiante:</label>
                <select class="form-control selectpicker " id="listParentesco_retiro" name="listParentesco_retiro">
                  <option value="">Seleccione</option>
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  <option value="Abuela">Abuela</option>
                  <option value="Abuelo">Abuelo</option>
                  <option value="Hermano">Hermano</option>
                  <option value="Hermana">Hermana</option>
                  <option value="Tio">Tio</option>
                  <option value="Tia">Tia</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>


              <div class="form-group col-md-4">
                <label class="control-label">Con quién vive el Alumno?</label>
                <div class="animated-checkbox">
                  <label>
                    <input type="checkbox" id="checkMadre" name="checkMadre" value=""><span
                      class="label-text">Madre</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkPadre" name="checkPadre" value=""><span
                      class="label-text">Padre</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkHermano" name="checkHermano" value=""><span
                      class="label-text">Hermanos</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkOtro" name="checkOtro" value=""><span
                      class="label-text">Otras personas</span>
                  </label>
                  </label>
                </div>
              </div>

              <div class="form-group col-md-5 oculto4" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid validText" id="alumnoVive_otra" value="" name="alumnoVive_otra" type="text"
                  placeholder="">
              </div>


              <div class="form-group col-md-3 oculto5" style="display: none;">
                <label for="cuantos_hermanos">Cuantos hermanos varones:</label>
                <select class="form-control selectpicker " id="cuantos_hermanos" name="cuantos_hermanos">
                  <option value="">Seleccione</option>
                  <option value="0">Ninguno</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option> 

                </select>
              </div>


              <div class="form-group col-md-3 oculto5" style="display: none;">
                <label for="cuantas_hermanas">Cuantos hermanas hembras:</label>
                <select class="form-control selectpicker " id="cuantas_hermanas" name="cuantas_hermanas" >
                  <option value="">Seleccione</option>
                  <option value="0">Ninguna</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>
              </div>



              <div class="form-group col-md-3">
                <label for="listHermano_plantel">El Alumno tiene hermanos en el plantel?</label>
                <select class="form-control selectpicker" id="listHermano_plantel" name="listHermano_plantel" required>
                  <option value="">Seleccione</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>

              <div class="form-group col-md-3 oculto6" style="display: none;">
                <label for="hermanos_plantel">Número de hermanos:</label>
                <select class="form-control selectpicker " id="hermanos_plantel" name="hermanos_plantel" >
                  <option value="">Seleccione</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>
              </div>

              <div class="form-group col-md-3 oculto6" style="display: none;>
                <label class="control-label">Grado que cursan:</label>
                <input class="form-control valid" id="grado_hermanos" name="grado_hermanos" value="" type="text" placeholder="">
              </div>

              <div class="form-group col-md-3 oculto6" style="display: none;>
                <label class="control-label">Turno:</label>
                <input class="form-control valid" id="turno_hermanos" name="turno_hermanos" value="" type="text" placeholder="">
              </div>

              <div class="form-group col-md-3">
                <label for="listVivienda">Tipo de vivienda:</label>
                <select class="form-control selectpicker " id="listVivienda" name="listVivienda" required>
                  <option value="">Seleccione</option>
                  <option value="Apartamento">Apartamento</option>
                  <option value="Casa">Casa</option>
                  <option value="Casa familiar">Casa familiar</option>
                  <option value="Habitacion">Habitación</option>


                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="listCondicion_vivienda">Condición de la vivienda:</label>
                <select class="form-control selectpicker " id="listCondicion_vivienda" name="listCondicion_vivienda" required>
                  <option value="">Seleccione</option>
                  <option value="Apartamento">Alquilada</option>
                  <option value="Casa">Propia</option>



                </select>
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Ingreso Familiar aproximado en Bs (Mensual):</label>
                <input class="form-control valid" id="ingreso_familia" name="ingreso_familia" type="text" placeholder="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Número de persona que depende de ese ingreso:</label>
                <input class="form-control valid validNumber" id="ingreso_numeroPersona" name="ingreso_numeroPersona"
                  type="text"  maxlength="1" placeholder="">
              </div>




            </div>


          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DOCUMENTOS ASIGNADOS AL MOMENTO DE LA INSCRIPCIÓN</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">


            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">


              <div class="form-group col-md-12">
                <label class="control-label">Documentos:</label>
                <div class="animated-checkbox">
                  <label>
                    <input type="checkbox" id="checkBoletin" name="checkBoletin" value="0"><span
                      class="label-text">Boletin de calificación</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkPromocion" name="checkPromocion" value="0"><span
                      class="label-text">Boletin de promoción</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkconducta" name="checkconducta" value="0"><span
                      class="label-text">Carta de buena conducta</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkPartida" name="checkPartida"
                      value="0"><span class="label-text">Copia de partida de
                      nacimento</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkCedulaAlumno" name="checkCedulaAlumno"
                      value="0"><span class="label-text">Copia de la cédula del
                      alumno</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkCedulaRepre" name="checkCedulaRepre"
                      value="0"><span class="label-text">Copia de la cédula del
                      representante</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkFotosAlumno" name="checkFotosAlumno" value="0"><span
                      class="label-text">Fotos del alumno</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkFotosRepre" name="checkFotosRepre"
                      value="0"><span class="label-text">Fotos del representante</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkBoletinGrado" name="checkBoletinGrado"
                      value="0"><span class="label-text">Boletin de grado</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkOtrosDocumentos" name="checkOtrosDocumentos" value="0"><span
                      class="label-text">Otros</span>
                  </label>
                  </label>
                </div>
              </div>


              <div class="form-group col-md-3 oculto7" style="display:none;"> 
                <label class="control-label">Otros Documentos:</label>
                <input class="form-control valid" id="otros_documentos" name="otros_documentos" type="text" placeholder=""
                 value="">
              </div>



              <div class="form-group col-md-3">
                <label for="exampleSelect1">Status:</label>
                <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
              </div>

            </div>
            <div class="tile-footer">
              <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                  class="fa fa-fw fa-lg fa-check-circle"></i><span
                  id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;

              <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                  class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>

            </div>

</form>

          </div>
        </div>

      </div>



    </div>

  </div>
</div>