<?php
    /* TODO: Inicia la sesión (si no está iniciada). */
    $session_start();
    /* TODO: Metodo para establecer la conexión a la base de datos. */
    class Conectar{
        /* TODO: Metodo para establecer la conexión a la base de datos. */
        protected $dbh;
        /* TODO: Metodo para establecer la conexión a la base de datos */
        protected function conexion(){
            try{
                /* TODO: intenta establecer la conexión utilizando PDO */
                $conectar = $this->dbh = new PDO("mysql:host=localhost;port=3307;dbname=mesadepartes", "root", "");
                return $conectar;
            }catch(Exception $e){
                /* TODO: En caso de error, imprime un mensaje y termina el script. */
                print "Error BD:" . $e->getMessage() . "<br>";
                die();
            }         
        }
        /* TODO: Metodo para establecer el juego decaracteres a utf-8 */
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        /* TODO: Metodo estatico que devuelve la ruta base del proyecto */
        public static function ruta(){
            return "http://localhost/PERSONAL_MesadePartes/";
        }
    }
?>