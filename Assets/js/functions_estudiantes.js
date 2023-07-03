let formEstudiante = document.querySelector("#formEstudiante");
formEstudiante.onsubmit = function (e) {
  e.preventDefault();

  let  strNombreAlumno = document.querySelector('#nombre_alumno1').value;
  let  strApellidoAlumno = document.querySelector('#apellido_alumno1').value;
  let  intCedulaEscolar = document.querySelector('#cedula_escolar').value;
  let  intGenero = document.querySelector('#listGenero').value;
  let  intNacionalidad = document.querySelector('#listNacionalidad').value;
  let  intEstado = document.querySelector('#selectEstadoid').value;
  let  strLugarNacimiento = document.querySelector('#lugar_nacimiento').value;
  let  strDireccionHabitacion = document.querySelector('#direccion_habitacion').value; 
  let  strNombreMadre = document.querySelector('#nombre_madre').value;
  let  strApellidoMadre = document.querySelector('#apellido_madre').value;
  let  intNacionalidadMadre = document.querySelector('#listNacionalidad_madre').value;
  let  intCedulaMadre = document.querySelector('#cedula_madre').value;
  let  strOcupacionMadre = document.querySelector('#ocupacion_madre').value;
  let  intTelefonoMadre = document.querySelector('#telefono_madre').value;
  let  strNombrePadre = document.querySelector('#nombre_padre').value;
  let  strApellidoPadre = document.querySelector('#apellido_padre').value;
  let  intNacionalidadPadre = document.querySelector('#listNacionalidad_padre').value;
  let  intCedulaPadre = document.querySelector('#cedula_padre').value;
  let  strOcupacionPadre = document.querySelector('#ocupacion_padre').value;
  let  intTelefonoPadre = document.querySelector('#telefono_padre').value;
  let  strNombreRepre = document.querySelector('#nombre_repre').value;
  let  strApellidoRepre = document.querySelector('#apellido_repre').value;
  let  intNacionalidadRepre = document.querySelector('#listNacionalidad_rep').value;
  let  intCedulaRepre = document.querySelector('#cedula_repre').value;
  let  strParentesco = document.querySelector('#listParentesco').value;
  let  strOcupacionRepre = document.querySelector('#ocupacion_repre').value;
  let  intTelefonoRepre = document.querySelector('#telefono_repre').value;
  let  intCelularRepre= document.querySelector('#celular_repre').value;
  let  strDireccionRepre = document.querySelector('#direccion_repre').value;
  let  strNombrePlantel = document.querySelector('#plantel').value;
  let  strGradoCursado = document.querySelector('#listGrado_cursado').value;
  let  strRepitiente = document.querySelector('#listRepitiente').value;
  let  strTipoAlumno = document.querySelector('#listTipo_alumno').value;
  let  strGradoAcursar = document.querySelector('#listGrado_acursar').value;
  let  strTurno = document.querySelector('#listTurno').value;
  let  strFuncionario = document.querySelector('#funcionario').value;
  let  strPadeceEnfermedad = document.querySelector('#listPadece_enfermedad').value;
  let  strAlergicoMedicamento = document.querySelector('#listAlergico_medicamento').value;
  let  strPsicologo = document.querySelector('#listPsicologo').value;
  let  strNacimientoParto = document.querySelector('#nacimiento_parto').value;
  let  strSevaSolo = document.querySelector('#listSeva_solo').value;
  let  strHermanosPlantel = document.querySelector('#listHermano_plantel').value;
  let  strTipoVivienda = document.querySelector('#listVivienda').value;
  let  strCondicionVivienda = document.querySelector('#listCondicion_vivienda').value;
  let  intStatus = document.querySelector('#listStatus').value;
  

  if(strNombreAlumno == '' || strApellidoAlumno == '' || intCedulaEscolar == '' || intGenero == ''
   || intNacionalidad == '' || intEstado == '' || strLugarNacimiento == ''|| strDireccionHabitacion == '' || strNombreMadre == '' || strApellidoMadre == '' || intNacionalidadMadre == ''
   || intCedulaMadre == '' || strOcupacionMadre == '' || intTelefonoMadre == ''|| strNombrePadre == '' || strApellidoPadre == '' || intNacionalidadPadre == '' || intCedulaPadre == ''
   || strOcupacionPadre == '' || intTelefonoPadre == '' || strNombreRepre == ''|| strApellidoRepre == '' || intNacionalidadRepre == '' || intCedulaRepre == '' || strParentesco == ''
   || strOcupacionRepre == '' || intTelefonoRepre == '' || intCelularRepre == ''|| strDireccionRepre == '' || strNombrePlantel == '' || strGradoCursado == '' || strRepitiente == ''
   || strTipoAlumno == '' || strGradoAcursar == '' || strTurno == ''|| strFuncionario == '' || strPadeceEnfermedad == '' || strAlergicoMedicamento == '' || strPsicologo == ''
   || strNacimientoParto == '' || strSevaSolo == '' || strHermanosPlantel == ''|| strTipoVivienda == '' || strCondicionVivienda == '' || intStatus == '')
  {
      swal("Atención", "Todos los campos son obligatorios." , "error");
      return false;
  };
 

  let elementsValid = document.getElementsByClassName("valid");
  for (let i = 0; i < elementsValid.length; i++) {
    if (elementsValid[i].classList.contains("is-invalid")) {
      swal("Atención", "Por favor verifique los campos en rojo.", "error");
      return false;
    }
  }
  divLoading.style.display = "flex";
  let request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  let ajaxUrl = base_url + "/Estudiantes/setEstudiante";
  let formData = new FormData(formEstudiante);
  request.open("POST", ajaxUrl, true);
  request.send(formData);

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      let objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#modalFormEstudiante").modal("hide");
        formEstudiante.reset();
        swal("Estudiantes", objData.msg, "success");
        tableEstudiantes.api().ajax.reload(function () {});
      } else {
        swal("Error", objData.msg, "error");
      }
    }

    divLoading.style.display = "none";
    return false;
  };
};



/**
 * Pre-escolar
 */

let formPre_escolar = document.querySelector("#formPre-escolar");
formPre_escolar.onsubmit = function (e) {
  e.preventDefault();

 
  let  strNombreAlumnoPre = document.querySelector('#nombre_alumnoPre1').value;
  let  strApellidoAlumnoPre = document.querySelector('#apellido_alumnoPre1').value;
  let  intCedulaEscolarPre = document.querySelector('#cedula_escolarPre').value;
  let  intGeneroPre = document.querySelector('#listGeneroPre').value;
  let  intNacionalidadPre = document.querySelector('#listNacionalidadPre').value;
  let  intEstadoPre = document.querySelector('#selectEstadoid2').value;
  let  strLugarNacimientoPre = document.querySelector('#lugar_nacimientoPre').value;
  let  intTallaCamisa = document.querySelector('#listTalla_camisa').value;
  let  intTallaPantalon = document.querySelector('#listTalla_pantalon').value;
  let  intTallaZapato = document.querySelector('#listTalla_zapato').value;
  let  intPeso = document.querySelector('#peso').value; 
  let  intEstatura = document.querySelector('#estatura').value; 
  let  strHermanosPre = document.querySelector('#listHermanosPre').value; 
  let  strNombreMadrePre = document.querySelector('#nombre_madrePre').value;
  let  strApellidoMadrePre = document.querySelector('#apellido_madrePre').value;
  let  intNacionalidadMadrePre = document.querySelector('#listNacionalidad_madrePre').value;
  let  intCedulaMadrePre = document.querySelector('#cedula_madrePre').value;
  let  strEstadoCivilMadre = document.querySelector('#listEstado_civil_madre').value;
  let  strNacimientoMadrePre = document.querySelector('#lugar_nacimientoMadrePre').value;
  let  strNacionalidad_madre_pre = document.querySelector('#listNacionalidad_madrePre').value;
  let  intEstadoMadrePre = document.querySelector('#selectEstadoid3').value;
  let  strDireccionHabitacionMadrePre = document.querySelector('#direccion_habitacion_madrePre').value;
  let  intTelefonoMadrePre = document.querySelector('#telefono_madrePre').value;
  let  strDireccionTrabajoMadrePre = document.querySelector('#direccion_trabajo_madrePre').value;
  let  strNivelAcademicoMadrePre = document.querySelector('#listNivel_academico_madre').value;
  let  strNombrePadrePre = document.querySelector('#nombre_padrePre').value;
  let  strApellidoPadrePre = document.querySelector('#apellido_padrePre').value;
  let  intNacionalidadPadrePre = document.querySelector('#listNacionalidad_padrePre').value;
  let  intCedulaPadrePre = document.querySelector('#cedula_padrePre').value;
  let  strEstadoCivilPadre = document.querySelector('#listEstado_civil_padrePre').value;
  let  strNacimientoPadrePre = document.querySelector('#lugar_nacimientoPadrePre').value;
  let  strNacionalidad_Padre_pre = document.querySelector('#listNacionalidad_padrePre').value;
  let  intEstadoPadrePre = document.querySelector('#selectEstadoid4').value;
  let  strDireccionHabitacionPadrePre = document.querySelector('#direccion_habitacion_Padre_Pre').value;
  let  intTelefonoPadrePre = document.querySelector('#telefono_padrePre').value;
  let  strDireccionTrabajoPadrePre = document.querySelector('#direccion_trabajo_padre').value;
  let  strNivelAcademicoPadrePre = document.querySelector('#listNivel_academico_padre').value;
  let  intStatus2 = document.querySelector('#listStatus2').value;
  

  if(strNombreAlumnoPre == '' || strApellidoAlumnoPre == '' || intCedulaEscolarPre == '' || intGeneroPre == ''
   || intNacionalidadPre == '' || intEstadoPre == '' || strLugarNacimientoPre == ''|| intTallaCamisa == '' || intTallaPantalon == '' || intTallaZapato == '' || intPeso == ''
   || intEstatura == '' || strHermanosPre == '' || strNombreMadrePre == ''|| strApellidoMadrePre == '' || intNacionalidadMadrePre == '' || intCedulaMadrePre == '' || strEstadoCivilMadre == ''
   || strNacimientoMadrePre == '' || strNacionalidad_madre_pre == '' || intEstadoMadrePre == ''|| strDireccionHabitacionMadrePre == '' || intTelefonoMadrePre == '' || strDireccionTrabajoMadrePre == '' || strNivelAcademicoMadrePre == ''
   || strNombrePadrePre == '' || strApellidoPadrePre == '' || intNacionalidadPadrePre == ''|| intCedulaPadrePre == '' || strEstadoCivilPadre == '' || strNacimientoPadrePre == '' || strNacionalidad_Padre_pre == ''
   || intEstadoPadrePre == '' || strDireccionHabitacionPadrePre == '' || intTelefonoPadrePre == ''|| strDireccionTrabajoPadrePre == '' || strNivelAcademicoPadrePre == '' || intStatus2 == '')
  {
      swal("Atención", "Todos los campos son obligatorios." , "error");
      return false;
  };

  let elementsValid = document.getElementsByClassName("valid");
  for (let i = 0; i < elementsValid.length; i++) {
    if (elementsValid[i].classList.contains("is-invalid")) {
      swal("Atención", "Por favor verifique los campos en rojo.", "error");
      return false;
    }
  }
  divLoading.style.display = "flex";
  let request = window.XMLHttpRequest
    ? new XMLHttpRequest()
    : new ActiveXObject("Microsoft.XMLHTTP");
  let ajaxUrl = base_url + "/Estudiantes/setPre_escolar";
  let formData = new FormData(formPre_escolar);
  request.open("POST", ajaxUrl, true);
  request.send(formData);

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      let objData = JSON.parse(request.responseText);
      if (objData.status) {
        $("#modalFormPre-escolar").modal("hide");
        formPre_escolar.reset();
        swal("Estudiantes", objData.msg, "success");
        tablePre_escolar.api().ajax.reload(function () {});
      } else {
        swal("Error", objData.msg, "error");
      }
    }

    divLoading.style.display = "none";
    return false;
  };
};

/**
 * openModal
 */
function openModal() {
  document.querySelector("#idEstudiante").value = "";
  document.querySelector(".modal-header").classList.replace("headerUpdate", "headerRegister");
  document.querySelector("#btnActionForm").classList.replace("btn-info", "btn-primary");
  document.querySelector("#btnText").innerHTML = "Guardar";
  document.querySelector("#titleModal").innerHTML = "Nuevo Estudiante";
  document.querySelector("#formEstudiante").reset();

  $("#modalFormEstudiante").modal("show");
}

function openModal2(){
  document.querySelector("#idPre-escolar").value = "";
  document.querySelector(".modal-header").classList.replace("headerUpdate", "headerRegister");
  document.querySelector("#btnActionForm").classList.replace("btn-info", "btn-primary");
  document.querySelector("#btnText").innerHTML = "Guardar";
  document.querySelector("#titleModal").innerHTML = "Nuevo Estudiante";
  document.querySelector("#formPre-escolar").reset();
  $("#modalFormPre-escolar").modal("show");
}

window.addEventListener("load",function () {
    fntEstado();
    fntPeriodoAnterior(obtenerPeriodoEscolarAnterior());
    fntPeriodoActual(obtenerPeriodoEscolarActual());
  },
  false
);

function fntEstado() {

  if (document.querySelector("#selectEstadoid")) {
    let ajaxUrl = base_url + "/Estudiantes/getSelectEstados";
    let request = window.XMLHttpRequest
      ? new XMLHttpRequest()
      : new ActiveXObject("Microsoft.XMLHTTP");
    request.open("GET", ajaxUrl, true);
    request.send();

    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        document.querySelector("#selectEstadoid").innerHTML = request.responseText;
        document.querySelector("#selectEstadoid").value = "";
        $("#selectEstadoid").selectpicker("render");
        document.querySelector("#selectEstadoid2").innerHTML = request.responseText;
        document.querySelector("#selectEstadoid2").value = "";
        $("#selectEstadoid2").selectpicker("render");
        document.querySelector("#selectEstadoid3").innerHTML = request.responseText;
        document.querySelector("#selectEstadoid3").value = "";
        $("#selectEstadoid3").selectpicker("render");
        document.querySelector("#selectEstadoid4").innerHTML = request.responseText;
        document.querySelector("#selectEstadoid4").value = "";
        $("#selectEstadoid4").selectpicker("render");
      
        
      }
    };
  };



}


function obtenerPeriodoEscolarAnterior() {
  const anioActual = new Date().getFullYear()-1;
  const anioInicio = 2020;
  const anioFin = 3000; // Ampliar el rango de años si es necesario
  let periodoEscolar;

  // Determinar el periodo escolar en función del año actual
  for (let anio = anioInicio; anio <= anioFin; anio++) {
    if (anio === anioActual) {
      periodoEscolar = `${anio}-${anio + 1}`;
      break;
    }
  }

  return periodoEscolar || "Desconocido";
}




function obtenerPeriodoEscolarActual() {
  const anioActual = new Date().getFullYear();
  const anioInicio = 2020;
  const anioFin = 3000; // Ampliar el rango de años si es necesario
  let periodoEscolar;

  // Determinar el periodo escolar en función del año actual
  for (let anio = anioInicio; anio <= anioFin; anio++) {
    if (anio === anioActual) {
      periodoEscolar = `${anio}-${anio + 1}`;
      break;
    }
  }

  return periodoEscolar || "Desconocido";
}



function fntPeriodoAnterior(periodo){
        document.querySelector("#periodo-escolar-anterior option").innerHTML = periodo;
        document.querySelector("#periodo-escolar-anterior option").value = periodo;
        $("#periodo-escolar-anterior").selectpicker("render");
}

function fntPeriodoActual(periodo){
  document.querySelector("#periodo-escolar-actual option").innerHTML = periodo;
  document.querySelector("#periodo-escolar-actual option").value = periodo;
  $("#periodo-escolar-actual").selectpicker("render");
}



let selectPadeceEnfermedad = document.getElementById("listPadece_enfermedad");
let enfermedadPadece = document.querySelectorAll(".oculto");



selectPadeceEnfermedad.addEventListener("change", function() {
  this.value === "Si" 
    ? enfermedadPadece.forEach(function(e){(e).style.display="block"})  
    : enfermedadPadece.forEach(function(e){(e).style.display="none"})
 
  
});



let selectlistTratamiento = document.getElementById("listTratamiento");
let tratamiento = document.querySelector(".oculto1");

selectlistTratamiento.addEventListener("change", function() {
  this.value === "Si" 
    ? tratamiento.style.display = "block" 
    : tratamiento.style.display = "none"
  
});

let selectlistMedicamento = document.getElementById("listAlergico_medicamento");
let medicamento = document.querySelector(".oculto2");

selectlistMedicamento.addEventListener("change", function() {
  this.value === "Si" 
    ? medicamento.style.display = "block" 
    : medicamento.style.display = "none"
  
});


let selectlistOtraEnfermedad = document.getElementById("checkOtra");
let otraEnfermedad = document.querySelector(".oculto3");

selectlistOtraEnfermedad.addEventListener("change", function() {
  this.checked  
    ? this.value = "1" 
    : this.value ="0"

  this.value !== "0" 
    ? otraEnfermedad.style.display = "block" 
    : otraEnfermedad.style.display = "none"
  
});


let rubeola = document.getElementById("checkRubeola");
let papera = document.getElementById("checkPapera");
let sarampeon = document.getElementById("checkSarampion");
let lechina = document.getElementById("checkLechina");
let ninguna = document.getElementById("checkNinguna");

rubeola.addEventListener("change", function(){
  this.checked  
    ? this.value = "1" 
    : this.value ="0"
});

papera.addEventListener("change", function(){
  this.checked  
    ? this.value = "1" 
    : this.value ="0"
});

sarampeon.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

lechina.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

ninguna.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});


let madreVive = document.getElementById("checkMadre");
let padreVive = document.getElementById("checkPadre");
let hermanoVive = document.getElementById("checkHermano");
let otroVive = document.getElementById("checkOtro");

madreVive.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

padreVive.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

hermanoVive.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

otroVive.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

let alumnoVive_otra = document.getElementById("checkOtro");
let viveOtraPersona = document.querySelector(".oculto4");

alumnoVive_otra.addEventListener("change", function() {
  this.value === "1" 
   ? viveOtraPersona.style.display = "block" 
   : viveOtraPersona.style.display = "none"
  
});

let viveHermanos = document.getElementById("checkHermano");
let hermanos = document.querySelectorAll(".oculto5");

viveHermanos.addEventListener("change", function() {
  
  this.value === "1" 
   ? hermanos.forEach(function(e){(e).style.display="block"})  
   : hermanos.forEach(function(e){(e).style.display="none"})
});



let listHermano_plantel = document.getElementById("listHermano_plantel");
let hermanosPlantel = document.querySelectorAll(".oculto6");

listHermano_plantel.addEventListener("change", function(){
  this.value === "Si"
    ? hermanosPlantel.forEach(function(e){(e).style.display="block"})  
    : hermanosPlantel.forEach(function(e){(e).style.display="none"})  
});


let boletin = document.getElementById("checkBoletin");
let promocion = document.getElementById("checkPromocion");
let conducta = document.getElementById("checkconducta");
let partida = document.getElementById("checkPartida");
let cedulaAlumno = document.getElementById("checkCedulaAlumno");
let cedulaRepresentante = document.getElementById("checkCedulaRepre");
let fotoAlumno = document.getElementById("checkFotosAlumno");
let fotoRepresentante = document.getElementById("checkFotosRepre");
let boletinGrado = document.getElementById("checkBoletinGrado");
let otrosDocumentos = document.getElementById("checkOtrosDocumentos");


boletin.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

promocion.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

conducta.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

partida.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});
cedulaAlumno.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

cedulaRepresentante.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

fotoAlumno.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

fotoRepresentante.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

boletinGrado.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

otrosDocumentos.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});



let documentosOtros = document.querySelector(".oculto7");

otrosDocumentos.addEventListener("change", function() {
  
  this.value === "1" 
  ? documentosOtros.style.display = "block" 
  : documentosOtros.style.display = "none"
});



///////////////////pre-escolar/////////////////


let listPre_escolar_hermanos = document.getElementById("listHermanos");
let pre_escolar_hermanos = document.querySelector(".pre-oculto");

listPre_escolar_hermanos.addEventListener("change", function() {
  this.value === "Si" 
   ? pre_escolar_hermanos.style.display = "block" 
   : pre_escolar_hermanos.style.display = "none"
  
});

let listcome_solo= document.getElementById("listLo_ayudan");
let come_solo= document.querySelector(".pre-oculto1");

listcome_solo.addEventListener("change", function() {
  this.value === "Si" 
   ? come_solo.style.display = "block" 
   : come_solo.style.display = "none"
  
});


let listParto= document.getElementById("listProblema_parto");
let parto = document.querySelector(".pre-oculto2");

listParto.addEventListener("change", function() {
  this.value === "Si" 
   ? parto.style.display = "block" 
   : parto.style.display = "none"
  
});

let listnacimiento= document.getElementById("listProblema_nacimiento");
let nacimiento = document.querySelector(".pre-oculto3");

listnacimiento.addEventListener("change", function() {
  this.value === "Si" 
   ? nacimiento.style.display = "block" 
   : nacimiento.style.display = "none"
  
});



let listAlergico= document.getElementById("listAlergico");
let alergico = document.querySelector(".pre-oculto4");

listAlergico.addEventListener("change", function() {
  this.value === "Si" 
   ? alergico.style.display = "block" 
   : alergico.style.display = "none"
  
});

let listHospitalizado= document.getElementById("listHospitalizado");
let causa_alergico = document.querySelector(".pre-oculto5");

listHospitalizado.addEventListener("change", function() {
  this.value === "Si" 
   ? causa_alergico.style.display = "block" 
   : causa_alergico.style.display = "none"
  
});


let motora = document.getElementById("checkMotora");
let crecimiento = document.getElementById("checkCrecimiento");
let auditiva = document.getElementById("checkAuditiva");
let visual = document.getElementById("checkVisual");
let otra_discapacidad = document.getElementById("checkOtra_discapacidad");

motora.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

crecimiento.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

auditiva.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

visual.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});
otra_discapacidad.addEventListener("change", function(){
  this.checked 
   ? this.value = "1" 
   : this.value ="0"
});

let discapacidad_otra= document.getElementById("checkOtra_discapacidad");
let discapacidad = document.querySelector(".pre-oculto6");

discapacidad_otra.addEventListener("change", function() {
  this.value == "1" 
   ? discapacidad.style.display = "block" 
   : discapacidad.style.display = "none"
  
});



let listEspecialistas= document.getElementById("listEspecialistas");
let especialista = document.querySelector(".pre-oculto7");

listEspecialistas.addEventListener("change", function() {
  this.value === "Si" 
   ? especialista.style.display = "block" 
   : especialista.style.display = "none"
  
});










  

