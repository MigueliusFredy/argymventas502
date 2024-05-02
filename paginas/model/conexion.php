<?php
    class Conexion {
        // Atributos
        private $base = "bd_ventas_ds502";
        private $usuario = "root";
        private $clave = "";
        private $servidor = "localhost";

        // Método Conectar
        public function Conectar() {
            // Controlador de errores
            try {
                $cnx = new PDO("mysql:host=$this->servidor; dbname=$this->base;", $this->usuario, $this->clave);
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $cnx;
            }
            catch(PDOException $ex) {
                echo "hubo un error: ".$ex->getMessage();
            }
        }
    }

