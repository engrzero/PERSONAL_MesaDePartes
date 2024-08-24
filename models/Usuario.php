<?php
/* TODO: Definición de la clase Usuario que se extiende de la clase Conectar */
    class Usuario extends Conectar{

        /* TODO: Metodo para registrar un nuevo usuario en la base de datos */
        public function registrar_usuario($usu_nom_ape,$usu_correo,$usu_pass){
            /* TODO: Obtener la conexion a la base de datos utilizando el metodo de la clase padre */
            $conectar = parent::conexion();   
            /* TODO: Establecer el juego de caracteres a UTF-8 utilizando el metodo de la clase padre */
            parent::set_names();
            /* TODO: Consuta SQL para insertar un nuevo usuario en la base de datos tm_usuario */
            $sql="INSERT INTO tm_usuario 
                (usu_nom_ape, usu_correo, usu_pass)
                VALUES 
                (?,?,?)";
            /* TODO: Preparar la consulta SQL */
            $sql=$conectar->prepare($sql);
            /* TODO: Vincular los valores a los parametros de la consulta */
            $sql->bindValue(1,$usu_nom_ape);
            $sql->bindValue(2,$usu_correo);
            $sql->bindValue(3,$usu_pass);
            /* TODO: Ejecutar la consuta SQL */
            $sql->execute();
        }
    }
?>