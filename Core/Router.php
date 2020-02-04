<?php

namespace Core;
class Router {
    private $uri;
    private $controller;
    private $action;
    
    public function __construct() {
        $uri = $_SERVER["REQUEST_URI"];
        $base = "/mvc-exemplo";
        $route = str_replace($base,"",$uri);
        $this->uri = $route;
        $this->redirectController();
        $this->loadController();
        
        
    }
    
    protected function redirectController(){
        switch ($this->uri){
            case "/":
                $this->controller = "Index";
                $this->action = "Index";
            break;
            case "/clientes":
                $this->controller = "Clientes";
                $this->action = "Index";
            break;
            case "/clientes/lista":
                $this->controller = "Clientes";
                $this->action = "Lista";
            break;
            case "/clientes/create":
                $this->controller = "Clientes";
                $this->action = "Create";
            break;
            default:
                $this->controller = "Index";
                $this->action = "Error";
        }
    }
    
    protected function loadController(){
        $cont = "Controller\\".$this->controller."Controller";
        $controller = new $cont();
        $action = $this->action."Action";
        $controller->$action();
        
    }
}
