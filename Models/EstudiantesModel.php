<?php
/**
 * Clase que hace referencia a EstudiantesModel.php
 */
class EstudiantesModel extends Mysql
{

    public $intId_estudiante;
    public $strNombre_1;
	public $strNombre_2;
	public $strApellido_1;
	public $strApellido_2;
	public $intCedula_estudiante;
	public $strFecha_nac;
	public $Genero;
	public $Nacionalidad;
	public $intEstado_alumno;
	public $str_nacimiento_alumno;

	public $strHabitacion_alumno;
	public $strNombre_madre;
	public $strApellido_madre;
	public $intNacionalidad_madre;
	public $intCedula_madre;
	public $str_ocupacion_madre;
	public $int_telefono_madre;
	public $str_nombre_padre;
	public $str_apellido_padre;
	public $int_listNacionalidad_padre;

	public $int_cedula_padre;
	public $str_ocupacion_padre;
	public $int_telefono_padre;
	public $str_nombre_repre;
	public $str_apellido_repre;
	public $int_listNacionalidad_rep;
	public $int_cedula_repre;
	public $str_listParentesco;
	public $str_ocupacion_repre;
	public $int_telefono_repre;

	public $int_celular_repre;
	public $str_direccion_repre;
	public $str_colaboracion_plantel;
	public $str_plantel;
	public $int_listGrado_cursado;
	public $int_Periodo_anterior;
	public $str_literal;
	public $str_listRepitiente;
	public $int_listTipo_alumno;
	public $int_listTurno;

	public $int_selectSeccionid;
	public $int_periodo_nuevo;
	public $str_funcionario;
	public $int_fecha_inscripcion;
	public $int_listPadece_enfermedad;
	public $str_enfermedad_padece;
	public $int_listTratamiento;
	public $str_tratamiento;
	public $int_listAlergico_medicamento;
	public $str_medicamento;

	public $int_checkRubeola;
	public $int_checkSarampion;
	public $int_checkLechina;
	public $int_checkPapera;
	public $int_checkOtra;
	public $int_checkNinguna;
	public $int_otra_enfermedad;
	public $str_listPsicologo;
	public $str_nacimiento_parto;
	public $int_listSeva_solo;

	public $str_autorizada_retirarlo;
	public $int_listParentesco_retiro;
	public $int_checkMadre;
	public $int_checkPadre;
	public $int_checkHermano;
	public $int_checkOtro;
	public $str_alumnoVive_otra;
	public $int_cuantos_hermanos;
	public $int_cuantos_hermanas;
	public $str_listHermano_plantel;

	public $int_hermanos_plantel;
	public $str_grado_hermanos;
	public $str_turno_hermanos;
	public $str_listVivienda;
	public $str_listCondicion_vivienda;
	public $int_ingreso_familia;
	public $int_ingreso_numeroPersona;
	public $int_checkBoletin;
	public $int_checkPromocion;
	public $int_checkconducta;

	public $int_checkPartida;
	public $int_checkCedulaAlumno;
	public $int_checkCedulaRepre;
	public $int_checkFotosAlumno;
	public $int_checkFotosRepre;
	public $int_checkBoletinGrado;
	public $int_checkOtrosDocumentos;
	public $str_otros_documentos;
	public $int_listStatus;
	

    public function __construct()
    {
        parent::__construct();
    }



    public function insertEstudiante(
	

		$strNombre1,
		$strNombre2,
		$strApellido1,
		$strApellido2,
		$intCedula_escolar,
		$fecha_nac,
		$intGenero,
		$intNacionalidad,
		$selectEstadoid,
		$lugar_nacimiento,
		
		$direccion_habitacion,
		$nombre_madre,
		$apellido_madre,
		$listNacionalidad_madre,
		$cedula_madre,
		$ocupacion_madre,
		$telefono_madre,
		$nombre_padre,
		$apellido_padre,
		$listNacionalidad_padre,

		$cedula_padre,
		$ocupacion_padre,
		$telefono_padre,
		$nombre_repre,
		$apellido_repre,
		$listNacionalidad_rep,
		$cedula_repre,
		$listParentesco,
		$ocupacion_repre,
		$telefono_repre,

		$celular_repre,
		$direccion_repre,
		$colaboracion_plantel,
		$plantel,
		$listGrado_cursado,
		$Periodo_anterior,
		$literal,
		$listRepitiente,
		$listTipo_alumno,
		$listTurno,

		$selectSeccionid,
		$periodo_nuevo,
        $funcionario,
		$fecha_inscripcion,
		$listPadece_enfermedad,
		$enfermedad_padece,
		$listTratamiento,
		$tratamiento,
		$listAlergico_medicamento,
		$medicamento,

		$checkRubeola,
		$checkSarampion,
		$checkLechina,
		$checkPapera,
		$checkOtra,
		$checkNinguna,
		$otra_enfermedad_cual,
		$listPsicologo,
		$nacimiento_parto,
		$listSeva_solo,

		$autorizada_retirarlo,
		$listParentesco_retiro,
		$checkMadre,
		$checkPadre,
		$checkHermano,
		$checkOtro,
		$alumnoVive_otra,
		$cuantos_hermanos,
		$cuantos_hermanas,
		$listHermano_plantel,

		$hermanos_plantel,
		$grado_hermanos,
		$turno_hermanos,
		$listVivienda,
		$listCondicion_vivienda,
		$ingreso_familia,
		$ingreso_numeroPersona,
		$checkBoletin,
		$checkPromocion,
		$checkconducta,

		$checkPartida,
		$checkCedulaAlumno,
		$checkCedulaRepre,
		$checkFotosAlumno,
		$checkFotosRepre,
		$checkBoletinGrado,
		$checkOtrosDocumentos,
		$otros_documentos,
		$listStatus
	)
        {

            $return = "";
            $this->strNombre_1 = $strNombre1;
            $this->strNombre_2 = $strNombre2;
            $this->strApellido_1 = $strApellido1;
            $this->strApellido_2 = $strApellido2;
            $this->intCedula_estudiante = $intCedula_escolar;
            $this->strFecha_nac = $fecha_nac;
            $this->Genero = $intGenero;
            $this->Nacionalidad = $intNacionalidad;
            $this->intEstado_alumno = $selectEstadoid;
            $this->str_nacimiento_alumno = $lugar_nacimiento;

            $this->strHabitacion_alumno = $direccion_habitacion;
            $this->strNombre_madre = $nombre_madre;
            $this->strApellido_madre = $apellido_madre;
            $this->intNacionalidad_madre = $listNacionalidad_madre;
            $this->intCedula_madre = $cedula_madre;
            $this->str_ocupacion_madre = $ocupacion_madre;
            $this->int_telefono_madre = $telefono_madre;
            $this->str_nombre_padre = $nombre_padre;
            $this->str_apellido_padre = $apellido_padre;
            $this->int_listNacionalidad_padre = $listNacionalidad_padre;

            $this->int_cedula_padre = $cedula_padre;
            $this->str_ocupacion_padre = $ocupacion_padre;
            $this->int_telefono_padre = $telefono_padre;
            $this->str_nombre_repre = $nombre_repre;
            $this->str_apellido_repre = $apellido_repre;
            $this->int_listNacionalidad_rep = $listNacionalidad_rep;
            $this->int_cedula_repre = $cedula_repre;
            $this->str_listParentesco = $listParentesco;
            $this->str_ocupacion_repre = $ocupacion_repre;
            $this->int_telefono_repre = $telefono_repre;

            $this->int_celular_repre = $celular_repre;
            $this->str_direccion_repre = $direccion_repre;
            $this->str_colaboracion_plantel = $colaboracion_plantel;
            $this->str_plantel = $plantel;
            $this->int_listGrado_cursado = $listGrado_cursado;
            $this->int_Periodo_anterior = $Periodo_anterior;
            $this->str_literal = $literal;
            $this->str_listRepitiente = $listRepitiente;
            $this->int_listTipo_alumno = $listTipo_alumno;
            $this->int_listTurno = $listTurno;

            $this->int_selectSeccionid = $selectSeccionid;
            $this->int_periodo_nuevo = $periodo_nuevo;
            $this->str_funcionario = $funcionario;
            $this->int_fecha_inscripcion = $fecha_inscripcion;
            $this->int_listPadece_enfermedad = $listPadece_enfermedad;
            $this->str_enfermedad_padece = $enfermedad_padece;
            $this->int_listTratamiento = $listTratamiento;
            $this->str_tratamiento = $tratamiento;
            $this->int_listAlergico_medicamento = $listAlergico_medicamento;
            $this->str_medicamento = $medicamento;

            $this->int_checkRubeola = $checkRubeola;
            $this->int_checkSarampion = $checkSarampion;
            $this->int_checkLechina = $checkLechina;
            $this->int_checkPapera = $checkPapera;
            $this->int_checkOtra = $checkOtra;
            $this->int_otra_enfermedad = $otra_enfermedad_cual;
            $this->int_checkNinguna = $checkNinguna;      
            $this->str_listPsicologo = $listPsicologo;
            $this->str_nacimiento_parto = $nacimiento_parto;
            $this->int_listSeva_solo = $listSeva_solo;

            $this->str_autorizada_retirarlo = $autorizada_retirarlo;
            $this->int_listParentesco_retiro = $listParentesco_retiro;
            $this->int_checkMadre = $checkMadre;
            $this->int_checkPadre = $checkPadre;
            $this->int_checkHermano = $checkHermano;
            $this->int_checkOtro = $checkOtro;
            $this->str_alumnoVive_otra = $alumnoVive_otra;
            $this->int_cuantos_hermanos = $cuantos_hermanos;
            $this->int_cuantos_hermanas = $cuantos_hermanas;
            $this->str_listHermano_plantel = $listHermano_plantel;

            $this->int_hermanos_plantel = $hermanos_plantel;
            $this->str_grado_hermanos = $grado_hermanos;
            $this->str_turno_hermanos = $turno_hermanos;
            $this->str_listVivienda = $listVivienda;
            $this->str_listCondicion_vivienda = $listCondicion_vivienda;
            $this->int_ingreso_familia = $ingreso_familia;
            $this->int_ingreso_numeroPersona = $ingreso_numeroPersona;
            $this->int_checkBoletin = $checkBoletin;
            $this->int_checkPromocion = $checkPromocion;
            $this->int_checkconducta = $checkconducta;

            $this->int_checkPartida = $checkPartida;
            $this->int_checkCedulaAlumno = $checkCedulaAlumno;
            $this->int_checkCedulaRepre = $checkCedulaRepre;
            $this->int_checkFotosAlumno = $checkFotosAlumno;
            $this->int_checkFotosRepre = $checkFotosRepre;
            $this->int_checkBoletinGrado = $checkBoletinGrado;
            $this->int_checkOtrosDocumentos = $checkOtrosDocumentos;
            $this->str_otros_documentos = $otros_documentos;
            $this->int_listStatus = $listStatus;
           
          

            $sql = "SELECT * FROM estudiantes WHERE cedula_escolar = '{$this->intCedula_estudiante}' AND  periodo_escolar_new = '{$this->int_periodo_nuevo}' ";
            $request = $this->select_all($sql);

            if (empty($request)) {
                $query_insert = "INSERT INTO estudiantes(nombre_alumno1,
                                                nombre_alumno2,
                                                apellido_alumno1,
                                                apellido_alumno2,
                                                cedula_escolar,
                                                fecha_nac,
                                                genero,
                                                nacionalidad_alumno,
                                                estado_id,
                                                lugar_nacimiento,

                                                direccion_hab,
                                                nombre_madre,
                                                apellido_madre,
                                                nacionalidad_madre,
                                                cedula_madre,
                                                ocupacion_madre,
                                                telefono_madre,
                                                nombre_padre,
                                                apellido_padre,
                                                nacionalidad_padre,

                                                cedula_padre,
                                                ocupacion_padre,
                                                telefono_padre,
                                                nombre_repre,
                                                apellido_repre,
                                                nacionalidad_repre,
                                                cedula_repre,
                                                parentesco_repre,
                                                ocupacion_repre,
                                                telefono_repre,

                                                celular_repre,
                                                direccion_repre,
                                                colaboracion_plantel,
                                                plantel,
                                                grado_cursado,
                                                periodo_escolar,
                                                literal,
                                                repitiente,
                                                tipo_alumno,
                                                turno,

                                                seccion_id,
                                                periodo_escolar_new,
                                                funcionario,
                                                fecha_inscripcion,
                                                enfermedad_padece,
                                                enfermedad_1,
                                                tratamiento_enfermedad,
                                                tratamiento_1,
                                                alergico_medicamento,
                                                alergico_1,

                                                rubeola,
                                                sarampion,
                                                lechina,
                                                paperas,
                                                otra_enfermedad,
                                                otra_enfermedad_cual,
                                                ninguna_enfermedad,
                                                psicologo,
                                                nacimiento_parto,
                                                alumno_seva_solo,

                                                nombre_retiro,
                                                parestesco_retiro,
                                                vive_madre,
                                                vive_padre,
                                                vive_hermanos,
                                                cuantos_hermanos,
                                                cuantas_hermanas,
                                                vive_otra_persona,
                                                cual_persona_vive,
                                                hermanos_plantel,

                                                cuantos_hermanos_plantel,
                                                grado_cursanHermanos,
                                                turno_cursanHermanos,
                                                tipo_vivienda,
                                                condicion_vivienda,
                                                ingresos_familiares,
                                                dependecia_ingreso,
                                                boletin_calificacion,
                                                boletin_promocion,
                                                carta_conducta,

                                                copia_partida_nac,
                                                copia_cedula_alumno,
                                                copia_cedula_repre,
                                                foto_alumno,
                                                foto_repre,
                                                boletin_grado,
                                                otros_documentos,
                                                documentos_1,
                                                status ) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $arrData = array($this->strNombre_1 , 
                                $this->strNombre_2 , 
                                $this->strApellido_1 ,
                                $this->strApellido_2 , 
                                $this->intCedula_estudiante , 
                                $this->strFecha_nac , 
                                $this->Genero , 
                                $this->Nacionalidad ,
                                $this->intEstado_alumno , 
                                $this->str_nacimiento_alumno ,
                    
                                $this->strHabitacion_alumno , 
                                $this->strNombre_madre ,
                                $this->strApellido_madre ,
                                $this->intNacionalidad_madre ,
                                $this->intCedula_madre , 
                                $this->str_ocupacion_madre ,
                                $this->int_telefono_madre ,
                                $this->str_nombre_padre , 
                                $this->str_apellido_padre ,
                                $this->int_listNacionalidad_padre , 
                    
                                $this->int_cedula_padre , 
                                $this->str_ocupacion_padre ,
                                $this->int_telefono_padre , 
                                $this->str_nombre_repre , 
                                $this->str_apellido_repre , 
                                $this->int_listNacionalidad_rep ,
                                $this->int_cedula_repre , 
                                $this->str_listParentesco , 
                                $this->str_ocupacion_repre ,
                                $this->int_telefono_repre , 
                    
                                $this->int_celular_repre ,
                                $this->str_direccion_repre , 
                                $this->str_colaboracion_plantel , 
                                $this->str_plantel , 
                                $this->int_listGrado_cursado ,
                                $this->int_Periodo_anterior ,
                                $this->str_literal , 
                                $this->str_listRepitiente ,
                                $this->int_listTipo_alumno , 
                                $this->int_listTurno , 
                    
                                $this->int_selectSeccionid ,
                                $this->int_periodo_nuevo , 
                                $this->str_funcionario , 
                                $this->int_fecha_inscripcion ,
                                $this->int_listPadece_enfermedad ,
                                $this->str_enfermedad_padece ,
                                $this->int_listTratamiento ,
                                $this->str_tratamiento ,
                                $this->int_listAlergico_medicamento , 
                                $this->str_medicamento , 
                    
                                $this->int_checkRubeola , 
                                $this->int_checkSarampion ,
                                $this->int_checkLechina ,
                                $this->int_checkPapera , 
                                $this->int_checkOtra ,
                                $this->int_checkNinguna , 
                                $this->int_otra_enfermedad , 
                                $this->str_listPsicologo , 
                                $this->str_nacimiento_parto , 
                                $this->int_listSeva_solo , 
                    
                                $this->str_autorizada_retirarlo , 
                                $this->int_listParentesco_retiro , 
                                $this->int_checkMadre , 
                                $this->int_checkPadre ,
                                $this->int_checkHermano , 
                                $this->int_cuantos_hermanos ,
                                $this->int_cuantos_hermanas ,
                                $this->int_checkOtro , 
                                $this->str_alumnoVive_otra ,
                            
                                $this->str_listHermano_plantel ,
                    
                                $this->int_hermanos_plantel ,
                                $this->str_grado_hermanos ,
                                $this->str_turno_hermanos ,
                                $this->str_listVivienda ,
                                $this->str_listCondicion_vivienda ,
                                $this->int_ingreso_familia ,
                                $this->int_ingreso_numeroPersona ,
                                $this->int_checkBoletin ,
                                $this->int_checkPromocion,
                                $this->int_checkconducta ,
                    
                                $this->int_checkPartida ,
                                $this->int_checkCedulaAlumno,
                                $this->int_checkCedulaRepre ,
                                $this->int_checkFotosAlumno,
                                $this->int_checkFotosRepre ,
                                $this->int_checkBoletinGrado ,
                                $this->int_checkOtrosDocumentos ,
                                $this->str_otros_documentos ,
                                $this->int_listStatus );
                $request_insert = $this->insert($query_insert, $arrData);
                $return = $request_insert;
            } else {
                $return = false;
            }
            return $return;


        }


        public function updateEstudiante(
            $id_estudiante,
            $strNombre1,
            $strNombre2,
            $strApellido1,
            $strApellido2,
            $intCedula_escolar,
            $fecha_nac,
            $intGenero,
            $intNacionalidad,
            $selectEstadoid,
            $lugar_nacimiento,
            
            $direccion_habitacion,
            $nombre_madre,
            $apellido_madre,
            $listNacionalidad_madre,
            $cedula_madre,
            $ocupacion_madre,
            $telefono_madre,
            $nombre_padre,
            $apellido_padre,
            $listNacionalidad_padre,
    
            $cedula_padre,
            $ocupacion_padre,
            $telefono_padre,
            $nombre_repre,
            $apellido_repre,
            $listNacionalidad_rep,
            $cedula_repre,
            $listParentesco,
            $ocupacion_repre,
            $telefono_repre,
    
            $celular_repre,
            $direccion_repre,
            $colaboracion_plantel,
            $plantel,
            $listGrado_cursado,
            $Periodo_anterior,
            $literal,
            $listRepitiente,
            $listTipo_alumno,
            $listTurno,
    
            $selectSeccionid,
            $periodo_nuevo,
            $funcionario,
            $fecha_inscripcion,
            $listPadece_enfermedad,
            $enfermedad_padece,
            $listTratamiento,
            $tratamiento,
            $listAlergico_medicamento,
            $medicamento,
    
            $checkRubeola,
            $checkSarampion,
            $checkLechina,
            $checkPapera,
            $checkOtra,
            $checkNinguna,
            $otra_enfermedad_cual,
            $listPsicologo,
            $nacimiento_parto,
            $listSeva_solo,
    
            $autorizada_retirarlo,
            $listParentesco_retiro,
            $checkMadre,
            $checkPadre,
            $checkHermano,
            $checkOtro,
            $alumnoVive_otra,
            $cuantos_hermanos,
            $cuantos_hermanas,
            $listHermano_plantel,
    
            $hermanos_plantel,
            $grado_hermanos,
            $turno_hermanos,
            $listVivienda,
            $listCondicion_vivienda,
            $ingreso_familia,
            $ingreso_numeroPersona,
            $checkBoletin,
            $checkPromocion,
            $checkconducta,
    
            $checkPartida,
            $checkCedulaAlumno,
            $checkCedulaRepre,
            $checkFotosAlumno,
            $checkFotosRepre,
            $checkBoletinGrado,
            $checkOtrosDocumentos,
            $otros_documentos,
            $listStatus
        )
	{
        $this->intId_estudiante = $id_estudiante;
        $this->strNombre_1 = $strNombre1;
        $this->strNombre_2 = $strNombre2;
        $this->strApellido_1 = $strApellido1;
        $this->strApellido_2 = $strApellido2;
        $this->intCedula_estudiante = $intCedula_escolar;
        $this->strFecha_nac = $fecha_nac;
        $this->Genero = $intGenero;
        $this->Nacionalidad = $intNacionalidad;
        $this->intEstado_alumno = $selectEstadoid;
        $this->str_nacimiento_alumno = $lugar_nacimiento;

        $this->strHabitacion_alumno = $direccion_habitacion;
        $this->strNombre_madre = $nombre_madre;
        $this->strApellido_madre = $apellido_madre;
        $this->intNacionalidad_madre = $listNacionalidad_madre;
        $this->intCedula_madre = $cedula_madre;
        $this->str_ocupacion_madre = $ocupacion_madre;
        $this->int_telefono_madre = $telefono_madre;
        $this->str_nombre_padre = $nombre_padre;
        $this->str_apellido_padre = $apellido_padre;
        $this->int_listNacionalidad_padre = $listNacionalidad_padre;

        $this->int_cedula_padre = $cedula_padre;
        $this->str_ocupacion_padre = $ocupacion_padre;
        $this->int_telefono_padre = $telefono_padre;
        $this->str_nombre_repre = $nombre_repre;
        $this->str_apellido_repre = $apellido_repre;
        $this->int_listNacionalidad_rep = $listNacionalidad_rep;
        $this->int_cedula_repre = $cedula_repre;
        $this->str_listParentesco = $listParentesco;
        $this->str_ocupacion_repre = $ocupacion_repre;
        $this->int_telefono_repre = $telefono_repre;

        $this->int_celular_repre = $celular_repre;
        $this->str_direccion_repre = $direccion_repre;
        $this->str_colaboracion_plantel = $colaboracion_plantel;
        $this->str_plantel = $plantel;
        $this->int_listGrado_cursado = $listGrado_cursado;
        $this->int_Periodo_anterior = $Periodo_anterior;
        $this->str_literal = $literal;
        $this->str_listRepitiente = $listRepitiente;
        $this->int_listTipo_alumno = $listTipo_alumno;
        $this->int_listTurno = $listTurno;

        $this->int_selectSeccionid = $selectSeccionid;
        $this->int_periodo_nuevo = $periodo_nuevo;
        $this->str_funcionario = $funcionario;
        $this->int_fecha_inscripcion = $fecha_inscripcion;
        $this->int_listPadece_enfermedad = $listPadece_enfermedad;
        $this->str_enfermedad_padece = $enfermedad_padece;
        $this->int_listTratamiento = $listTratamiento;
        $this->str_tratamiento = $tratamiento;
        $this->int_listAlergico_medicamento = $listAlergico_medicamento;
        $this->str_medicamento = $medicamento;

        $this->int_checkRubeola = $checkRubeola;
        $this->int_checkSarampion = $checkSarampion;
        $this->int_checkLechina = $checkLechina;
        $this->int_checkPapera = $checkPapera;
        $this->int_checkOtra = $checkOtra;
        $this->int_otra_enfermedad = $otra_enfermedad_cual;
        $this->int_checkNinguna = $checkNinguna;      
        $this->str_listPsicologo = $listPsicologo;
        $this->str_nacimiento_parto = $nacimiento_parto;
        $this->int_listSeva_solo = $listSeva_solo;

        $this->str_autorizada_retirarlo = $autorizada_retirarlo;
        $this->int_listParentesco_retiro = $listParentesco_retiro;
        $this->int_checkMadre = $checkMadre;
        $this->int_checkPadre = $checkPadre;
        $this->int_checkHermano = $checkHermano;
        $this->int_checkOtro = $checkOtro;
        $this->str_alumnoVive_otra = $alumnoVive_otra;
        $this->int_cuantos_hermanos = $cuantos_hermanos;
        $this->int_cuantos_hermanas = $cuantos_hermanas;
        $this->str_listHermano_plantel = $listHermano_plantel;

        $this->int_hermanos_plantel = $hermanos_plantel;
        $this->str_grado_hermanos = $grado_hermanos;
        $this->str_turno_hermanos = $turno_hermanos;
        $this->str_listVivienda = $listVivienda;
        $this->str_listCondicion_vivienda = $listCondicion_vivienda;
        $this->int_ingreso_familia = $ingreso_familia;
        $this->int_ingreso_numeroPersona = $ingreso_numeroPersona;
        $this->int_checkBoletin = $checkBoletin;
        $this->int_checkPromocion = $checkPromocion;
        $this->int_checkconducta = $checkconducta;

        $this->int_checkPartida = $checkPartida;
        $this->int_checkCedulaAlumno = $checkCedulaAlumno;
        $this->int_checkCedulaRepre = $checkCedulaRepre;
        $this->int_checkFotosAlumno = $checkFotosAlumno;
        $this->int_checkFotosRepre = $checkFotosRepre;
        $this->int_checkBoletinGrado = $checkBoletinGrado;
        $this->int_checkOtrosDocumentos = $checkOtrosDocumentos;
        $this->str_otros_documentos = $otros_documentos;
        $this->int_listStatus = $listStatus;
       

        $sql = "SELECT * FROM estudiantes WHERE cedula_escolar = '{$this->intCedula_estudiante}' AND  nombre_alumno1 = '{$this->strNombre_1}' AND id_estudiante != $this->intId_estudiante";
		$request = $this->select_all($sql);

		if (empty($request)) {
                                                $sql = "UPDATE estudiantes SET 
                                                nombre_alumno1 = ?,
                                                nombre_alumno2 = ?,
                                                apellido_alumno1 = ?,
                                                apellido_alumno2 = ?,
                                                cedula_escolar = ?,
                                                fecha_nac = ?,
                                                genero = ?,
                                                nacionalidad_alumno = ?,
                                                estado_id = ?,
                                                lugar_nacimiento = ?,

                                                direccion_hab = ?,
                                                nombre_madre = ?,
                                                apellido_madre = ?,
                                                nacionalidad_madre = ?,
                                                cedula_madre = ?,
                                                ocupacion_madre = ?,
                                                telefono_madre = ?,
                                                nombre_padre = ?,
                                                apellido_padre = ?,
                                                nacionalidad_padre = ?,

                                                cedula_padre = ?,
                                                ocupacion_padre = ?,
                                                telefono_padre = ?,
                                                nombre_repre = ?,
                                                apellido_repre = ?,
                                                nacionalidad_repre = ?,
                                                cedula_repre = ?,
                                                parentesco_repre = ?,
                                                ocupacion_repre = ?,
                                                telefono_repre = ?,

                                                celular_repre = ?,
                                                direccion_repre = ?,
                                                colaboracion_plantel = ?,
                                                plantel = ?,
                                                grado_cursado = ?,
                                                periodo_escolar = ?,
                                                literal = ?,
                                                repitiente = ?,
                                                tipo_alumno = ?,
                                                turno = ?,

                                                seccion_id = ?,
                                                periodo_escolar_new = ?,
                                                funcionario = ?,
                                                fecha_inscripcion = ?,
                                                enfermedad_padece = ?,
                                                enfermedad_1 = ?,
                                                tratamiento_enfermedad = ?,
                                                tratamiento_1 = ?,
                                                alergico_medicamento = ?,
                                                alergico_1 = ?,

                                                rubeola = ?,
                                                sarampion = ?,
                                                lechina = ?,
                                                paperas = ?,
                                                otra_enfermedad = ?,
                                                otra_enfermedad_cual = ?,
                                                ninguna_enfermedad = ?,
                                                psicologo = ?,
                                                nacimiento_parto = ?,
                                                alumno_seva_solo = ?,

                                                nombre_retiro = ?,
                                                parestesco_retiro = ?,
                                                vive_madre = ?,
                                                vive_padre = ?,
                                                vive_hermanos = ?,
                                                cuantos_hermanos = ?,
                                                cuantas_hermanas = ?,
                                                vive_otra_persona = ?,
                                                cual_persona_vive = ?,
                                                hermanos_plantel = ?,

                                                cuantos_hermanos_plantel = ?,
                                                grado_cursanHermanos = ?,
                                                turno_cursanHermanos = ?,
                                                tipo_vivienda = ?,
                                                condicion_vivienda = ?,
                                                ingresos_familiares = ?,
                                                dependecia_ingreso = ?,
                                                boletin_calificacion = ?,
                                                boletin_promocion = ?,
                                                carta_conducta = ?,

                                                copia_partida_nac = ?,
                                                copia_cedula_alumno = ?,
                                                copia_cedula_repre = ?,
                                                foto_alumno = ?,
                                                foto_repre = ?,
                                                boletin_grado = ?,
                                                otros_documentos = ?,
                                                documentos_1 = ?,
                                                status = ? 
            
                                        WHERE id_estudiante = $this->intId_estudiante ";
                                    $arrData = array($this->strNombre_1 , 
                                                    $this->strNombre_2 , 
                                                    $this->strApellido_1 ,
                                                    $this->strApellido_2 , 
                                                    $this->intCedula_estudiante , 
                                                    $this->strFecha_nac , 
                                                    $this->Genero , 
                                                    $this->Nacionalidad ,
                                                    $this->intEstado_alumno , 
                                                    $this->str_nacimiento_alumno ,

                                                    $this->strHabitacion_alumno , 
                                                    $this->strNombre_madre ,
                                                    $this->strApellido_madre ,
                                                    $this->intNacionalidad_madre ,
                                                    $this->intCedula_madre , 
                                                    $this->str_ocupacion_madre ,
                                                    $this->int_telefono_madre ,
                                                    $this->str_nombre_padre , 
                                                    $this->str_apellido_padre ,
                                                    $this->int_listNacionalidad_padre , 

                                                    $this->int_cedula_padre , 
                                                    $this->str_ocupacion_padre ,
                                                    $this->int_telefono_padre , 
                                                    $this->str_nombre_repre , 
                                                    $this->str_apellido_repre , 
                                                    $this->int_listNacionalidad_rep ,
                                                    $this->int_cedula_repre , 
                                                    $this->str_listParentesco , 
                                                    $this->str_ocupacion_repre ,
                                                    $this->int_telefono_repre , 

                                                    $this->int_celular_repre ,
                                                    $this->str_direccion_repre , 
                                                    $this->str_colaboracion_plantel , 
                                                    $this->str_plantel , 
                                                    $this->int_listGrado_cursado ,
                                                    $this->int_Periodo_anterior ,
                                                    $this->str_literal , 
                                                    $this->str_listRepitiente ,
                                                    $this->int_listTipo_alumno , 
                                                    $this->int_listTurno , 

                                                    $this->int_selectSeccionid ,
                                                    $this->int_periodo_nuevo , 
                                                    $this->str_funcionario , 
                                                    $this->int_fecha_inscripcion ,
                                                    $this->int_listPadece_enfermedad ,
                                                    $this->str_enfermedad_padece ,
                                                    $this->int_listTratamiento ,
                                                    $this->str_tratamiento ,
                                                    $this->int_listAlergico_medicamento , 
                                                    $this->str_medicamento , 

                                                    $this->int_checkRubeola , 
                                                    $this->int_checkSarampion ,
                                                    $this->int_checkLechina ,
                                                    $this->int_checkPapera , 
                                                    $this->int_checkOtra ,
                                                    $this->int_checkNinguna , 
                                                    $this->int_otra_enfermedad , 
                                                    $this->str_listPsicologo , 
                                                    $this->str_nacimiento_parto , 
                                                    $this->int_listSeva_solo , 

                                                    $this->str_autorizada_retirarlo , 
                                                    $this->int_listParentesco_retiro , 
                                                    $this->int_checkMadre , 
                                                    $this->int_checkPadre ,
                                                    $this->int_checkHermano , 
                                                    $this->int_cuantos_hermanos ,
                                                    $this->int_cuantos_hermanas ,
                                                    $this->int_checkOtro , 
                                                    $this->str_alumnoVive_otra ,
                                                
                                                    $this->str_listHermano_plantel ,

                                                    $this->int_hermanos_plantel ,
                                                    $this->str_grado_hermanos ,
                                                    $this->str_turno_hermanos ,
                                                    $this->str_listVivienda ,
                                                    $this->str_listCondicion_vivienda ,
                                                    $this->int_ingreso_familia ,
                                                    $this->int_ingreso_numeroPersona ,
                                                    $this->int_checkBoletin ,
                                                    $this->int_checkPromocion,
                                                    $this->int_checkconducta ,

                                                    $this->int_checkPartida ,
                                                    $this->int_checkCedulaAlumno,
                                                    $this->int_checkCedulaRepre ,
                                                    $this->int_checkFotosAlumno,
                                                    $this->int_checkFotosRepre ,
                                                    $this->int_checkBoletinGrado ,
                                                    $this->int_checkOtrosDocumentos ,
                                                    $this->str_otros_documentos ,
                                                    $this->int_listStatus );
                                        $request = $this->update($sql, $arrData);
                                    } else {
                                        $request = false;
                                    }
                                    return $request;
	}








    public function selectEstudiantes()
	{
        

		$sql = "SELECT  `estudiantes`.`id_estudiante`,
                        `estudiantes`.`nombre_alumno1`,
                        `estudiantes`.`nombre_alumno2`,
                        `estudiantes`.`apellido_alumno1`,
                        `estudiantes`.`apellido_alumno2`,
                        `estudiantes`.`cedula_escolar`,
                        DATE_FORMAT(`estudiantes`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
                        `estudiantes`.`genero`,
                        `estudiantes`.`nacionalidad_alumno`,
                        `estado`.`desc_estado`,
                        `estudiantes`.`lugar_nacimiento`,
                        `estudiantes`.`direccion_hab`,
                        `estudiantes`.`nombre_madre`,
                        `estudiantes`.`apellido_madre`,
                        `estudiantes`.`nacionalidad_madre`,
                        `estudiantes`.`cedula_madre`,
                        `estudiantes`.`ocupacion_madre`,
                        `estudiantes`.`telefono_madre`,
                        `estudiantes`.`nombre_padre`,
                        `estudiantes`.`apellido_padre`,
                        `estudiantes`.`nacionalidad_padre`,
                        `estudiantes`.`cedula_padre`,
                        `estudiantes`.`ocupacion_padre`,
                        `estudiantes`.`telefono_padre`,
                        `estudiantes`.`nombre_repre`,
                        `estudiantes`.`apellido_repre`,
                        `estudiantes`.`nacionalidad_repre`,
                        `estudiantes`.`cedula_repre`,
                        `estudiantes`.`parentesco_repre`,
                        `estudiantes`.`ocupacion_repre`,
                        `estudiantes`.`telefono_repre`,
                        `estudiantes`.`celular_repre`,
                        `estudiantes`.`direccion_repre`,
                        `estudiantes`.`colaboracion_plantel`,
                        `estudiantes`.`plantel`,
                        `estudiantes`.`grado_cursado`,
                        `estudiantes`.`periodo_escolar`,
                        `estudiantes`.`literal`,
                        `estudiantes`.`repitiente`,
                        `estudiantes`.`tipo_alumno`,
                        `estudiantes`.`turno`,
                        `desc_seccion`.`nombre_seccion`,
                        `estudiantes`.`periodo_escolar_new`,
                        `estudiantes`.`funcionario`,
                        DATE_FORMAT(`estudiantes`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
                        `estudiantes`.`enfermedad_padece`,
                        `estudiantes`.`enfermedad_1`,
                        `estudiantes`.`tratamiento_enfermedad`,
                        `estudiantes`.`tratamiento_1`,
                        `estudiantes`.`alergico_medicamento`,
                        `estudiantes`.`alergico_1`,
                        `estudiantes`.`rubeola`,
                        `estudiantes`.`sarampion`,
                        `estudiantes`.`lechina`,
                        `estudiantes`.`paperas`,
                        `estudiantes`.`otra_enfermedad`,
                        `estudiantes`.`otra_enfermedad_cual`,
                        `estudiantes`.`ninguna_enfermedad`,
                        `estudiantes`.`psicologo`,
                        `estudiantes`.`nacimiento_parto`,
                        `estudiantes`.`alumno_seva_solo`,
                        `estudiantes`.`nombre_retiro`,
                        `estudiantes`.`parestesco_retiro`,
                        `estudiantes`.`vive_madre`,
                        `estudiantes`.`vive_padre`,
                        `estudiantes`.`vive_hermanos`,
                        `estudiantes`.`cuantos_hermanos`,
                        `estudiantes`.`cuantas_hermanas`,
                        `estudiantes`.`vive_otra_persona`,
                        `estudiantes`.`cual_persona_vive`,
                        `estudiantes`.`hermanos_plantel`,
                        `estudiantes`.`cuantos_hermanos_plantel`,
                        `estudiantes`.`grado_cursanHermanos`,
                        `estudiantes`.`turno_cursanHermanos`,
                        `estudiantes`.`tipo_vivienda`,
                        `estudiantes`.`condicion_vivienda`,
                        `estudiantes`.`ingresos_familiares`,
                        `estudiantes`.`dependecia_ingreso`,
                        `estudiantes`.`boletin_calificacion`,
                        `estudiantes`.`boletin_promocion`,
                        `estudiantes`.`carta_conducta`,
                        `estudiantes`.`copia_partida_nac`,
                        `estudiantes`.`copia_cedula_alumno`,
                        `estudiantes`.`copia_cedula_repre`,
                        `estudiantes`.`foto_alumno`,
                        `estudiantes`.`foto_repre`,
                        `estudiantes`.`boletin_grado`,
                        `estudiantes`.`otros_documentos`,
                        `estudiantes`.`documentos_1`,
                        `estudiantes`.`status` 
                FROM `estudiantes`  
                LEFT JOIN `seccion` 
                ON `estudiantes`.`seccion_id` = `seccion`.`id_seccion`
                LEFT JOIN `desc_seccion` 
                ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
                LEFT JOIN `estado`
                ON `estudiantes`.`estado_id` = `estado`.`id_estado`
                WHERE `estudiantes`.`status` != 0";
		$request = $this->select_all($sql);
		return $request;
	}

    public function selectEstudiante(int $id_estudiante)
	{
		//BUSCAR Estudiante
		$this->intId_estudiante = $id_estudiante;
                $sql = "SELECT  `estudiantes`.`id_estudiante`,
                `estudiantes`.`nombre_alumno1`,
                `estudiantes`.`nombre_alumno2`,
                `estudiantes`.`apellido_alumno1`,
                `estudiantes`.`apellido_alumno2`,
                `estudiantes`.`cedula_escolar`,
                DATE_FORMAT(`estudiantes`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
                `estudiantes`.`genero`,
                `estudiantes`.`nacionalidad_alumno`,
                `estado`.`desc_estado`,
                `estudiantes`.`lugar_nacimiento`,
                `estudiantes`.`direccion_hab`,
                `estudiantes`.`nombre_madre`,
                `estudiantes`.`apellido_madre`,
                `estudiantes`.`nacionalidad_madre`,
                `estudiantes`.`cedula_madre`,
                `estudiantes`.`ocupacion_madre`,
                `estudiantes`.`telefono_madre`,
                `estudiantes`.`nombre_padre`,
                `estudiantes`.`apellido_padre`,
                `estudiantes`.`nacionalidad_padre`,
                `estudiantes`.`cedula_padre`,
                `estudiantes`.`ocupacion_padre`,
                `estudiantes`.`telefono_padre`,
                `estudiantes`.`nombre_repre`,
                `estudiantes`.`apellido_repre`,
                `estudiantes`.`nacionalidad_repre`,
                `estudiantes`.`cedula_repre`,
                `estudiantes`.`parentesco_repre`,
                `estudiantes`.`ocupacion_repre`,
                `estudiantes`.`telefono_repre`,
                `estudiantes`.`celular_repre`,
                `estudiantes`.`direccion_repre`,
                `estudiantes`.`colaboracion_plantel`,
                `estudiantes`.`plantel`,
                `estudiantes`.`grado_cursado`,
                `estudiantes`.`periodo_escolar`,
                `estudiantes`.`literal`,
                `estudiantes`.`repitiente`,
                `estudiantes`.`tipo_alumno`,
                `estudiantes`.`turno`,
                `desc_seccion`.`nombre_seccion`,
                `estudiantes`.`periodo_escolar_new`,
                `estudiantes`.`funcionario`,
                DATE_FORMAT(`estudiantes`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
                `estudiantes`.`enfermedad_padece`,
                `estudiantes`.`enfermedad_1`,
                `estudiantes`.`tratamiento_enfermedad`,
                `estudiantes`.`tratamiento_1`,
                `estudiantes`.`alergico_medicamento`,
                `estudiantes`.`alergico_1`,
                `estudiantes`.`rubeola`,
                `estudiantes`.`sarampion`,
                `estudiantes`.`lechina`,
                `estudiantes`.`paperas`,
                `estudiantes`.`otra_enfermedad`,
                `estudiantes`.`otra_enfermedad_cual`,
                `estudiantes`.`ninguna_enfermedad`,
                `estudiantes`.`psicologo`,
                `estudiantes`.`nacimiento_parto`,
                `estudiantes`.`alumno_seva_solo`,
                `estudiantes`.`nombre_retiro`,
                `estudiantes`.`parestesco_retiro`,
                `estudiantes`.`vive_madre`,
                `estudiantes`.`vive_padre`,
                `estudiantes`.`vive_hermanos`,
                `estudiantes`.`cuantos_hermanos`,
                `estudiantes`.`cuantas_hermanas`,
                `estudiantes`.`vive_otra_persona`,
                `estudiantes`.`cual_persona_vive`,
                `estudiantes`.`hermanos_plantel`,
                `estudiantes`.`cuantos_hermanos_plantel`,
                `estudiantes`.`grado_cursanHermanos`,
                `estudiantes`.`turno_cursanHermanos`,
                `estudiantes`.`tipo_vivienda`,
                `estudiantes`.`condicion_vivienda`,
                `estudiantes`.`ingresos_familiares`,
                `estudiantes`.`dependecia_ingreso`,
                `estudiantes`.`boletin_calificacion`,
                `estudiantes`.`boletin_promocion`,
                `estudiantes`.`carta_conducta`,
                `estudiantes`.`copia_partida_nac`,
                `estudiantes`.`copia_cedula_alumno`,
                `estudiantes`.`copia_cedula_repre`,
                `estudiantes`.`foto_alumno`,
                `estudiantes`.`foto_repre`,
                `estudiantes`.`boletin_grado`,
                `estudiantes`.`otros_documentos`,
                `estudiantes`.`documentos_1`,
                `estudiantes`.`status` 
        FROM `estudiantes`  
        LEFT JOIN `seccion` 
        ON `estudiantes`.`seccion_id` = `seccion`.`id_seccion`
        LEFT JOIN `desc_seccion` 
        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
        LEFT JOIN `estado`
        ON `estudiantes`.`estado_id` = `estado`.`id_estado` WHERE id_estudiante = $this->intId_estudiante AND `estudiantes`.`status`!= 0 ";
		$request = $this->select($sql);
		return $request;
	}


    public function selectEstudiante_1(int $id_estudiante)
	{
		//BUSCAR Estudiante
		$this->intId_estudiante = $id_estudiante;
		$sql = "SELECT * FROM estudiantes WHERE id_estudiante = {$this->intId_estudiante} AND `estudiantes`.`status`!= 0 ";
		$request = $this->select($sql);
		return $request; 
		
	}

    
    public function selectEstados()
		{
			$sql ="SELECT * FROM estado ORDER BY `estado`.`desc_estado` ASC";
			$request = $this->select_all($sql);
			return $request;
		}


        public function selectSecciones(int $turno)
        {
            
            $this->intTurno = $turno;
            $this->strPeriodo = obtenerPeriodoEscolarActual();
          
            $sql ="SELECT `seccion`.`id_seccion`,`seccion`.`docente_id`,`seccion`.`desc_seccion_id`,`desc_seccion`.`nombre_seccion`,`seccion`.`periodo_escolar`,`desc_seccion`.`turno_id`
            FROM `seccion`
            JOIN `desc_seccion` 
            ON   `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
            AND  `desc_seccion`.`id_desc_seccion` < 17
            AND  `desc_seccion`.`turno_id` = $this->intTurno
            WHERE`seccion`.`periodo_escolar` = '$this->strPeriodo'
            AND  `seccion`.`status` = 1  OR `seccion`.`periodo_escolar` = 1
            ORDER BY `seccion`.`desc_seccion_id` DESC";
			$request = $this->select_all($sql);
			return $request;

        }

        public function selectNombreDocente(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, CONCAT(`docentes`.`nombre_docente`,' ', `docentes`.`apellido_docente`)
                    AS 'nombre_completo' 
                    FROM `seccion`
                    JOIN `docentes`
                    ON docentes.id_docentes = seccion.docente_id
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion}";
			$request = $this->select_all($sql);
			return $request;
		}

       
               

        public function selectPeriodo(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, `seccion`.`periodo_escolar`
                    FROM `seccion`
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion}";
			$request = $this->select_all($sql);
			return $request;
		}

        // public function deleteEstudiante(int $id_estudiante)
        // {
        //     $this->intId_estudiante = $id_estudiante;
        //     $sql = "SELECT * FROM `estudiantes` WHERE `estudiantes`.`estudiante_id` = {$this->intId_estudiante} ";
        //     $request = $this->select_all($sql);
    
        //     if (empty($request)) {
        //         $sql = "UPDATE estudiantes SET status = ? WHERE id_estudiante = $this->intId_estudiante ";
        //         $arrData = array(0);
        //         $request = $this->update($sql, $arrData);
        //         if ($request) {
        //             $request = 'ok';
        //         } else {
        //             $request = 'error';
        //         }
        //     } else {
        //         $request = 'exist';
        //     }
        //     return $request;
        // }

}
?>