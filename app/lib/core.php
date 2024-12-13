<?php
class Core
{
        protected $controller = 'Home'; // Controlador predeterminado
        protected $method = 'index';    // Método predeterminado
        protected $parameters = [];    // Parámetros de la URL
    
        public function __construct()
        {
            $url = $this->getUrl();
    
            // Verificar si el controlador existe
            if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                $this->controller = ucwords($url[0]); // Establecer controlador
                unset($url[0]);
            }
    
            // Incluir el archivo del controlador
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
    
            // Verificar si el método existe
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1]; // Establecer método
                unset($url[1]);
            }
    
            // Obtener los parámetros restantes
            $this->parameters = $url ? array_values($url) : [];
    
            // Llamar al método con los parámetros
            call_user_func_array([$this->controller, $this->method], $this->parameters);
        }
    
        // Obtener y procesar la URL
        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/'); // Eliminar barra final
                $url = filter_var($url, FILTER_SANITIZE_URL); // Filtrar URL
                $url = explode('/', $url); // Dividir en partes
                return $url;
            }
            return [];
        }
    }

?>