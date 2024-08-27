<?php
/* TODO: Incluye archivo de configuración de la conexión a la base de datos y la clave de usuario */
    require_once("../config/conexion.php");
    require_once("../models/usuario.php");

    /* TODO: Crea una instancia de la clave Usuario */
    $usuario = new Usuario();

    /* TODO: Utiliza una estructura switch para determinar la operación a realizar segun el valor de $_GET["op"] */
    switch($_GET["op"]){
        
        /* TODO: Si la operación es "registrar" */
        case "registrar";
            /* TODO: Llama al método registrar_usuario de la instancia $usuario con los datos del formulario*/            
            $usuario->registrar_usuario($_POST["usu_nom_ape"],$_POST["usu_correo"],$_POST["usu_pass"]);
        break;
    }

?>