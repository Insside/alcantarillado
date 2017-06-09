<?php
$ROOT=(!isset($ROOT))?"../../../../":$ROOT;
require_once($ROOT."modulos/alcantarillado/librerias/Configuracion.cnf.php");
$instalaciones=new Instalaciones();
?>
<style>
  #complementos{padding: 0px;}
  #complementos p{font-size: 14px; line-height: 12px; }
  #complementos .numero{font-size: 50px; line-height: 36px; color:  #375D81; text-align:  right;font-weight:  bold; padding: 10px; background-color: #f2f2f2;}
  #complementos .critico{font-size: 50px; line-height: 36px; color: red; text-align:  right;font-weight:  bold; padding: 10px; background-color: #f2f2f2;}
  #complementos h2{font-size: 14px; line-height: 12px;  text-align:  center; padding: 5px; background-color: #cccccc;}
</style>
<h2>Asuntos</h2>
<p class="critico"><?php echo($asuntos->conteo("total")); ?></p>
<br>
<h2>Causales</h2>
<p class="numero"><?php echo($causales->conteo("total")); ?></p>
<br>
<h2>Categorias</h2>
<p class="numero"><?php echo($categorias->conteo("total")); ?></p>
<h2>Servicios</h2>
<p class="numero"><?php echo($servicios->conteo("total")); ?></p>
