
<?php

    define('APP', dirname(dirname(__FILE__)));
    define('URL', 'http://localhost/moody');

    class DatabaseConfig{
        private $host = 'localhost';
        private $usuario = 'root';
        private $password = '';
        private $database = 'moody_studio_db';
        private $conexion;
        //Metodo para Conectar a la base de datos
        public function conectar(){
            try {
                ///Se crea un objeto de tipo PDO con los argumentos dsn(se toma el host y el nombre de la base de datos) y el username y la password
                $this->conexion = new PDO(
                    "mysql:host={$this->host};dbname={$this->database};charset=utf8", 
                    $this->usuario, 
                    $this->password
                );
                
                // Manejador de Errores del PDO
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this;
            } catch(PDOException $e) {
                // Manejo de errores de conexión
                die("Error de conexión: " . $e->getMessage());
            }
        }

        // Metodo para realizar consultas preparadas, recibe la query y los parametros de la query, es decir, las columnas para la consulta
        public function consulta($sql, $parametros = []) {
            try {
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute($parametros);
                return $stmt;
            } catch(PDOException $e) {
                // Manejo de errores en consultas
                throw new Exception("Error en la consulta: " . $e->getMessage());
            }
        }
        //Metodo para cerrar la conexion
        public function cerrar() {
            $this->conexion = null;
        }

    }

        

?>