<?php $ROOT = (!isset($ROOT)) ? "../../../" : $ROOT;require_once($ROOT . "modulos/alcantarillado/librerias/Configuracion.cnf.php");$solicitudes =new Solicitudes();$solicitud = $solicitudes->consultar($_REQUEST['solicitud']);$sesion =new Sesion();$transaccion = @$_REQUEST['transaccion'];$accion = @$_REQUEST['accion'];$formulario =new Forms($transaccion);echo($formulario->apertura());if (empty($accion)) { require_once($ROOT . "modulos/alcantarillado/formularios/solicitud/eliminar/confirmar.inc.php");} elseif ($accion == "eliminar") { require_once($ROOT . "modulos/alcantarillado/formularios/solicitud/eliminar/proceder.inc.php");}echo($formulario->cierre());?><?php  if (empty($accion)) { ?> <script type="text/javascript">  //var fv =new Form.Validator.Inline($('<?php  echo($formulario->id); ?>'));  new Form.Request($('<?php  echo($formulario->id); ?>'), $('<?php  echo($formulario->interno); ?>'), {   requestOptions: {    spinnerOptions: {     message: 'Trasmitiendo datos...'    }   },   onSend: function() {    $('spinner').show();   },   onSuccess: function() {    $('spinner').hide();    if ($('<?php  echo($formulario->interno ); ?>') && MUI.options.standardEffects == true) {     $('<?php  echo($formulario->interno ); ?>').setStyle('opacity', 0).get('morph').start({'opacity': 1});    }   }  }); </script><?php  } ?>