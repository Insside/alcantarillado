<?php
$ROOT = (!isset($ROOT)) ? "../../" : $ROOT;
require_once($ROOT . "modulos/alcantarillado/librerias/Configuracion.cnf.php");
Sesion::init();
$usuario=Sesion::usuario();
$componentes=new Alcantarillado_Componentes();
$menus = new Aplicacion_Menus();
echo($menus->menu("0000006000",$usuario['usuario']));
?>