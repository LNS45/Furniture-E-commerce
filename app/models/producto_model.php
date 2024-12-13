

<?php
    class Producto_model{

        private $db;

        //Constructor para obtener los metodos de la base de datos
        public function __construct(){
            $conexion = new DatabaseConfig();
            $this->db = $conexion->conectar();
        }

        public function obtenerProductos(){
            
        }

    }
?>