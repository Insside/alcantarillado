<?php $transaccion = @$_REQUEST['transaccion'];?><div id="xdivSolicitud"> <div class="grupo">  <div class="titular"><h2>Solicitud Detallada [ <a href="#" id="linkEditarSolicitud<?php  echo($transaccion); ?>">Editar</a> ]</h2></div> </div> <div class="row">  <div class="cell" style=""><div class="titular">Servicio: </div><?php  echo($campo['servicio']); ?></div>  <div class="cell" style=""><div class="titular">Categoria: </div><?php  echo($campo['categoria']); ?></div>  <div class="cell" style=""><div class="titular">Causal: </div><?php  echo($campo['causal']); ?></div>  <div class="cell" style=""><div class="titular">Asunto: </div><?php  echo($campo['asunto']); ?></div> </div> <div class="row">  <div class="cell" style=""><div class="titular">Detalle: </div><?php  echo(urldecode($campo['detalle'])); ?></div> </div></div>