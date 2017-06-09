<?php
    $this->permisos=new Usuarios_Permisos();
    $this->modulos = new Aplicacion_Modulos();
    $modulo = $this->modulos->crear("006", "Alcantarillado", "Modulo Alcantarillado", "");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-MODULO-A", "Acceso al modulo de distribución.","Permite acceder al modulo comercial", "0000000000");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-INSTALACIONES-A", "Acceso al componente instalaciones.","Permite acceder al modulo comercial", "0000000000");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-INSTALACIONES-R", "Acceso al componente instalaciones.","Permite acceder al modulo comercial", "0000000000");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-INSTALACIONES-W", "Acceso al componente instalaciones.","Permite acceder al modulo comercial", "0000000000");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-INSTALACIONES-U", "Acceso al componente instalaciones.","Permite acceder al modulo comercial", "0000000000");
    $this->permisos->permiso_crear($modulo, "ALCANTARILLADO-INSTALACIONES-D", "Acceso al componente instalaciones.","Permite acceder al modulo comercial", "0000000000");
    ?>