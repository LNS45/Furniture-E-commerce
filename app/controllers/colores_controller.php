

<?php
    require_once "./models/colores_model.php";
    class ColoresController {
        private $colorModel;
    
        public function __construct() {
            $this->colorModel = new Colores_model();
        }
    
        public function listarColores() {
            try {
                $colores = $this->colorModel->obtenerColores();
                return $colores;
            } catch(Exception $e) {
                // Manejo de errores
                return ['error' => $e->getMessage()];
            }
        }
    }

?>