<?php

class Route 
{
    protected static $routes;

    protected $caminho; 
    protected $controller;
    protected $method;

    protected $profile; 

    public function __construct (string $caminho, string $controller, string $method) {
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->method = $method;
        $this->profile = '';
    }

    public function getCaminho () : string {
        return $this->caminho;
    }

    public function getController () : string {
        return $this->controller;
    }

    public function getMethod () : string {
        return $this->method;
    }

    public function getProfile () : string {
        return $this->profile;
    }

    public static function get (string $caminho, string $controller) : Route {
        if (self::$routes == NULL) { 
            self::$routes = [];
        }
        
        $rota = new Route($caminho, $controller, 'GET');
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function post (string $caminho, string $controller) : Route {
        if (self::$routes == NULL) { 
            self::$routes = [];
        }
        
        $rota = new Route($caminho, $controller, 'POST');
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function rotear (string $caminho, string $method) {
        
        foreach (self::$routes as $rota) {            
            if ($rota->getCaminho() == $caminho) {
            
                if ($rota->getMethod() == $method) {
                    
                    if ($rota ->getProfile() == '' || $rota ->getProfile() == $_SESSION['tipo']) {
                        include __DIR__ . $rota->getController();
                    exit;
                    
                    } else{
                        echo "Nível de acesso insuficiente";
                    exit;
                    }

                } else {
                    echo "Método inadequado";
                    exit;
                }
                
            }
        }

        echo "Página não encontrada";
        exit;

        
    }

    public function only (string $profile) : Route {
        $this->profile = $profile;
        return $this;
    }   

    public function can (string $valor) : Route {
        return $this;
    }

}
