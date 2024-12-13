

<?php
    require_once "./config/config.php";
    class Colores_model{

        private $db;

        //Constructor para obtener los metodos de la base de datos
        public function __construct(){
            $conexion = new DatabaseConfig();
            $this->db = $conexion->conectar();
        }

        public function obtenerColores(){
            $sql = "SELECT Id_color, nombre, hexadecimal FROM colores";
            $stmt = $this->db->consulta($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insertar($nombre, $hexadecimal) {
            $sql = "INSERT INTO colores (Id_color, nombre, hexadecimal) VALUES (?, ?, ?)";
            //$passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            $parametros = [
                ':nombre' => $nombre,
                ':hexadecimal' => $hexadecimal,
            ];
    
            $this->db->consulta($sql, $parametros);
            return $this->db->lastInsertId();
        }

        public function actualizar($id_color, $nombre, $hexadecimal) {
            $sql = "UPDATE colores SET nombre = :nombre, hexadecimal = :hexadecimal WHERE Id_color = :id_color";
            $parametros = [
                ':Id_color' => $id_color,
                ':nombre' => $nombre,
                ':hexadecimal' => $hexadecimal
            ];
    
            $stmt = $this->db->consulta($sql, $parametros);
            return $stmt->rowCount();
        }
    
        // Método para eliminar un usuario
        public function eliminar($id) {
            $sql = "DELETE FROM usuarios WHERE Id_color = :id";
            $parametros = [':Id_color' => $id];
    
            $stmt = $this->db->consulta($sql, $parametros);
            return $stmt->rowCount();
        }

    }
?>