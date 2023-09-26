<?php
/**
 * Clase que hace referencia a EstudiantesInicialModel.php
 */
class Estudiantes_inicialModel extends Mysql
{
    public $turno;
    public $seccion;
    public $periodo;
    public $id_estudiante;
    public $intId_estudiante;
    public $strNombre1 ;
    public $strNombre2 ;
       public $strApellido1 ;
       public $strApellido2 ;
       public $intCedula_escolar ;
       public $int_fecha_nac ;
       public $intGenero ;
       public $intNacionalidad;
       public $int_selectEstadoid ;
       public $str_lugar_nacimiento;
       public $int_listTalla_camisa ;
      public $int_listTalla_pantalon;
       public $int_listTalla_zapato;
       public $int_peso ;
       public $int_estatura ;
       public $str_listHermanosPre ;
      public $int_cuantos_hermanos ;
      public $str_listTipo_alumno_pre ;
       public $int_listTurnoPre ;
       public $int_selectSeccionid ;
       public $str_periodo_actual ;
      public $str_funcionario;
      public $str_fecha_inscripcion ;
      public $str_nombre_madrePre ;
      public $str_apellido_madrePre ;
      public $int_listNacionalidad_madrePre_ ;
      public $int_cedula_madrePre ;
      public $str_listEstado_civil_madre ;
       public $str_lugar_nacimientoMadrePre ;
      public $int_listNacionalidad_madrePre ;
      public $int_selectEstadoid3 ;
      public $str_fecha_nac_madrePre ;
      public $str_direccion_habitacion_madrePre ;
      public $int_telefono_madrePre ;
      public $int_direccion_trabajo_madrePre ;
      public $int_telefono_madre_trabajo ;
      public $int_listNivel_academico_madre ;
      public $str_otrosDatos_madre;
      public $str_nombre_padrePre ;
      public $str_apellido_padrePre ;
      public $int_listNacionalidad_padrePre ;
      public $int_cedula_padrePre ;
      public $str_listEstado_civil_padre ;
      public $str_lugar_nacimientoPadrePre ;
      public $int_listNacionalidad_padrePre_ ;
      public $int_selectEstadoid4 ;
      public $str_fecha_nac_padrePre ;
      public $str_direccion_habitacion_PadrePre ;
      public $int_telefono_padrePre ;  
      public $str_direccion_trabajo_padre ;
      public $int_telefono_padre_trabajo ;
      public $str_listNivel_academico_padre ;
      public $str_otrosDatos_padre ;
      public $str_listCome_solo ;
      public $str_listLo_ayudan ;
      public $str_quien_loayuda ;
      public $str_comida_prefiere ;
      public $str_comida_rechaza ;
      public $str_alimentos_prohibidos ;
      public $str_listEsfinteres ;
      public $str_listAsea_solo ;
      public $int_horas_dormidas ;
      public $int_tiempo_dedica_madre ;
      public $int_tiempo_dedica_padre ;
      public $int_tiempo_dedica_abuelo ;
      public $str_persona_retirarlo ;
      public $str_listNacionalidad_retiro ;
      public $int_cedula_retiro ;
      public $int_telefono_retiro ;  
      public $str_listParentescoPre ;				
      public $str_embarazo_pre_escolar ;
      public $str_problema_embarazo ;
      public $str_oficio_embarazo ;
      public $str_parto_prescolar ;
      public $int_edad_embarazo ;
      public $int_listProblema_parto ;
      public $str_cual_problema_parto ;
      public $int_peso_alnacer ;
      public $int_talla_alnacer ;  
      public $str_listProblema_nacimiento ;
      public $str_cual_problema_nacer ;
      public $int_comenzo_hablar ;
      public $int_comenzo_caminar ;
      public $int_dejo_panales ;
      public $int_peso_nino ;
      public $int_talla_nino ;
      public $str_grupo_sanguineo ;
      public $str_listAlergicoPre ;
      public $str_Especifique_alergico ;
      public $str_enfermeda_padecida_nino ;
      public $str_listHospitalizado ;
      public $str_alergico_causa ;
      public $str_medicamento_fiebre ;
      public $int_checkMotora ;
      public $int_checkCrecimiento ;
      public $int_checkAuditiva ;
      public $int_checkVisual ;
      public $int_checkOtra_discapacidad ;
      public $str_discapacidad_otra;
      public $str_listEspecialistas ;
      public $str_especialista_cual ;
      public $str_listProblema_lenguaje ;
      public $str_listMano_frecuentemente ;
      public $int_tiempo_acuesta ;
      public $int_tiempo_selevanta ;
      public $int_listsueno_nino ;
      public $str_duerme_nino ;
      public $str_informacion_sumisnitrar ;
      public $int_listStatus2;


    public function __construct()
    {
        parent::__construct();
    }



    public function insertEstudiante_inicial(
	
                            $strNombre1 ,
							$strNombre2 ,
							$strApellido1 ,
							$strApellido2 ,
							$intCedula_escolar ,
							$fecha_nac ,
							$intGenero ,
							$intNacionalidad,
							$selectEstadoid ,
							$lugar_nacimiento ,
							$listTalla_camisa ,
							$listTalla_pantalon,
							$listTalla_zapato,
							$peso ,
							$estatura ,
							$listHermanosPre ,
							$cuantos_hermanos ,
							$listTipo_alumno_pre ,
							$listTurnoPre ,
							$selectSeccionid ,
                            $periodo_actual ,
							$funcionario,		
							$fecha_inscripcion ,
							$nombre_madrePre ,
							$apellido_madrePre ,
							$listNacionalidad_madrePre_ ,
							$cedula_madrePre ,
							$listEstado_civil_madre ,
							$lugar_nacimientoMadrePre ,
							$listNacionalidad_madrePre ,
							$selectEstadoid3 ,
							$fecha_nac_madrePre ,
							$direccion_habitacion_madrePre ,
							$telefono_madrePre ,
							$direccion_trabajo_madrePre ,
							$telefono_madre_trabajo ,
							$listNivel_academico_madre ,
							$otrosDatos_madre ,
							$nombre_padrePre ,
							$apellido_padrePre ,
							$listNacionalidad_padrePre ,
							$cedula_padrePre ,
							$listEstado_civil_padre ,
							$lugar_nacimientoPadrePre ,
							$listNacionalidad_padrePre_ ,
							$selectEstadoid4 ,
							$fecha_nac_padrePre ,
							$direccion_habitacion_PadrePre ,
							$telefono_padrePre ,	
							$direccion_trabajo_padre ,
							$telefono_padre_trabajo ,
							$listNivel_academico_padre ,
							$otrosDatos_padre ,
							$listCome_solo ,
							$listLo_ayudan ,
							$quien_loayuda ,
							$comida_prefiere ,
							$comida_rechaza ,
							$alimentos_prohibidos ,
							$listEsfinteres ,
							$listAsea_solo ,
							$horas_dormidas ,
							$tiempo_dedica_madre ,
							$tiempo_dedica_padre ,
							$tiempo_dedica_abuelo ,
							$persona_retirarlo ,
							$listNacionalidad_retiro ,
							$cedula_retiro ,
							$telefono_retiro ,			
							$listParentescoPre ,				
							$embarazo_pre_escolar ,
							$problema_embarazo ,
							$oficio_embarazo ,
							$parto_prescolar ,
							$edad_embarazo ,
							$listProblema_parto ,
							$cual_problema_parto ,
							$peso_alnacer ,
							$talla_alnacer ,	
							$listProblema_nacimiento ,
							$cual_problema_nacer ,
							$comenzo_hablar ,
							$comenzo_caminar ,
							$dejo_panales ,
							$peso_nino ,
							$talla_nino ,
							$grupo_sanguineo ,
							$listAlergicoPre ,
							$Especifique_alergico ,
							$enfermeda_padecida_nino ,
							$listHospitalizado ,
							$alergico_causa ,
							$medicamento_fiebre ,
							$checkMotora ,
							$checkCrecimiento ,
							$checkAuditiva ,
							$checkVisual ,
							$checkOtra_discapacidad ,
							$discapacidad_otra,
							$listEspecialistas ,
							$especialista_cual ,
							$listProblema_lenguaje ,
							$listMano_frecuentemente ,
							$tiempo_acuesta ,
							$tiempo_selevanta ,
							$listsueno_nino ,
							$duerme_nino ,
							$informacion_sumisnitrar ,
							$listStatus 
	)
        {

            $return = "";
            $this->strNombre1  =  $strNombre1;
            $this->strNombre2 =  $strNombre2;
            $this->strApellido1 =  $strApellido1;
            $this->strApellido2 =  $strApellido2;
            $this->intCedula_escolar =  $intCedula_escolar;
            $this->int_fecha_nac =  $fecha_nac;
            $this->intGenero =  $intGenero;
            $this->intNacionalidad=  $intNacionalidad;
            $this->int_selectEstadoid =  $selectEstadoid;
            $this->str_lugar_nacimiento=  $lugar_nacimiento;
            $this->int_listTalla_camisa =  $listTalla_camisa;
            $this->int_listTalla_pantalon=  $listTalla_pantalon;
            $this->int_listTalla_zapato=  $listTalla_zapato;
            $this->int_peso =  $peso;
            $this->int_estatura =  $estatura;
            $this->str_listHermanosPre =  $listHermanosPre;
            $this->int_cuantos_hermanos =  $cuantos_hermanos;
            $this->str_listTipo_alumno_pre =  $listTipo_alumno_pre ;
            $this->int_listTurnoPre =  $listTurnoPre;
            $this->int_selectSeccionid =  $selectSeccionid;
            $this->str_periodo_actual =  $periodo_actual;
            $this->str_funcionario=  $funcionario;
            $this->str_fecha_inscripcion =  $fecha_inscripcion;
            $this->str_nombre_madrePre =  $nombre_madrePre;
            $this->str_apellido_madrePre =  $apellido_madrePre;
            $this->int_listNacionalidad_madrePre_ =  $listNacionalidad_madrePre_;
            $this->int_cedula_madrePre =  $cedula_madrePre;
            $this->str_listEstado_civil_madre =  $listEstado_civil_madre;
            $this->str_lugar_nacimientoMadrePre =  $lugar_nacimientoMadrePre;
            $this->int_listNacionalidad_madrePre =  $listNacionalidad_madrePre;
            $this->int_selectEstadoid3 =  $selectEstadoid3;
            $this->str_fecha_nac_madrePre =  $fecha_nac_madrePre;
            $this->str_direccion_habitacion_madrePre =  $direccion_habitacion_madrePre;
            $this->int_telefono_madrePre =  $telefono_madrePre;
            $this->int_direccion_trabajo_madrePre =  $direccion_trabajo_madrePre;
            $this->int_telefono_madre_trabajo =  $telefono_madre_trabajo;
            $this->int_listNivel_academico_madre =  $listNivel_academico_madre;
            $this->str_otrosDatos_madre=  $otrosDatos_madre;
            $this->str_nombre_padrePre =  $nombre_padrePre;
            $this->str_apellido_padrePre =  $apellido_padrePre;
            $this->int_listNacionalidad_padrePre =  $listNacionalidad_padrePre;
            $this->int_cedula_padrePre =  $cedula_padrePre;
            $this->str_listEstado_civil_padre =  $listEstado_civil_padre;
            $this->str_lugar_nacimientoPadrePre =  $lugar_nacimientoPadrePre;
            $this->int_listNacionalidad_padrePre_ =  $listNacionalidad_padrePre_;
            $this->int_selectEstadoid4 =  $selectEstadoid4;
            $this->str_fecha_nac_padrePre =  $fecha_nac_padrePre;
            $this->str_direccion_habitacion_PadrePre =  $direccion_habitacion_PadrePre;
            $this->int_telefono_padrePre =  $telefono_padrePre;  
            $this->str_direccion_trabajo_padre =  $direccion_trabajo_padre;
            $this->int_telefono_padre_trabajo =  $telefono_padre_trabajo;
            $this->str_listNivel_academico_padre =  $listNivel_academico_padre;
            $this->str_otrosDatos_padre =  $otrosDatos_padre;
            $this->str_listCome_solo =  $listCome_solo;
            $this->str_listLo_ayudan =  $listLo_ayudan;
            $this->str_quien_loayuda =  $quien_loayuda;
            $this->str_comida_prefiere =  $comida_prefiere;
            $this->str_comida_rechaza =  $comida_rechaza;
            $this->str_alimentos_prohibidos =  $alimentos_prohibidos;
            $this->str_listEsfinteres =  $listEsfinteres;
            $this->str_listAsea_solo =  $listAsea_solo;
            $this->int_horas_dormidas =  $horas_dormidas;
            $this->int_tiempo_dedica_madre =  $tiempo_dedica_madre;
            $this->int_tiempo_dedica_padre =  $tiempo_dedica_padre;
            $this->int_tiempo_dedica_abuelo =  $tiempo_dedica_abuelo;
            $this->str_persona_retirarlo =  $persona_retirarlo;
            $this->str_listNacionalidad_retiro =  $listNacionalidad_retiro;
            $this->int_cedula_retiro =  $cedula_retiro;
            $this->int_telefono_retiro =  $telefono_retiro;  
            $this->str_listParentescoPre =  $listParentescoPre;				
            $this->str_embarazo_pre_escolar =  $embarazo_pre_escolar ;
            $this->str_problema_embarazo =  $problema_embarazo;
            $this->str_oficio_embarazo =  $oficio_embarazo ;
            $this->str_parto_prescolar =  $parto_prescolar;
            $this->int_edad_embarazo =  $edad_embarazo;
            $this->int_listProblema_parto =  $listProblema_parto;
            $this->str_cual_problema_parto =  $cual_problema_parto;
            $this->int_peso_alnacer =  $peso_alnacer;
            $this->int_talla_alnacer =  $talla_alnacer;  
            $this->str_listProblema_nacimiento =  $listProblema_nacimiento;
            $this->str_cual_problema_nacer =  $cual_problema_nacer;
            $this->int_comenzo_hablar =  $comenzo_hablar;
            $this->int_comenzo_caminar =  $comenzo_caminar;
            $this->int_dejo_panales =  $dejo_panales;
            $this->int_peso_nino =  $peso_nino ;
            $this->int_talla_nino =  $talla_nino;
            $this->str_grupo_sanguineo =  $grupo_sanguineo ;
            $this->str_listAlergicoPre =  $listAlergicoPre;
            $this->str_Especifique_alergico =  $Especifique_alergico;
            $this->str_enfermeda_padecida_nino =  $enfermeda_padecida_nino;
            $this->str_listHospitalizado =  $listHospitalizado;
            $this->str_alergico_causa = $alergico_causa;
            $this->str_medicamento_fiebre =  $medicamento_fiebre ;
            $this->int_checkMotora =  $checkMotora;
            $this->int_checkCrecimiento =  $checkCrecimiento;
            $this->int_checkAuditiva =  $checkAuditiva;
            $this->int_checkVisual =  $checkVisual;
            $this->int_checkOtra_discapacidad =  $checkOtra_discapacidad;
            $this->str_discapacidad_otra=  $discapacidad_otra;
            $this->str_listEspecialistas =  $listEspecialistas;
            $this->str_especialista_cual =  $especialista_cual;
            $this->str_listProblema_lenguaje =  $listProblema_lenguaje;
            $this->str_listMano_frecuentemente =  $listMano_frecuentemente;
            $this->int_tiempo_acuesta =  $tiempo_acuesta;
            $this->int_tiempo_selevanta =  $tiempo_selevanta;
            $this->int_listsueno_nino = $listsueno_nino;
            $this->str_duerme_nino =  $duerme_nino;
            $this->str_informacion_sumisnitrar =  $informacion_sumisnitrar;
            $this->int_listStatus2=  $listStatus;
           
          

            $sql = "SELECT * FROM estudiantes_inicial WHERE cedula_escolar = '{$this->intCedula_escolar}' AND  periodo_escolar = '{$this->str_periodo_actual}' ";
            $request = $this->select_all($sql);

            if (empty($request)) {
                $query_insert = "INSERT INTO estudiantes_inicial(
                                                                `estudiantes_inicial`.`nombre_alumno1`,
                                                                `estudiantes_inicial`.`nombre_alumno2`,
                                                                `estudiantes_inicial`.`apellido_alumno1`,
                                                                `estudiantes_inicial`.`apellido_alumno2`,
                                                                `estudiantes_inicial`.`cedula_escolar`,
                                                                `estudiantes_inicial`.`fecha_nac`,
                                                                `estudiantes_inicial`.`genero`,
                                                                `estudiantes_inicial`.`nacionalidad_alumno`,
                                                                `estudiantes_inicial`.`estado_id`,
                                                                `estudiantes_inicial`.`nacimiento_alumno`,
                                                                `estudiantes_inicial`.`talla_camisa`,
                                                                `estudiantes_inicial`.`talla_pantalon`,
                                                                `estudiantes_inicial`.`talla_zapato`,
                                                                `estudiantes_inicial`.`peso`,
                                                                `estudiantes_inicial`.`estatura`,
                                                                `estudiantes_inicial`.`tiene_hermanos`,
                                                                `estudiantes_inicial`.`cuantos_hermanos`,
                                                                `estudiantes_inicial`.`tipo_alumno`,
                                                                `estudiantes_inicial`.`turno`,
                                                                `estudiantes_inicial`.`seccion_id`,
                                                                `estudiantes_inicial`.`periodo_escolar`,
                                                                `estudiantes_inicial`.`funcionario`,
                                                                `estudiantes_inicial`.`fecha_inscripcion`,
                                                                `estudiantes_inicial`.`nombre_madre`,
                                                                `estudiantes_inicial`.`apellido_madre`,
                                                                `estudiantes_inicial`.`nacionalidad_madre`,
                                                                `estudiantes_inicial`.`cedula_madre`,
                                                                `estudiantes_inicial`.`estado_civil_madre`,
                                                                `estudiantes_inicial`.`nacimiento_madre`,
                                                                `estudiantes_inicial`.`tipo_nacionalidad_madre`,
                                                                `estudiantes_inicial`.`estado_madre_id`,
                                                                `estudiantes_inicial`.`fecha_nac_madre`,
                                                                `estudiantes_inicial`.`direccion_hab_madre`,
                                                                `estudiantes_inicial`.`telefono_madre`,
                                                                `estudiantes_inicial`.`direccion_trabajo_madre`,
                                                                `estudiantes_inicial`.`telefono_trabajo_madre`,
                                                                `estudiantes_inicial`.`nivel_academico_madre`,
                                                                `estudiantes_inicial`.`otros_datos_madre`,
                                                                `estudiantes_inicial`.`nombre_padre`,
                                                                `estudiantes_inicial`.`apellido_padre`,
                                                                `estudiantes_inicial`.`nacionalidad_padre`,
                                                                `estudiantes_inicial`.`cedula_padre`,
                                                                `estudiantes_inicial`.`estado_civil_padre`,
                                                                `estudiantes_inicial`.`nacimiento_padre`,
                                                                `estudiantes_inicial`.`tipo_nacionalidad_padre`,
                                                                `estudiantes_inicial`.`estado_padre_id` ,
                                                                `estudiantes_inicial`.`fecha_nac_padre`,
                                                                `estudiantes_inicial`.`direccion_hab_padre`,
                                                                `estudiantes_inicial`.`telefono_padre`,
                                                                `estudiantes_inicial`.`direccion_trabajo_padre`,
                                                                `estudiantes_inicial`.`telefono_trabajo_padre`,
                                                                `estudiantes_inicial`.`nivel_academico_padre`,
                                                                `estudiantes_inicial`.`otros_datos_padre`,
                                                                `estudiantes_inicial`.`come_solo`,
                                                                `estudiantes_inicial`.`lo_ayudan`,
                                                                `estudiantes_inicial`.`quien_ayuda`,
                                                                `estudiantes_inicial`.`comida_favortia`,
                                                                `estudiantes_inicial`.`comida_rechaza`,
                                                                `estudiantes_inicial`.`alimientos_prohibidos`,
                                                                `estudiantes_inicial`.`enfinteres`,
                                                                `estudiantes_inicial`.`asea_solo`,
                                                                `estudiantes_inicial`.`horas_duerme`,
                                                                `estudiantes_inicial`.`tiempo_dedica_madre`,
                                                                `estudiantes_inicial`.`tiempo_dedica_padre`,
                                                                `estudiantes_inicial`.`tiempo_dedica_abuelos`,
                                                                `estudiantes_inicial`.`nombre_retiro`,
                                                                `estudiantes_inicial`.`nacionalidad_retiro`,
                                                                `estudiantes_inicial`.`cedula_retiro`,
                                                                `estudiantes_inicial`.`celular_retiro`,
                                                                `estudiantes_inicial`.`parentesco_retiro`,
                                                                `estudiantes_inicial`.`situacion_embarazo`,
                                                                `estudiantes_inicial`.`enfermedad_durante_embarazo`,
                                                                `estudiantes_inicial`.`oficio_durante_embarazo`,
                                                                `estudiantes_inicial`.`situacion_parto_nacimiento`,
                                                                `estudiantes_inicial`.`edad_madre_embarazo`,
                                                                `estudiantes_inicial`.`problemas_parto`,
                                                                `estudiantes_inicial`.`cual_problema_parto`,
                                                                `estudiantes_inicial`.`peso_alnacer`,
                                                                `estudiantes_inicial`.`talla_alnacer`,
                                                                `estudiantes_inicial`.`problemas_primeros_dias`,
                                                                `estudiantes_inicial`.`cual_problema`,
                                                                `estudiantes_inicial`.`edad_hablar`,
                                                                `estudiantes_inicial`.`edad_caminar`,
                                                                `estudiantes_inicial`.`edad_panales`,
                                                                `estudiantes_inicial`.`peso_nino`,
                                                                `estudiantes_inicial`.`talla_nino`,
                                                                `estudiantes_inicial`.`grupo_sanguineo`,
                                                                `estudiantes_inicial`.`alergico`,
                                                                `estudiantes_inicial`.`especifique_alergia`,
                                                                `estudiantes_inicial`.`enfermedades_padrecidad`,
                                                                `estudiantes_inicial`.`hospitalizado`,
                                                                `estudiantes_inicial`.`causa_hospitalizado`,
                                                                `estudiantes_inicial`.`fiebre_alta_medicamento`,
                                                                `estudiantes_inicial`.`motora`,
                                                                `estudiantes_inicial`.`crecimiento`,
                                                                `estudiantes_inicial`.`auditiva`,
                                                                `estudiantes_inicial`.`visual`,
                                                                `estudiantes_inicial`.`otra_discapacidad`,
                                                                `estudiantes_inicial`.`especifique_discapacidad`,
                                                                `estudiantes_inicial`.`atendido_especialista`,
                                                                `estudiantes_inicial`.`cual_especialista`,
                                                                `estudiantes_inicial`.`problemas_lenguaje`,
                                                                `estudiantes_inicial`.`mano_habil`,
                                                                `estudiantes_inicial`.`hora_para_dormir`,
                                                                `estudiantes_inicial`.`hora_se_levanta`,
                                                                `estudiantes_inicial`.`sueno_nino`,
                                                                `estudiantes_inicial`.`con_quien_duerme`,
                                                                `estudiantes_inicial`.`informacion_importante`,
                                                                `estudiantes_inicial`.`status` 
                                                                        ) 
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $arrData = array(
                    $this->strNombre1 , 
                    $this->strNombre2 ,
                    $this->strApellido1 ,
                    $this->strApellido2,
                    $this->intCedula_escolar,
                    $this->int_fecha_nac,
                    $this->intGenero ,
                    $this->intNacionalidad,
                    $this->int_selectEstadoid ,
                    $this->str_lugar_nacimiento,
                    $this->int_listTalla_camisa ,
                    $this->int_listTalla_pantalon,
                    $this->int_listTalla_zapato,
                    $this->int_peso ,
                    $this->int_estatura,
                    $this->str_listHermanosPre,
                    $this->int_cuantos_hermanos ,
                    $this->str_listTipo_alumno_pre,
                    $this->int_listTurnoPre ,
                    $this->int_selectSeccionid,
                    $this->str_periodo_actual     ,                  
                    $this->str_funcionario   ,        
                    $this->str_fecha_inscripcion ,
                    $this->str_nombre_madrePre   ,       
                    $this->str_apellido_madrePre  ,       
                    $this->int_listNacionalidad_madrePre_ ,                                                                                                       
                    $this->int_cedula_madrePre ,                          
                    $this->str_listEstado_civil_madre ,                 
                    $this->str_lugar_nacimientoMadrePre ,                                  
                    $this->int_listNacionalidad_madrePre ,                                     
                    $this->int_selectEstadoid3 ,                            
                    $this->str_fecha_nac_madrePre ,                              
                    $this->str_direccion_habitacion_madrePre ,               
                    $this->int_telefono_madrePre ,                       
                    $this->int_direccion_trabajo_madrePre ,             
                    $this->int_telefono_madre_trabajo ,     
                    $this->int_listNivel_academico_madre ,                                   
                    $this->str_otrosDatos_madre,                            
                    $this->str_nombre_padrePre ,                             
                    $this->str_apellido_padrePre ,                            
                    $this->int_listNacionalidad_padrePre ,                                       
                    $this->int_cedula_padrePre ,                          
                    $this->str_listEstado_civil_padre ,                                 
                    $this->str_lugar_nacimientoPadrePre ,                                      
                    $this->int_listNacionalidad_padrePre_ ,                                      
                    $this->int_selectEstadoid4 ,                            
                    $this->str_fecha_nac_padrePre ,                               
                    $this->str_direccion_habitacion_PadrePre ,                                       
                    $this->int_telefono_padrePre ,                                
                    $this->str_direccion_trabajo_padre ,                                    
                    $this->int_telefono_padre_trabajo ,                                   
                    $this->str_listNivel_academico_padre ,                                   
                    $this->str_otrosDatos_padre ,                          
                    $this->str_listCome_solo ,                        
                    $this->str_listLo_ayudan ,                          
                    $this->str_quien_loayuda ,                         
                    $this->str_comida_prefiere ,                        
                    $this->str_comida_rechaza ,                       
                    $this->str_alimentos_prohibidos ,                          
                    $this->str_listEsfinteres ,                        
                    $this->str_listAsea_solo ,                         
                    $this->int_horas_dormidas ,                      
                    $this->int_tiempo_dedica_madre ,                           
                    $this->int_tiempo_dedica_padre ,                           
                    $this->int_tiempo_dedica_abuelo ,                          
                    $this->str_persona_retirarlo ,                         
                    $this->str_listNacionalidad_retiro ,                           
                    $this->int_cedula_retiro ,                     
                    $this->int_telefono_retiro ,                      
                    $this->str_listParentescoPre ,              
                    $this->str_embarazo_pre_escolar ,                               
                    $this->str_problema_embarazo ,                              
                    $this->str_oficio_embarazo ,                         
                    $this->str_parto_prescolar ,                           
                    $this->int_edad_embarazo ,                           
                    $this->int_listProblema_parto ,                        
                    $this->str_cual_problema_parto ,                        
                    $this->int_peso_alnacer ,                         
                    $this->int_talla_alnacer ,                       
                    $this->str_listProblema_nacimiento ,        
                    $this->str_cual_problema_nacer ,                              
                    $this->int_comenzo_hablar ,                       
                    $this->int_comenzo_caminar ,                         
                    $this->int_dejo_panales ,                        
                    $this->int_peso_nino ,                      
                    $this->int_talla_nino ,                  
                    $this->str_grupo_sanguineo ,                           
                    $this->str_listAlergicoPre ,                           
                    $this->str_Especifique_alergico ,                             
                    $this->str_enfermeda_padecida_nino ,                                
                    $this->str_listHospitalizado ,                             
                    $this->str_alergico_causa ,
                    $this->str_medicamento_fiebre ,                          
                    $this->int_checkMotora ,                       
                    $this->int_checkCrecimiento ,                              
                    $this->int_checkAuditiva ,                          
                    $this->int_checkVisual ,                     
                    $this->int_checkOtra_discapacidad ,                              
                    $this->str_discapacidad_otra,                               
                    $this->str_listEspecialistas ,                             
                    $this->str_especialista_cual ,                           
                    $this->str_listProblema_lenguaje ,                               
                    $this->str_listMano_frecuentemente ,                                 
                    $this->int_tiempo_acuesta ,                      
                    $this->int_tiempo_selevanta ,                         
                    $this->int_listsueno_nino , 
                    $this->str_duerme_nino ,                       
                    $this->str_informacion_sumisnitrar ,                                
                    $this->int_listStatus2  
                 );
                $request_insert = $this->insert($query_insert, $arrData);
                $return = $request_insert;
            } else {
                $return = false;
            }
            return $return;


        }



        public function updateEstudiante_inicial(
            $id_estudiante,
            
            $strNombre1 ,
            $strNombre2 ,
            $strApellido1 ,
            $strApellido2 ,
            $intCedula_escolar ,
            $fecha_nac ,
            $intGenero ,
            $intNacionalidad,
            $selectEstadoid ,
            $lugar_nacimiento ,
            $listTalla_camisa ,
            $listTalla_pantalon,
            $listTalla_zapato,
            $peso ,
            $estatura ,
            $listHermanosPre ,
            $cuantos_hermanos ,
            $listTipo_alumno_pre ,
            $listTurnoPre ,
            $selectSeccionid ,
            $periodo_actual ,
            $funcionario,		
            $fecha_inscripcion ,
            $nombre_madrePre ,
            $apellido_madrePre ,
            $listNacionalidad_madrePre_ ,
            $cedula_madrePre ,
            $listEstado_civil_madre ,
            $lugar_nacimientoMadrePre ,
            $listNacionalidad_madrePre ,
            $selectEstadoid3 ,
            $fecha_nac_madrePre ,
            $direccion_habitacion_madrePre ,
            $telefono_madrePre ,
            $direccion_trabajo_madrePre ,
            $telefono_madre_trabajo ,
            $listNivel_academico_madre ,
            $otrosDatos_madre ,
            $nombre_padrePre ,
            $apellido_padrePre ,
            $listNacionalidad_padrePre ,
            $cedula_padrePre ,
            $listEstado_civil_padre ,
            $lugar_nacimientoPadrePre ,
            $listNacionalidad_padrePre_ ,
            $selectEstadoid4 ,
            $fecha_nac_padrePre ,
            $direccion_habitacion_PadrePre ,
            $telefono_padrePre ,	
            $direccion_trabajo_padre ,
            $telefono_padre_trabajo ,
            $listNivel_academico_padre ,
            $otrosDatos_padre ,
            $listCome_solo ,
            $listLo_ayudan ,
            $quien_loayuda ,
            $comida_prefiere ,
            $comida_rechaza ,
            $alimentos_prohibidos ,
            $listEsfinteres ,
            $listAsea_solo ,
            $horas_dormidas ,
            $tiempo_dedica_madre ,
            $tiempo_dedica_padre ,
            $tiempo_dedica_abuelo ,
            $persona_retirarlo ,
            $listNacionalidad_retiro ,
            $cedula_retiro ,
            $telefono_retiro ,			
            $listParentescoPre ,				
            $embarazo_pre_escolar ,
            $problema_embarazo ,
            $oficio_embarazo ,
            $parto_prescolar ,
            $edad_embarazo ,
            $listProblema_parto ,
            $cual_problema_parto ,
            $peso_alnacer ,
            $talla_alnacer ,	
            $listProblema_nacimiento ,
            $cual_problema_nacer ,
            $comenzo_hablar ,
            $comenzo_caminar ,
            $dejo_panales ,
            $peso_nino ,
            $talla_nino ,
            $grupo_sanguineo ,
            $listAlergicoPre ,
            $Especifique_alergico ,
            $enfermeda_padecida_nino ,
            $listHospitalizado ,
            $alergico_causa ,
            $medicamento_fiebre ,
            $checkMotora ,
            $checkCrecimiento ,
            $checkAuditiva ,
            $checkVisual ,
            $checkOtra_discapacidad ,
            $discapacidad_otra,
            $listEspecialistas ,
            $especialista_cual ,
            $listProblema_lenguaje ,
            $listMano_frecuentemente ,
            $tiempo_acuesta ,
            $tiempo_selevanta ,
            $listsueno_nino ,
            $duerme_nino ,
            $informacion_sumisnitrar ,
            $listStatus 
        )
	{
        $this->intId_estudiante = $id_estudiante;
        $this->strNombre1  =  $strNombre1;
        $this->strNombre2 =  $strNombre2;
        $this->strApellido1 =  $strApellido1;
        $this->strApellido2 =  $strApellido2;
        $this->intCedula_escolar =  $intCedula_escolar;
        $this->int_fecha_nac =  $fecha_nac;
        $this->intGenero =  $intGenero;
        $this->intNacionalidad=  $intNacionalidad;
        $this->int_selectEstadoid =  $selectEstadoid;
        $this->str_lugar_nacimiento=  $lugar_nacimiento;
        $this->int_listTalla_camisa =  $listTalla_camisa;
        $this->int_listTalla_pantalon=  $listTalla_pantalon;
        $this->int_listTalla_zapato=  $listTalla_zapato;
        $this->int_peso =  $peso;
        $this->int_estatura =  $estatura;
        $this->str_listHermanosPre =  $listHermanosPre;
        $this->int_cuantos_hermanos =  $cuantos_hermanos;
        $this->str_listTipo_alumno_pre =  $listTipo_alumno_pre ;
        $this->int_listTurnoPre =  $listTurnoPre;
        $this->int_selectSeccionid =  $selectSeccionid;
        $this->str_periodo_actual =  $periodo_actual;
        $this->str_funcionario=  $funcionario;
        $this->str_fecha_inscripcion =  $fecha_inscripcion;
        $this->str_nombre_madrePre =  $nombre_madrePre;
        $this->str_apellido_madrePre =  $apellido_madrePre;
        $this->int_listNacionalidad_madrePre_ =  $listNacionalidad_madrePre_;
        $this->int_cedula_madrePre =  $cedula_madrePre;
        $this->str_listEstado_civil_madre =  $listEstado_civil_madre;
        $this->str_lugar_nacimientoMadrePre =  $lugar_nacimientoMadrePre;
        $this->int_listNacionalidad_madrePre =  $listNacionalidad_madrePre;
        $this->int_selectEstadoid3 =  $selectEstadoid3;
        $this->str_fecha_nac_madrePre =  $fecha_nac_madrePre;
        $this->str_direccion_habitacion_madrePre =  $direccion_habitacion_madrePre;
        $this->int_telefono_madrePre =  $telefono_madrePre;
        $this->int_direccion_trabajo_madrePre =  $direccion_trabajo_madrePre;
        $this->int_telefono_madre_trabajo =  $telefono_madre_trabajo;
        $this->int_listNivel_academico_madre =  $listNivel_academico_madre;
        $this->str_otrosDatos_madre=  $otrosDatos_madre;
        $this->str_nombre_padrePre =  $nombre_padrePre;
        $this->str_apellido_padrePre =  $apellido_padrePre;
        $this->int_listNacionalidad_padrePre =  $listNacionalidad_padrePre;
        $this->int_cedula_padrePre =  $cedula_padrePre;
        $this->str_listEstado_civil_padre =  $listEstado_civil_padre;
        $this->str_lugar_nacimientoPadrePre =  $lugar_nacimientoPadrePre;
        $this->int_listNacionalidad_padrePre_ =  $listNacionalidad_padrePre_;
        $this->int_selectEstadoid4 =  $selectEstadoid4;
        $this->str_fecha_nac_padrePre =  $fecha_nac_padrePre;
        $this->str_direccion_habitacion_PadrePre =  $direccion_habitacion_PadrePre;
        $this->int_telefono_padrePre =  $telefono_padrePre;  
        $this->str_direccion_trabajo_padre =  $direccion_trabajo_padre;
        $this->int_telefono_padre_trabajo =  $telefono_padre_trabajo;
        $this->str_listNivel_academico_padre =  $listNivel_academico_padre;
        $this->str_otrosDatos_padre =  $otrosDatos_padre;
        $this->str_listCome_solo =  $listCome_solo;
        $this->str_listLo_ayudan =  $listLo_ayudan;
        $this->str_quien_loayuda =  $quien_loayuda;
        $this->str_comida_prefiere =  $comida_prefiere;
        $this->str_comida_rechaza =  $comida_rechaza;
        $this->str_alimentos_prohibidos =  $alimentos_prohibidos;
        $this->str_listEsfinteres =  $listEsfinteres;
        $this->str_listAsea_solo =  $listAsea_solo;
        $this->int_horas_dormidas =  $horas_dormidas;
        $this->int_tiempo_dedica_madre =  $tiempo_dedica_madre;
        $this->int_tiempo_dedica_padre =  $tiempo_dedica_padre;
        $this->int_tiempo_dedica_abuelo =  $tiempo_dedica_abuelo;
        $this->str_persona_retirarlo =  $persona_retirarlo;
        $this->str_listNacionalidad_retiro =  $listNacionalidad_retiro;
        $this->int_cedula_retiro =  $cedula_retiro;
        $this->int_telefono_retiro =  $telefono_retiro;  
        $this->str_listParentescoPre =  $listParentescoPre;				
        $this->str_embarazo_pre_escolar =  $embarazo_pre_escolar ;
        $this->str_problema_embarazo =  $problema_embarazo;
        $this->str_oficio_embarazo =  $oficio_embarazo ;
        $this->str_parto_prescolar =  $parto_prescolar;
        $this->int_edad_embarazo =  $edad_embarazo;
        $this->int_listProblema_parto =  $listProblema_parto;
        $this->str_cual_problema_parto =  $cual_problema_parto;
        $this->int_peso_alnacer =  $peso_alnacer;
        $this->int_talla_alnacer =  $talla_alnacer;  
        $this->str_listProblema_nacimiento =  $listProblema_nacimiento;
        $this->str_cual_problema_nacer =  $cual_problema_nacer;
        $this->int_comenzo_hablar =  $comenzo_hablar;
        $this->int_comenzo_caminar =  $comenzo_caminar;
        $this->int_dejo_panales =  $dejo_panales;
        $this->int_peso_nino =  $peso_nino ;
        $this->int_talla_nino =  $talla_nino;
        $this->str_grupo_sanguineo =  $grupo_sanguineo ;
        $this->str_listAlergicoPre =  $listAlergicoPre;
        $this->str_Especifique_alergico =  $Especifique_alergico;
        $this->str_enfermeda_padecida_nino =  $enfermeda_padecida_nino;
        $this->str_listHospitalizado =  $listHospitalizado;
        $this->str_alergico_causa = $alergico_causa;
        $this->str_medicamento_fiebre =  $medicamento_fiebre ;
        $this->int_checkMotora =  $checkMotora;
        $this->int_checkCrecimiento =  $checkCrecimiento;
        $this->int_checkAuditiva =  $checkAuditiva;
        $this->int_checkVisual =  $checkVisual;
        $this->int_checkOtra_discapacidad =  $checkOtra_discapacidad;
        $this->str_discapacidad_otra=  $discapacidad_otra;
        $this->str_listEspecialistas =  $listEspecialistas;
        $this->str_especialista_cual =  $especialista_cual;
        $this->str_listProblema_lenguaje =  $listProblema_lenguaje;
        $this->str_listMano_frecuentemente =  $listMano_frecuentemente;
        $this->int_tiempo_acuesta =  $tiempo_acuesta;
        $this->int_tiempo_selevanta =  $tiempo_selevanta;
        $this->int_listsueno_nino = $listsueno_nino;
        $this->str_duerme_nino =  $duerme_nino;
        $this->str_informacion_sumisnitrar =  $informacion_sumisnitrar;
        $this->int_listStatus2=  $listStatus;

        $sql = "SELECT * FROM estudiantes_inicial WHERE cedula_escolar = '{$this->intCedula_escolar}' AND  nombre_alumno1 = '{$this->strNombre1}' AND inicial_id != $this->intId_estudiante";
		$request = $this->select_all($sql);

		if (empty($request)) {
                                                $sql = "UPDATE estudiantes_inicial SET 
                                                                nombre_alumno1 = ?,
                                                                nombre_alumno2 = ?,
                                                                apellido_alumno1 = ?,
                                                                apellido_alumno2 = ?,
                                                                cedula_escolar = ?,
                                                                fecha_nac = ?,
                                                                genero = ?,
                                                                nacionalidad_alumno = ?,
                                                                estado_id = ?,
                                                                nacimiento_alumno = ?,
                                                                talla_camisa = ?,
                                                                talla_pantalon = ?,
                                                                talla_zapato = ?,
                                                                peso = ?,
                                                                estatura = ?,
                                                                tiene_hermanos = ?,
                                                                cuantos_hermanos = ?,
                                                                tipo_alumno = ?,
                                                                turno = ?,
                                                                seccion_id = ?,
                                                                periodo_escolar = ?,
                                                                funcionario = ?,
                                                                fecha_inscripcion = ?,
                                                                nombre_madre = ?,
                                                                apellido_madre = ?,
                                                                nacionalidad_madre = ?,
                                                                cedula_madre = ?,
                                                                estado_civil_madre = ?,
                                                                nacimiento_madre = ?,
                                                                tipo_nacionalidad_madre = ?,
                                                                estado_madre_id = ?,
                                                                fecha_nac_madre = ?,
                                                                direccion_hab_madre = ?,
                                                                telefono_madre = ?,
                                                                direccion_trabajo_madre = ?,
                                                                telefono_trabajo_madre = ?,
                                                                nivel_academico_madre = ?,
                                                                otros_datos_madre = ?,
                                                                nombre_padre = ?,
                                                                apellido_padre = ?,
                                                                nacionalidad_padre = ?,
                                                                cedula_padre = ?,
                                                                estado_civil_padre = ?,
                                                                nacimiento_padre = ?,
                                                                tipo_nacionalidad_padre = ?,
                                                                estado_padre_id = ?,
                                                                fecha_nac_padre = ?,
                                                                direccion_hab_padre = ?,
                                                                telefono_padre = ?,
                                                                direccion_trabajo_padre = ?,
                                                                telefono_trabajo_padre = ?,
                                                                nivel_academico_padre = ?,
                                                                otros_datos_padre = ?,
                                                                come_solo = ?,
                                                                lo_ayudan = ?,
                                                                quien_ayuda = ?,
                                                                comida_favortia = ?,
                                                                comida_rechaza = ?,
                                                                alimientos_prohibidos = ?,
                                                                enfinteres = ?,
                                                                asea_solo = ?,
                                                                horas_duerme = ?,
                                                                tiempo_dedica_madre = ?,
                                                                tiempo_dedica_padre = ?,
                                                                tiempo_dedica_abuelos = ?,
                                                                nombre_retiro = ?,
                                                                nacionalidad_retiro = ?,
                                                                cedula_retiro = ?,
                                                                celular_retiro = ?,
                                                                parentesco_retiro = ?,
                                                                situacion_embarazo = ?,
                                                                enfermedad_durante_embarazo = ?,
                                                                oficio_durante_embarazo = ?,
                                                                situacion_parto_nacimiento = ?,
                                                                edad_madre_embarazo = ?,
                                                                problemas_parto = ?,
                                                                cual_problema_parto = ?,
                                                                peso_alnacer = ?,
                                                                talla_alnacer = ?,
                                                                problemas_primeros_dias = ?,
                                                                cual_problema = ?,
                                                                edad_hablar = ?,
                                                                edad_caminar = ?,
                                                                edad_panales = ?,
                                                                peso_nino = ?,
                                                                talla_nino = ?,
                                                                grupo_sanguineo = ?,
                                                                alergico = ?,
                                                                especifique_alergia = ?,
                                                                enfermedades_padrecidad = ?,
                                                                hospitalizado = ?,
                                                                causa_hospitalizado = ?,
                                                                fiebre_alta_medicamento = ?,
                                                                motora = ?,
                                                                crecimiento = ?,
                                                                auditiva = ?,
                                                                visual = ?,
                                                                otra_discapacidad = ?,
                                                                especifique_discapacidad = ?,
                                                                atendido_especialista = ?,
                                                                cual_especialista = ?,
                                                                problemas_lenguaje = ?,
                                                                mano_habil = ?,
                                                                hora_para_dormir = ?,
                                                                hora_se_levanta = ?,
                                                                sueno_nino = ?,
                                                                con_quien_duerme = ?,
                                                                informacion_importante = ?,
                                                                status = ?
            
                                        WHERE inicial_id = $this->intId_estudiante ";
                                    $arrData = array($this->strNombre1 , 
                                                    $this->strNombre2 ,
                                                    $this->strApellido1 ,
                                                    $this->strApellido2,
                                                    $this->intCedula_escolar,
                                                    $this->int_fecha_nac,
                                                    $this->intGenero ,
                                                    $this->intNacionalidad,
                                                    $this->int_selectEstadoid ,
                                                    $this->str_lugar_nacimiento,
                                                    $this->int_listTalla_camisa ,
                                                    $this->int_listTalla_pantalon,
                                                    $this->int_listTalla_zapato,
                                                    $this->int_peso ,
                                                    $this->int_estatura,
                                                    $this->str_listHermanosPre,
                                                    $this->int_cuantos_hermanos ,
                                                    $this->str_listTipo_alumno_pre,
                                                    $this->int_listTurnoPre ,
                                                    $this->int_selectSeccionid,
                                                    $this->str_periodo_actual     ,                  
                                                    $this->str_funcionario   ,        
                                                    $this->str_fecha_inscripcion ,
                                                    $this->str_nombre_madrePre   ,       
                                                    $this->str_apellido_madrePre  ,       
                                                    $this->int_listNacionalidad_madrePre_ ,                                                                                                       
                                                    $this->int_cedula_madrePre ,                          
                                                    $this->str_listEstado_civil_madre ,                 
                                                    $this->str_lugar_nacimientoMadrePre ,                                  
                                                    $this->int_listNacionalidad_madrePre ,                                     
                                                    $this->int_selectEstadoid3 ,                            
                                                    $this->str_fecha_nac_madrePre ,                              
                                                    $this->str_direccion_habitacion_madrePre ,               
                                                    $this->int_telefono_madrePre ,                       
                                                    $this->int_direccion_trabajo_madrePre ,             
                                                    $this->int_telefono_madre_trabajo ,     
                                                    $this->int_listNivel_academico_madre ,                                   
                                                    $this->str_otrosDatos_madre,                            
                                                    $this->str_nombre_padrePre ,                             
                                                    $this->str_apellido_padrePre ,                            
                                                    $this->int_listNacionalidad_padrePre ,                                       
                                                    $this->int_cedula_padrePre ,                          
                                                    $this->str_listEstado_civil_padre ,                                 
                                                    $this->str_lugar_nacimientoPadrePre ,                                      
                                                    $this->int_listNacionalidad_padrePre_ ,                                      
                                                    $this->int_selectEstadoid4 ,                            
                                                    $this->str_fecha_nac_padrePre ,                               
                                                    $this->str_direccion_habitacion_PadrePre ,                                       
                                                    $this->int_telefono_padrePre ,                                
                                                    $this->str_direccion_trabajo_padre ,                                    
                                                    $this->int_telefono_padre_trabajo ,                                   
                                                    $this->str_listNivel_academico_padre ,                                   
                                                    $this->str_otrosDatos_padre ,                          
                                                    $this->str_listCome_solo ,                        
                                                    $this->str_listLo_ayudan ,                          
                                                    $this->str_quien_loayuda ,                         
                                                    $this->str_comida_prefiere ,                        
                                                    $this->str_comida_rechaza ,                       
                                                    $this->str_alimentos_prohibidos ,                          
                                                    $this->str_listEsfinteres ,                        
                                                    $this->str_listAsea_solo ,                         
                                                    $this->int_horas_dormidas ,                      
                                                    $this->int_tiempo_dedica_madre ,                           
                                                    $this->int_tiempo_dedica_padre ,                           
                                                    $this->int_tiempo_dedica_abuelo ,                          
                                                    $this->str_persona_retirarlo ,                         
                                                    $this->str_listNacionalidad_retiro ,                           
                                                    $this->int_cedula_retiro ,                     
                                                    $this->int_telefono_retiro ,                      
                                                    $this->str_listParentescoPre ,              
                                                    $this->str_embarazo_pre_escolar ,                               
                                                    $this->str_problema_embarazo ,                              
                                                    $this->str_oficio_embarazo ,                         
                                                    $this->str_parto_prescolar ,                           
                                                    $this->int_edad_embarazo ,                           
                                                    $this->int_listProblema_parto ,                        
                                                    $this->str_cual_problema_parto ,                        
                                                    $this->int_peso_alnacer ,                         
                                                    $this->int_talla_alnacer ,                       
                                                    $this->str_listProblema_nacimiento ,        
                                                    $this->str_cual_problema_nacer ,                              
                                                    $this->int_comenzo_hablar ,                       
                                                    $this->int_comenzo_caminar ,                         
                                                    $this->int_dejo_panales ,                        
                                                    $this->int_peso_nino ,                      
                                                    $this->int_talla_nino ,                  
                                                    $this->str_grupo_sanguineo ,                           
                                                    $this->str_listAlergicoPre ,                           
                                                    $this->str_Especifique_alergico ,                             
                                                    $this->str_enfermeda_padecida_nino ,                                
                                                    $this->str_listHospitalizado ,                             
                                                    $this->str_alergico_causa ,
                                                    $this->str_medicamento_fiebre ,                          
                                                    $this->int_checkMotora ,                       
                                                    $this->int_checkCrecimiento ,                              
                                                    $this->int_checkAuditiva ,                          
                                                    $this->int_checkVisual ,                     
                                                    $this->int_checkOtra_discapacidad ,                              
                                                    $this->str_discapacidad_otra,                               
                                                    $this->str_listEspecialistas ,                             
                                                    $this->str_especialista_cual ,                           
                                                    $this->str_listProblema_lenguaje ,                               
                                                    $this->str_listMano_frecuentemente ,                                 
                                                    $this->int_tiempo_acuesta ,                      
                                                    $this->int_tiempo_selevanta ,                         
                                                    $this->int_listsueno_nino , 
                                                    $this->str_duerme_nino ,                       
                                                    $this->str_informacion_sumisnitrar ,                                
                                                    $this->int_listStatus2   );
                                        $request = $this->update($sql, $arrData);
                                    } else {
                                        $request = false;
                                    }
                                    return $request;
	}


    
    public function selectEstudiantes_inicial()
	{

        $sql = "SELECT  `estudiantes_inicial`.`inicial_id`, 
        `estudiantes_inicial`.`nombre_alumno1`,
        `estudiantes_inicial`.`nombre_alumno2`,
        `estudiantes_inicial`.`apellido_alumno1`,
        `estudiantes_inicial`.`apellido_alumno2`,
        `estudiantes_inicial`.`cedula_escolar`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
        `estudiantes_inicial`.`genero`,
        `estudiantes_inicial`.`nacionalidad_alumno`,
        `e1`.`desc_estado` AS 'estado_alumno',
        `estudiantes_inicial`.`nacimiento_alumno`,
        `estudiantes_inicial`.`talla_camisa`,
        `estudiantes_inicial`.`talla_pantalon`,
        `estudiantes_inicial`.`talla_zapato`,
        `estudiantes_inicial`.`peso`,
        `estudiantes_inicial`.`estatura`,
        `estudiantes_inicial`.`tiene_hermanos`,
        `estudiantes_inicial`.`cuantos_hermanos`,
        `estudiantes_inicial`.`tipo_alumno`,
        `estudiantes_inicial`.`turno`,
        `desc_seccion`.`nombre_seccion`,
        `estudiantes_inicial`.`periodo_escolar`,
        `estudiantes_inicial`.`funcionario`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
        `estudiantes_inicial`.`nombre_madre`,
        `estudiantes_inicial`.`apellido_madre`,
        `estudiantes_inicial`.`nacionalidad_madre`,
        `estudiantes_inicial`.`cedula_madre`,
        `estudiantes_inicial`.`estado_civil_madre`,
        `estudiantes_inicial`.`nacimiento_madre`,
        `estudiantes_inicial`.`tipo_nacionalidad_madre`,
        `e2`.`desc_estado` AS 'estado_madre',
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_madre`,'%d-%m-%Y') AS 'fecha_nac_madre',
        `estudiantes_inicial`.`direccion_hab_madre`,
        `estudiantes_inicial`.`telefono_madre`,
        `estudiantes_inicial`.`direccion_trabajo_madre`,
        `estudiantes_inicial`.`telefono_trabajo_madre`,
        `estudiantes_inicial`.`nivel_academico_madre`,
        `estudiantes_inicial`.`otros_datos_madre`,
        `estudiantes_inicial`.`nombre_padre`,
        `estudiantes_inicial`.`apellido_padre`,
        `estudiantes_inicial`.`nacionalidad_padre`,
        `estudiantes_inicial`.`cedula_padre`,
        `estudiantes_inicial`.`estado_civil_padre`,
        `estudiantes_inicial`.`nacimiento_padre`,
        `estudiantes_inicial`.`tipo_nacionalidad_padre`,
        `e3`.`desc_estado` AS 'estado_padre',
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_padre`,'%d-%m-%Y') AS 'fecha_nac_padre',
        `estudiantes_inicial`.`direccion_hab_padre`,
        `estudiantes_inicial`.`telefono_padre`,
        `estudiantes_inicial`.`direccion_trabajo_padre`,
        `estudiantes_inicial`.`telefono_trabajo_padre`,
        `estudiantes_inicial`.`nivel_academico_padre`,
        `estudiantes_inicial`.`otros_datos_padre`,
        `estudiantes_inicial`.`come_solo`,
        `estudiantes_inicial`.`lo_ayudan`,
        `estudiantes_inicial`.`quien_ayuda`,
        `estudiantes_inicial`.`comida_favortia`,
        `estudiantes_inicial`.`comida_rechaza`,
        `estudiantes_inicial`.`alimientos_prohibidos`,
        `estudiantes_inicial`.`enfinteres`,
        `estudiantes_inicial`.`asea_solo`,
        `estudiantes_inicial`.`horas_duerme`,
        `estudiantes_inicial`.`tiempo_dedica_madre`,
        `estudiantes_inicial`.`tiempo_dedica_padre`,
        `estudiantes_inicial`.`tiempo_dedica_abuelos`,
        `estudiantes_inicial`.`nombre_retiro`,
        `estudiantes_inicial`.`nacionalidad_retiro`,
        `estudiantes_inicial`.`cedula_retiro`,
        `estudiantes_inicial`.`celular_retiro`,
        `estudiantes_inicial`.`parentesco_retiro`,
        `estudiantes_inicial`.`situacion_embarazo`,
        `estudiantes_inicial`.`enfermedad_durante_embarazo`,
        `estudiantes_inicial`.`oficio_durante_embarazo`,
        `estudiantes_inicial`.`situacion_parto_nacimiento`,
        `estudiantes_inicial`.`edad_madre_embarazo`,
        `estudiantes_inicial`.`problemas_parto`,
        `estudiantes_inicial`.`cual_problema_parto`,
        `estudiantes_inicial`.`peso_alnacer`,
        `estudiantes_inicial`.`talla_alnacer`,
        `estudiantes_inicial`.`problemas_primeros_dias`,
        `estudiantes_inicial`.`cual_problema`,
        `estudiantes_inicial`.`edad_hablar`,
        `estudiantes_inicial`.`edad_caminar`,
        `estudiantes_inicial`.`edad_panales`,
        `estudiantes_inicial`.`peso_nino`,
        `estudiantes_inicial`.`talla_nino`,
        `estudiantes_inicial`.`grupo_sanguineo`,
        `estudiantes_inicial`.`alergico`,
        `estudiantes_inicial`.`especifique_alergia`,
        `estudiantes_inicial`.`enfermedades_padrecidad`,
        `estudiantes_inicial`.`hospitalizado`,
        `estudiantes_inicial`.`causa_hospitalizado`,
        `estudiantes_inicial`.`fiebre_alta_medicamento`,
        `estudiantes_inicial`.`motora`,
        `estudiantes_inicial`.`crecimiento`,
        `estudiantes_inicial`.`auditiva`,
        `estudiantes_inicial`.`visual`,
        `estudiantes_inicial`.`otra_discapacidad`,
        `estudiantes_inicial`.`especifique_discapacidad`,
        `estudiantes_inicial`.`atendido_especialista`,
        `estudiantes_inicial`.`cual_especialista`,
        `estudiantes_inicial`.`problemas_lenguaje`,
        `estudiantes_inicial`.`mano_habil`,
        `estudiantes_inicial`.`hora_para_dormir`,
        `estudiantes_inicial`.`hora_se_levanta`,
        `estudiantes_inicial`.`sueno_nino`,
        `estudiantes_inicial`.`con_quien_duerme`,
        `estudiantes_inicial`.`informacion_importante`,
        `estudiantes_inicial`.`status` 
        FROM `estudiantes_inicial` 
        LEFT JOIN `seccion` 
        ON `estudiantes_inicial`.`seccion_id` = `seccion`.`id_seccion`
        LEFT JOIN `desc_seccion` 
        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
        LEFT JOIN `estado` AS e1
        ON e1.`id_estado` = `estudiantes_inicial`.`estado_id`
        LEFT JOIN `estado` AS e2
        ON e2.`id_estado` = `estudiantes_inicial`.`estado_madre_id`
        LEFT JOIN `estado` AS e3
        ON e3.`id_estado` = `estudiantes_inicial`.`estado_padre_id`
        WHERE `estudiantes_inicial`.`status` != 0";

		$request = $this->select_all($sql);
		return $request;
	}

    public function selectEstudiante_inicial(int $id_estudiante)
	{
        //BUSCAR Estudiante
		$this->intId_estudiante_inicial = $id_estudiante;
		$sql = "SELECT  `estudiantes_inicial`.`inicial_id`, 
        `estudiantes_inicial`.`nombre_alumno1`,
        `estudiantes_inicial`.`nombre_alumno2`,
        `estudiantes_inicial`.`apellido_alumno1`,
        `estudiantes_inicial`.`apellido_alumno2`,
        `estudiantes_inicial`.`cedula_escolar`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac`,'%d-%m-%Y') AS 'fecha_nac',
        `estudiantes_inicial`.`genero`,
        `estudiantes_inicial`.`nacionalidad_alumno`,
        `e1`.`desc_estado` AS 'estado_alumno',
        `estudiantes_inicial`.`nacimiento_alumno`,
        `estudiantes_inicial`.`talla_camisa`,
        `estudiantes_inicial`.`talla_pantalon`,
        `estudiantes_inicial`.`talla_zapato`,
        `estudiantes_inicial`.`peso`,
        `estudiantes_inicial`.`estatura`,
        `estudiantes_inicial`.`tiene_hermanos`,
        `estudiantes_inicial`.`cuantos_hermanos`,
        `estudiantes_inicial`.`tipo_alumno`,
        `estudiantes_inicial`.`turno`,
        `desc_seccion`.`nombre_seccion`,
        `estudiantes_inicial`.`periodo_escolar`,
        `estudiantes_inicial`.`funcionario`,
        DATE_FORMAT(`estudiantes_inicial`.`fecha_inscripcion`,'%d-%m-%Y') AS 'fecha_inscripcion',
        `estudiantes_inicial`.`nombre_madre`,
        `estudiantes_inicial`.`apellido_madre`,
        `estudiantes_inicial`.`nacionalidad_madre`,
        `estudiantes_inicial`.`cedula_madre`,
        `estudiantes_inicial`.`estado_civil_madre`,
        `estudiantes_inicial`.`nacimiento_madre`,
        `estudiantes_inicial`.`tipo_nacionalidad_madre`,
        `e2`.`desc_estado` AS 'estado_madre',
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_madre`,'%d-%m-%Y') AS 'fecha_nac_madre',
        `estudiantes_inicial`.`direccion_hab_madre`,
        `estudiantes_inicial`.`telefono_madre`,
        `estudiantes_inicial`.`direccion_trabajo_madre`,
        `estudiantes_inicial`.`telefono_trabajo_madre`,
        `estudiantes_inicial`.`nivel_academico_madre`,
        `estudiantes_inicial`.`otros_datos_madre`,
        `estudiantes_inicial`.`nombre_padre`,
        `estudiantes_inicial`.`apellido_padre`,
        `estudiantes_inicial`.`nacionalidad_padre`,
        `estudiantes_inicial`.`cedula_padre`,
        `estudiantes_inicial`.`estado_civil_padre`,
        `estudiantes_inicial`.`nacimiento_padre`,
        `estudiantes_inicial`.`tipo_nacionalidad_padre`,
        `e3`.`desc_estado` AS 'estado_padre',
        DATE_FORMAT(`estudiantes_inicial`.`fecha_nac_padre`,'%d-%m-%Y') AS 'fecha_nac_padre',
        `estudiantes_inicial`.`direccion_hab_padre`,
        `estudiantes_inicial`.`telefono_padre`,
        `estudiantes_inicial`.`direccion_trabajo_padre`,
        `estudiantes_inicial`.`telefono_trabajo_padre`,
        `estudiantes_inicial`.`nivel_academico_padre`,
        `estudiantes_inicial`.`otros_datos_padre`,
        `estudiantes_inicial`.`come_solo`,
        `estudiantes_inicial`.`lo_ayudan`,
        `estudiantes_inicial`.`quien_ayuda`,
        `estudiantes_inicial`.`comida_favortia`,
        `estudiantes_inicial`.`comida_rechaza`,
        `estudiantes_inicial`.`alimientos_prohibidos`,
        `estudiantes_inicial`.`enfinteres`,
        `estudiantes_inicial`.`asea_solo`,
        `estudiantes_inicial`.`horas_duerme`,
        `estudiantes_inicial`.`tiempo_dedica_madre`,
        `estudiantes_inicial`.`tiempo_dedica_padre`,
        `estudiantes_inicial`.`tiempo_dedica_abuelos`,
        `estudiantes_inicial`.`nombre_retiro`,
        `estudiantes_inicial`.`nacionalidad_retiro`,
        `estudiantes_inicial`.`cedula_retiro`,
        `estudiantes_inicial`.`celular_retiro`,
        `estudiantes_inicial`.`parentesco_retiro`,
        `estudiantes_inicial`.`situacion_embarazo`,
        `estudiantes_inicial`.`enfermedad_durante_embarazo`,
        `estudiantes_inicial`.`oficio_durante_embarazo`,
        `estudiantes_inicial`.`situacion_parto_nacimiento`,
        `estudiantes_inicial`.`edad_madre_embarazo`,
        `estudiantes_inicial`.`problemas_parto`,
        `estudiantes_inicial`.`cual_problema_parto`,
        `estudiantes_inicial`.`peso_alnacer`,
        `estudiantes_inicial`.`talla_alnacer`,
        `estudiantes_inicial`.`problemas_primeros_dias`,
        `estudiantes_inicial`.`cual_problema`,
        `estudiantes_inicial`.`edad_hablar`,
        `estudiantes_inicial`.`edad_caminar`,
        `estudiantes_inicial`.`edad_panales`,
        `estudiantes_inicial`.`peso_nino`,
        `estudiantes_inicial`.`talla_nino`,
        `estudiantes_inicial`.`grupo_sanguineo`,
        `estudiantes_inicial`.`alergico`,
        `estudiantes_inicial`.`especifique_alergia`,
        `estudiantes_inicial`.`enfermedades_padrecidad`,
        `estudiantes_inicial`.`hospitalizado`,
        `estudiantes_inicial`.`causa_hospitalizado`,
        `estudiantes_inicial`.`fiebre_alta_medicamento`,
        `estudiantes_inicial`.`motora`,
        `estudiantes_inicial`.`crecimiento`,
        `estudiantes_inicial`.`auditiva`,
        `estudiantes_inicial`.`visual`,
        `estudiantes_inicial`.`otra_discapacidad`,
        `estudiantes_inicial`.`especifique_discapacidad`,
        `estudiantes_inicial`.`atendido_especialista`,
        `estudiantes_inicial`.`cual_especialista`,
        `estudiantes_inicial`.`problemas_lenguaje`,
        `estudiantes_inicial`.`mano_habil`,
        `estudiantes_inicial`.`hora_para_dormir`,
        `estudiantes_inicial`.`hora_se_levanta`,
        `estudiantes_inicial`.`sueno_nino`,
        `estudiantes_inicial`.`con_quien_duerme`,
        `estudiantes_inicial`.`informacion_importante`,
        `estudiantes_inicial`.`status` 
        FROM `estudiantes_inicial` 
        LEFT JOIN `seccion` 
        ON `estudiantes_inicial`.`seccion_id` = `seccion`.`id_seccion`
        LEFT JOIN `desc_seccion` 
        ON `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
        LEFT JOIN `estado` AS e1
        ON e1.`id_estado` = `estudiantes_inicial`.`estado_id`
        LEFT JOIN `estado` AS e2
        ON e2.`id_estado` = `estudiantes_inicial`.`estado_madre_id`
        LEFT JOIN `estado` AS e3
        ON e3.`id_estado` = `estudiantes_inicial`.`estado_padre_id`
        WHERE `estudiantes_inicial`.`status` != 0 AND inicial_id = $this->intId_estudiante_inicial";
		$request = $this->select($sql);
		return $request;
	}

    public function selectEstudiante_inicial_1(int $id_estudiante)
	{
		//BUSCAR Estudiante
		$this->intId_estudiante = $id_estudiante;
		$sql = "SELECT * FROM estudiantes_inicial WHERE inicial_id = {$this->intId_estudiante} AND `estudiantes_inicial`.`status`!= 0 ";
		$request = $this->select($sql);
		return $request; 
		
	}

    public function selectEstados()
		{
			$sql ="SELECT * FROM estado ORDER BY `estado`.`desc_estado` ASC";
			$request = $this->select_all($sql);
			return $request;
		}

        public function selectSecciones_inicial(int $turno)
        {
            $this->intTurno = $turno;
            $this->strPeriodo = obtenerPeriodoEscolarActual();
            $sql ="SELECT `seccion`.`id_seccion`,`seccion`.`docente_id`,`seccion`.`desc_seccion_id`,`desc_seccion`.`nombre_seccion`,`seccion`.`periodo_escolar`,`desc_seccion`.`turno_id`
                   FROM `seccion`
                   JOIN `desc_seccion` 
                   ON   `desc_seccion`.`id_desc_seccion` = `seccion`.`desc_seccion_id`
                   AND  `desc_seccion`.`id_desc_seccion` > 14 
                   AND  `desc_seccion`.`turno_id` = {$this->intTurno}
                   WHERE`seccion`.`periodo_escolar` = '$this->strPeriodo'
                   AND  `seccion`.`status` = 1  OR `seccion`.`periodo_escolar` = 1
                   ORDER BY `seccion`.`desc_seccion_id`";
			$request = $this->select_all($sql);
			return $request;

        }

        
        public function selectNombreDocente_inicial($seccion)
		{
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, CONCAT(`docentes`.`nombre_docente`,' ', `docentes`.`apellido_docente`)
                    AS 'nombre_completo' 
                    FROM `seccion`
                    JOIN `docentes`
                    ON docentes.id_docentes = seccion.docente_id
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion} AND `seccion`.`status` = 1 ";
			$request = $this->select_all($sql);
			return $request;
		}

        public function selectPeriodo(int $seccion)
		{
		
			$this->intSeccion = $seccion;
			$sql = "SELECT `seccion`.`id_seccion`, `seccion`.`periodo_escolar`
                    FROM `seccion`
                    WHERE`seccion`.`id_seccion` =  {$this->intSeccion} AND `seccion`.`status` = 1";
			$request = $this->select_all($sql);
			return $request;
		}

}
?>