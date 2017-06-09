<?php
$transaccion=@$_REQUEST['transaccion'];
$servicio=@$_REQUEST['servicio'];
$categoria=@$_REQUEST['categoria'];
$causal=@$_REQUEST['causal'];
$buscar=@$_REQUEST['buscar'];
?><style type="text/css"> #divElementos p {color: #999999;margin: 0 0 5px; } #divElementos a {  font-weight: bold;  color: #3344FF; } #divElementos a:hover {font-weight: bold;color: #6677FF; } .iTip-tip{background-color: #3B5998;padding: 5px 15px;  color: #dddddd;  font-weight: bold;  font-size: 11px;  -moz-border-radius: 3px;  -webkit-border-radius: 3px;  border-radius: 3px; }</style><div id="diviTable" style="width:100%" ></div><script type="text/javascript"> var hlpUsuario = new iTips('#hlpUsuario a.left', {
    position: 'left'
  }
  );
  function filterGrid() {
    iTableAsuntos.filter($('filter').value);
  }
  function clearFilter() {
    iTableAsuntos.clearFilter();
  }
  function onGridSelect(evt) {
    var str = 'row: ' + evt.row + ' indices: ' + evt.indices;
    str += ' id: ' + evt.target.getDataByRow(evt.row).id;
  }
  function AgregarClick() {
    MUI.Distribucion_Configuracion_Asuntos_Crear();
  }
  function buscarClick() {
  }
  var cmu = [{header: '<a href="#" title="Código del Asunto " class="hlpAsunto">Asunto</a>', dataIndex: 'asunto', dataType: 'string', width: 80}, {header: '<a href="#" title="Código del Servicio" class="hlpServicio">S</a>', dataIndex: 'servicio', dataType: 'string', width: 25}, {header: '<a href="#" title="Código de la Categoria " class="hlpCategoria">C</a>', dataIndex: 'categoria', dataType: 'string', width: 25}, {header: '<a href="#" title="Código de la Causal" class="hlpCausal">Ca</a>', dataIndex: 'causal', dataType: 'string', width: 30}, {header: '<a href="#" title="Descripción textual del asunto." class="hlpDescripcion">Descripción</a>', dataIndex: 'descripcion', dataType: 'string', width: 400}, {header: '<a href="#" title="Palabras Claves" class="hlpClaves">Claves</a>', dataIndex: 'claves', dataType: 'string', width: 100}, {header: '<a href="#" title="Fecha de Creación" class="hlpFecha">Fecha</a>', dataIndex: 'fecha', dataType: 'string', width: 75}, {header: '<a href="#" title="Hora de Registro" class="hlpHora">Hora</a>', dataIndex: 'hora', dataType: 'string', width: 60}, {header: '<a href="#" title="Usuario Creador" class="hlpCreador">C</a>', dataIndex: 'creador', dataType: 'date', width: 25}];
          window.addEvent("domready", function() {  //$('buscar').addEvent("click", buscarClick);  //$('filterbt').addEvent("click", filterGrid);  //$('clearfilterbt').addEvent("click", clearFilter);  var iTableAsuntos =new Grid('diviTable', {   columnModel: cmu,   buttons: [    {name: 'Nuevo Asunto', bclass: 'new', onclick: AgregarClick},    {name: 'Buscar', bclass: 'pBuscar', onclick: MUI.Distribucion_Configuracion_Asuntos_Buscar}    //{name: 'Delete', bclass: 'delete', onclick: buscarClick},    //{separator: true},    //{name: 'Duplicate', bclass: 'duplicate', onclick: buscarClick}   ],   url: "modulos/alcantarillado/consultas/jsons/asuntos.json.php?buscar=<?php echo($buscar); ?>&servicio=<?php echo($servicio); ?>&categoria=<?php echo($categoria); ?>&causal=<?php echo($causal); ?>",   perPageOptions: [40, 80, 160, 320, 640],   perPage: 40,   page: 1,   pagination: true,   serverSort: true,   showHeader: true,   alternaterows: true,   sortHeader: false,   resizeColumns: true,   multipleSelection: true,   width: $('central').getSize().x,   height: $('central').getSize().y  });  iTableAsuntos.addEvent('click', onGridSelect);  //var myTips =new Tips('.hlpAsunto');  var itAsunto =new iTips('.hlpAsunto');  var itServicio =new iTips('.hlpServicio');  var itCategoria =new iTips('.hlpCategoria');  var itCausal =new iTips('.hlpCausal');  var itDescripcion =new iTips('.hlpDescripcion');  var itClaves =new iTips('.hlpClaves');  var itFecha =new iTips('.hlpFecha');  var itHora =new iTips('.hlpHora');  var itCreador =new iTips('.hlpCreador');  /**   var itExt=new iTips('#diviTable a', {   content: function() {   return $('htmlcontent');   },   html: true,   center: false,   arrowOffset: 16,   offset: {x: -10}   });   **/ });</script><div id="htmlcontent" style="display: none;"> <p style="overflow: hidden; padding-top: 10px; padding-bottom: 10px; width: 320px; margin: 0;">  <img src="http://i.imgur.com/YRBFe.jpg?1761" style="float: left; margin-right: 10px; width: 64px; height: 64px;">  The Son of Man <i>(Le fils de l'homme)</i> is a 1964 painting  by the Belgian surrealist painter Ren&eacute; Magritte.  Magritte painted it as a self-portrait. <i style="color: #666666;">(from Wikipedia, of course)</i> </p></div>