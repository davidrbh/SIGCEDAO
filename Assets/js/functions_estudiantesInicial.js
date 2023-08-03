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


function openModal(){
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
    fntPeriodoActual(obtenerPeriodoEscolarActual());
  },
  false
);

  function fntEstado() {

    if (document.querySelector("#selectEstadoid2")) {
      let ajaxUrl = base_url + "/Estudiantes_inicial/getSelectEstados";
      let request = window.XMLHttpRequest
        ? new XMLHttpRequest()
        : new ActiveXObject("Microsoft.XMLHTTP");
      request.open("GET", ajaxUrl, true);
      request.send();
  
      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
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

  function fntPeriodoActual(periodo) {
    document.querySelector("#periodo-escolar-actual option").innerHTML = periodo;
    document.querySelector("#periodo-escolar-actual option").value = periodo;
    $("#periodo-escolar-actual").selectpicker("render");
  }


  ///////////////////pre-escolar/////////////////


let listPre_escolar_hermanos = document.getElementById("listHermanosPre");
let pre_escolar_hermanos = document.querySelector(".pre-oculto");

listPre_escolar_hermanos.addEventListener("change", function() {
  this.value === "1" 
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



let listAlergico= document.getElementById("listAlergicoPre");
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

$(document).ready(function () {

  $("#listTurnoPre").change(function () {
    let parametros = "id=" + $("#listTurnoPre").val();

    $.ajax({
      data: parametros,
      url: base_url + "/Estudiantes_inicial/getSelectSecciones_inicial",
      type: "post",
      beforeSend: function () {
        
      },
      success: function (data) {
      
       $("#selectSeccionid").html(data).selectpicker('refresh');
       
        
          
      },
    });
  });

  $("#selectSeccionid").change (function () {
    let parametros2 = "id="+$("#selectSeccionid").val();


         $.ajax({
             data: parametros2,
             url: base_url+'/Estudiantes_inicial/getNombreDocente_inicial',
             type: 'post',
             beforeSend: function () {
           
             },
             success: function (data) {
              $("#nombreDocente").html(data);
             }
         });

         })  


});
