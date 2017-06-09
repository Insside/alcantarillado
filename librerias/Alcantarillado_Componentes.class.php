<?php

$ROOT = (!isset($ROOT)) ? "../../../" : $ROOT;
if (!class_exists('Aplicacion_Modulos_Componentes')) {
  require_once($ROOT . "modulos/aplicacion/librerias/Aplicacion_Modulos_Componentes.class.php");
}
/*
 * Copyright (c) 2015, Usuario
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * Description of Comercial_Componentes
 *
 * @author Usuario
 */
class Alcantarillado_Componentes extends Aplicacion_Modulos_Componentes {

  private $modulo = "5";
  private $permiso = "DISTRIBUCION-MODULO-A";
  private $datos;

  //put your code here
  function Comercial_Componentes() {
    /** Modulo * */
//    $this->datos[0] = array("componente" => $this->codigo("0", "0"), "herencia" => "0", "titulo" => "Comercial", "descripcion" => "Modulo Comercial", "funcion" => "1384251736", "icono" => "i033x033_comercial", "peso" => "3", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    /** Componentes * */
//    $this->datos[1] = array("componente" => $this->codigo("1", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Suscriptores", "descripcion" => "Componente Suscriptores", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[2] = array("componente" => $this->codigo("2", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Solicitudes", "descripcion" => "Componente Solicitudes", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "2", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[3] = array("componente" => $this->codigo("3", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Aforos", "descripcion" => "Componente Aforos", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "3", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[4] = array("componente" => $this->codigo("4", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Ordenes", "descripcion" => "Componente Ordenes", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "4", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[5] = array("componente" => $this->codigo("5", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Reportes", "descripcion" => "Componente Reportes", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "5", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[6] = array("componente" => $this->codigo("6", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Estadisticas", "descripcion" => "Componente Estadisticas", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "6", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[7] = array("componente" => $this->codigo("7", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Facturación", "descripcion" => "Componente Facturación", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "7", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[8] = array("componente" => $this->codigo("8", "0"), "herencia" => $this->datos[0]['componente'], "titulo" => "Configuración", "descripcion" => "Componente Configuración", "funcion" => "0000000000", "icono" => "i033x033_componente", "peso" => "7", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    /** Opciones * */
//    $this->datos[11] = array("componente" => $this->codigo("1", "1"), "herencia" => $this->datos[1]['componente'], "titulo" => "General", "descripcion" => "Todos los suscriptores", "funcion" => "1385404519", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[21] = array("componente" => $this->codigo("2", "1"), "herencia" => $this->datos[2]['componente'], "titulo" => "Recibidas", "descripcion" => "Recibidas & Asignadas", "funcion" => "1375745645", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[22] = array("componente" => $this->codigo("2", "2"), "herencia" => $this->datos[2]['componente'], "titulo" => "General / Area", "descripcion" => "Responsabilidad General", "funcion" => "1401291294", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[31] = array("componente" => $this->codigo("3", "1"), "herencia" => $this->datos[3]['componente'], "titulo" => "General", "descripcion" => "Listado General", "funcion" => "1430837685", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[51] = array("componente" => $this->codigo("5", "1"), "herencia" => $this->datos[5]['componente'], "titulo" => "Area", "descripcion" => "Reporte de Area", "funcion" => "1400531041", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2015-03-21", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[61] = array("componente" => $this->codigo("6", "1"), "herencia" => $this->datos[6]['componente'], "titulo" => "Equipo / Area", "descripcion" => "Subtotal General", "funcion" => "1427448961", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[62] = array("componente" => $this->codigo("6", "2"), "herencia" => $this->datos[6]['componente'], "titulo" => "Empresa", "descripcion" => "Consolidado", "funcion" => "1427449133", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[81] = array("componente" => $this->codigo("8", "1"), "herencia" => $this->datos[8]['componente'], "titulo" => "Asuntos", "descripcion" => "Consultar & Crear", "funcion" => "1387812230", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[82] = array("componente" => $this->codigo("8", "2"), "herencia" => $this->datos[8]['componente'], "titulo" => "Respuestas", "descripcion" => "Formatos", "funcion" => "1399320324", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2014-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
//    $this->datos[83] = array("componente" => $this->codigo("8", "3"), "herencia" => $this->datos[8]['componente'], "titulo" => "Sinergias", "descripcion" => "Equipos de Trabajo", "funcion" => "1389255902", "icono" => "i033x033_componente", "peso" => "1", "estado" => "ACTIVO", "fecha" => "2015-03-20", "permiso" => $this->permiso, "hora" => "04:12:50", "creador" => "0000000000");
  }

  function regenerar() {
    $datos = $this->datos;
    foreach ($datos as $dato) {
      $this->evaluar($dato);
    }
  }

  function evaluar($dato) {
    $consulta = $this->consultar($dato['componente']);
    if (isset($consulta['componente'])) {
      if ($dato['fecha'] != $consulta['fecha']) {
        //echo("Actualizado:".$dato['componente']);
        $this->actualizar($dato['componente'], "titulo", $dato['titulo']);
        $this->actualizar($dato['componente'], "descripcion", $dato['descripcion']);
        $this->actualizar($dato['componente'], "funcion", $dato['funcion']);
        $this->actualizar($dato['componente'], "icono", $dato['icono']);
        $this->actualizar($dato['componente'], "fecha", $dato['fecha']);
        $this->actualizar($dato['componente'], "hora", $dato['hora']);
        $this->actualizar($dato['componente'], "peso", $dato['peso']);
        $this->actualizar($dato['componente'], "permiso", $dato['permiso']);
      }else{
        //echo("Existe:".$dato['componente']);
      }
    } else {
      //echo("Creado:".$dato['componente']);
      $this->crear($dato);
    }
  }

  function codigo($componente, $opcion) {
    return(str_pad($this->modulo, 2, "0", STR_PAD_LEFT) . str_pad($componente, 2, "0", STR_PAD_LEFT) . str_pad($opcion, 2, "0", STR_PAD_LEFT));
  }

  /**
   * Este metodo retorna el codigo modular del componente generalmente es 
   * utilizado en la generacion del menu. 
   * @return type
   */
  function modulo() {
    return($this->datos[0]['componente']);
  }

}

//$c = new Distribucion_Componentes();
//$c->regenerar();
?>