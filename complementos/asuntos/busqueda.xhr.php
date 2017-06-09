<?php
$ROOT=(!isset($ROOT))?"../../../../":$ROOT;
require_once($ROOT."modulos/alcantarillado/librerias/Configuracion.cnf.php");
$sesion=new Sesion();
$transaccion=@$_REQUEST['transaccion'];
$accion=@$_REQUEST['accion'];
$formulario=new Forms($transaccion);
echo($formulario->apertura());
//Campos
$campo['asunto']="";
$campo['servicio']=$servicios->combo("servicio".$transaccion,@$_REQUEST['servicios']);
$campo['categoria']=$categorias->combo("categoria".$transaccion,@$_REQUEST['categorias']);
$campo['causal']=$causales->combo("causal".$transaccion,@$_REQUEST['causales'],"01","04");
$campo['consultar']="<input name=\"consultar".$transaccion."\"   id=\"consultar".$transaccion."\"  type=\"button\" value=\"Consultar\"/>";
?>
<style>
  #complementos{padding: 0px;}
  #complementos p{font-size: 14px; line-height: 12px; }
  #complementos .numero{font-size: 50px; line-height: 36px; color:  #375D81; text-align:  right;font-weight:  bold; padding: 10px; background-color: #f2f2f2;}
  #complementos .critico{font-size: 50px; line-height: 36px; color: red; text-align:  right;font-weight:  bold; padding: 10px; background-color: #f2f2f2;}
  #complementos h2{font-size: 14px; line-height: 12px;  text-align:  center; padding: 5px; background-color: #cccccc;}

  #encabezado{font-size: 14px;background-color: #DADADA;width:100%;}
  #divFormulario{font-family: ''Arial''; position:  relative; width: 100%; }
  #divFormulario   h2{display: block;font-size: 14px;font-weight: bold;height: 14px;line-height: 14px;margin-top: 5px;padding-left: 5px;text-align: left;}
  #divFormulario  .titular{  font-family:  Tahoma, Arial; font-size: 12px; font-style: bold; width: 100%; height: 18px; background-color: #EEEEEE}
  #divFormulario  p{  font-size: 14px ; line-height: 13px ; padding-bottom: 10px;}
  #divFormulario .row {display:table; width:100%;}
  #divFormulario .cell  {display:table-cell;vertical-align:top;padding:2px;border-collapse: collapse;   border-spacing: 0; background-color: #eeeeee; padding: 4px; border: 1px solid #F6F7F8;}
  #divFormulario  input{ font-family:   Arial; font-size:16px; height: 20px !important;padding: 0px; width: 100%;border:1px solid #cccccc;}
  #divFormulario select{   border: 1px solid #CCCCCC;    font-size: 16px;    height: 22px;    padding: 0;    width: 100%;}
  .validation-passed { background-color:  lightgreen !important;  } /* campo valido */
  .validation-failed { border-color: red; } /* campo invalido */
  .validation-advice {     color: #FFFFFF;    font-family: Tahoma;    font-size: 11px;    line-height: 11px; } /* mensaje de error */
  .overTxtLabel{color: #cccccc;}
</style>
<div id="divFormulario">
  <h2>Asuntos</h2>

  <div class="row">
    <div class="cell" style=""><div class="titular">Servicio: </div><?php echo($campo['servicio']); ?></div>
  </div>
  <div class="row">
    <div class="cell" style=""><div class="titular">Categorías: </div><?php echo($campo['categoria']); ?></div>
  </div>

  <div class="row">
    <div id="cellCausal<?php echo($transaccion); ?>" class="cell" style="">
      <div class="titular">Causal: </div>
      <div id="divCausal<?php echo($transaccion); ?>"><?php echo($campo['causal']); ?></div>
    </div>
  </div>


  <div class="row">
    <?php echo($campo['consultar']); ?></div>
</div>
</div>
<?php echo($formulario->cierre()); ?>
<script type="text/javascript">
  if ($('servicio<?php echo($transaccion); ?>')) {
    $('servicio<?php echo($transaccion); ?>').addEvent('change', function(e) {
      actualizacion_causal<?php echo($transaccion); ?>();
    });
  }

  if ($('categoria<?php echo($transaccion); ?>')) {
    $('categoria<?php echo($transaccion); ?>').addEvent('change', function(e) {
      actualizacion_causal<?php echo($transaccion); ?>();
    });
  }
  function actualizacion_causal<?php echo($transaccion); ?>() {
    var servicio = $('servicio<?php echo($transaccion); ?>').getElement(':selected').value;
    var categoria = $('categoria<?php echo($transaccion); ?>').getElement(':selected').value;
    $("divCausal<?php echo($transaccion); ?>").empty();
    if (categoria != "01" && categoria != "04") {
      $("cellCausal<?php echo($transaccion); ?>").hide();
    } else {
      $("cellCausal<?php echo($transaccion); ?>").show();
    }

    var parametros = {'servicio': servicio, 'categoria': categoria};
    var datos = JSON.encode(parametros);
    new Request.JSON({
      url: 'modulos/solicitudes/consultas/jsons/causales.json.php',
      data: "datos=" + datos,
      requestOptions: {
        spinnerOptions: {
          message: 'Actualizando Causales...'
        }
      },
      onRequest: function() {
        $('spinner').show();
        if ($('<?php echo($formulario->interno ); ?>') && MUI.options.standardEffects == true) {
          $('<?php echo($formulario->interno ); ?>').setStyle('opacity', 1).get('morph').start({'opacity': 0});
        }
        MUI.Notificacion("Actualizando...");
      },
      onComplete: function(djson) {
        $('spinner').hide();
        if ($('<?php echo($formulario->interno ); ?>') && MUI.options.standardEffects == true) {
          $('<?php echo($formulario->interno ); ?>').setStyle('opacity', 0).get('morph').start({'opacity': 1});
        }


        var objeto = djson.objeto;
        var dhtml = djson.html;
        new Element('div', {html: dhtml}).inject('divCausal<?php echo($transaccion); ?>', 'top');
      }
    }).send();
  }



  if ($('consultar<?php echo($transaccion); ?>')) {



    $('consultar<?php echo($transaccion); ?>').addEvent('click', function(e) {
      var servicio = $('servicio<?php echo($transaccion); ?>').getElement(':selected').value;
      var categoria = $('categoria<?php echo($transaccion); ?>').getElement(':selected').value;
      var causal = "";
      if ($('causal<?php echo($transaccion); ?>')) {
        causal = $('causal<?php echo($transaccion); ?>').getElement(':selected').value;
      }
      //alert(servicio + categoria + causal);
      MUI.Distribucion_Configuracion_Asuntos(servicio, categoria, causal);
    });
  }




























</script>