<?php

$ROOT=(!isset($ROOT))?"../../../":$ROOT;
require_once($ROOT."modulos/alcantarillado/librerias/Configuracion.cnf.php");
require_once($ROOT."modulos/usuarios/librerias/Usuarios_Permisos.class.php");


class Alcantarillado {

  var $sesion;
  var $fechas;
  var $permisos;
  var $modulos;

  function Alcantarillado() {
    $this->sesion=new Sesion();
    $this->fechas=new Fechas();
}

  function instalacion_crear($matricula) {
    $db=new MySQL(Sesion::getConexion());
    $sql="INSERT INTO `alcantarillado_instalaciones` SET ";
    $sql.="`instalacion`='".time()."',";
    $sql.="`fecha`='".$this->fechas->hoy()."',";
    $sql.="`hora`='".$this->fechas->ahora()."',";
    $sql.="`suscriptor`='".$matricula."',";
    $sql.="`creador`='".$this->sesion->getValue("usuario")."';";
    $resultado=$consulta=$db->sql_query($sql);
    $db->sql_close();
    return($resultado);
  }

}

$alcantarillado=new Alcantarillado();
?>