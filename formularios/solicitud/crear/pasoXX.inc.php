//\\//\\//\\//\\//\\//\\ Inicio PasoB //\\//\\//\\//\\//\\//\\// Almacenar en la base de datos$pqrs =new PQRS();$valor['solicitud'] = @$_REQUEST['solicitud'];$valor['nombres'] = @$_REQUEST['nombres'];$valor['apellidos'] = @$_REQUEST['apellidos'];$valor['identificacion'] = @$_REQUEST['identificacion'];$valor['telefono'] = @$_REQUEST['telefono'];$valor['movil'] = @$_REQUEST['movil'];$valor['correo'] = @$_REQUEST['correo'];$valor['direccion'] = @$_REQUEST['direccion'];$valor['referencia'] = @$_REQUEST['referencia'];$valor['instalacion'] = @$_REQUEST['instalacion'];$pqrs->solicitudes_crear($valor['solicitud']);$numero = count($valor);$tags = array_keys($valor);$valores = array_values($valor);for ($i = 0; $i < $numero; $i++) {$pqrs->actualizar($valor['solicitud'], $tags[$i], $valores[$i]);}//\\//\\//\\//\\//\\//\\ Fin PasoB //\\//\\//\\//\\//\\//\\