let formEstudiante = document.querySelector("#formEstudiante");
formEstudiante.onsubmit = function (e) {
  e.preventDefault();

  let intId_estudiante = document.querySelector("#formEstudiante").value;
  let strNombre = document.querySelector("#txtNombre").value;
  let strDescripcion = document.querySelector("#txtDescripcion").value;
  let intStatus = document.querySelector("#listStatus").value;
  if (strNombre == "" || strDescripcion == "" || intStatus == "") {
    swal("Atención", "Todos los campos son obligatorios.", "error");
    return false;
  }

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

function openModal() {
  document.querySelector("#idEstudiante").value = "";
  document
    .querySelector(".modal-header")
    .classList.replace("headerUpdate", "headerRegister");
  document
    .querySelector("#btnActionForm")
    .classList.replace("btn-info", "btn-primary");
  document.querySelector("#btnText").innerHTML = "Guardar";
  document.querySelector("#titleModal").innerHTML = "Nuevo Estudiante";
  document.querySelector("#periodo-escolar").innerHTML = 
  document.querySelector("#formEstudiante").reset();

  $("#modalFormEstudiante").modal("show");
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
      }
    };
  }
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
        document.querySelector("#periodo-escolar option").innerHTML = periodo;
        document.querySelector("#periodo-escolar option").value = periodo;
        $("#periodo-escolar").selectpicker("render");
}

function fntPeriodoActual(periodo){
  document.querySelector("#periodo-escolar-actual option").innerHTML = periodo;
  document.querySelector("#periodo-escolar-actual option").value = periodo;
  $("#periodo-escolar-actual").selectpicker("render");
}

