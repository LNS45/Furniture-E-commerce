

<?php
    require_once '../app/init.php';

    // Configurar rutas básicas
    $controller = new HomeController();
    $controller->index();

?>