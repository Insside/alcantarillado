<?php $ROOT = (!isset($ROOT)) ? "../../../../" : $ROOT;require_once($ROOT . "librerias/Sesion.class.php");require_once($ROOT . "librerias/MySQL.class.php");require_once($ROOT . "librerias/Cadenas.class.php");require_once($ROOT . "modulos/suscriptores/librerias/Suscriptores.class.php");require_once($ROOT . "modulos/usuarios/librerias/Usuarios.class.php");$usuarios =new Usuarios();$suscriptores =new Suscriptores();$cadenas =new Cadenas();//\\//\\//\\//\\ Inicializando Variables //\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\$page = 1;$perpage = 50;$n = 0;$pagination = false;if (isset($_REQUEST["page"])) { $pagination = true; $page = intval($_REQUEST["page"]); $perpage = intval($_REQUEST["perpage"]); $n = ( $page - 1 ) * $perpage;}if (isset($_REQUEST["buscar"])) { $buscar = $_REQUEST["buscar"]; $buscar = "WHERE((`realizado` IS NOT NULL) AND(`instalacion` LIKE '%" . $buscar . "%' OR `fecha` LIKE '%" . $buscar . "%' OR `hora` LIKE '%" . $buscar . "%' OR `suscriptor` LIKE '%" . $buscar . "%' OR `creador` LIKE '%" . $buscar . "%' OR `orden` LIKE '%" . $buscar . "%')) ";} else { $buscar = "WHERE `realizado` IS NOT NULL ";}// this variables Omnigrid will send only if serverSort option is true//$sorton = @$_REQUEST["sorton"];//$sortby = @$_REQUEST["sortby"];$db =new MySQL(Sesion::getConexion());$sql['sql'] = "SELECT * FROM `alcantarillado_instalaciones` " . $buscar . " ;";//echo($sql['sql']);$consulta = $db->sql_query($sql['sql']);$fila = $db->sql_fetchrow($consulta);$total = $db->sql_numrows();$limit = "";if ($pagination) { $limit = "LIMIT $n, $perpage";}$consulta = $db->sql_query("SELECT * FROM `alcantarillado_instalaciones` " . $buscar . " ORDER BY `instalacion` DESC " . $limit);$ret = array();while ($fila = $db->sql_fetchrow($consulta)) { $creador = $usuarios->consultar($fila['creador']); $suscriptor = $suscriptores->consultar($fila['suscriptor']); $nombre = "<b>" . $cadenas->capitalizar($suscriptor['nombres'] . " " . $suscriptor['apellidos']) . "</b>"; $direccion = $cadenas->capitalizar($suscriptor['direccion']); $telefonos = " Tel:<b>" . $suscriptor['telefonos'] . "</b>"; $conexion = " Conexión: <b>" . $suscriptor['conexion'] . "</b>"; $estado = empty($fila['realizado']) ? "rojo" : "verde"; $fila['estado'] = "<a href=\"#\" title=\"Estado\" onclick=\"MUI.Alcantarillado_Instalacion('" . @$fila['instalacion'] . "');\"><img src=\"imagenes/16x16/" . ($estado) . "-16x16.png\" width=\"16\" height=\"16\"/>"; $fila['conexion'] = "<a href=\"#\" onClick=\"MUI.Notificacion('" . $suscriptor['conexion'] . "');\"><img src=\"imagenes/16x16/" . strtolower($suscriptor['conexion']) . "-16x16.png\"></a>"; $fila['detalles'] = "&nbsp;" . $nombre . " " . $direccion . "" . $telefonos; $fila['fecha'] = "&nbsp;" . $fila['fecha'] . ""; $fila['realizado'] = "&nbsp;" . $fila['realizado'] . ""; $fila['orden'] = "&nbsp;<b>" . $fila['orden'] . "</b>"; $fila['creador'] = "&nbsp;<a href=\"#\" onClick=\"MUI.Notificacion('" . $creador['alias'] . "');\"><img src=\"imagenes/16x16/usuario-16x16.png\"></a>"; $fila['instalacion'] = "&nbsp;<a href=\"#\" title=\"Estado\" onclick=\"MUI.Alcantarillado_Instalacion('" . @$fila['instalacion'] . "');\">" . $fila['instalacion'] . "</a>"; $fila['suscriptor'] = "&nbsp;" . (empty($fila['matricula'])) ? $fila['suscriptor'] : $fila['matricula']; array_push($ret, $fila);}$db->sql_close();echo json_encode(array("page" => $page, "total" => $total, "data" => $ret));?>