<?php
namespace core;

/**
 * Description of Parser
 *
 * @author user
 */
class ParserPreg implements interfaces\iparser {
    private $routes;
    private $show404;
    
    public function __construct($routes, $show404 = true) {
        $this->routes = $routes;
        $this->show404 = $show404;
    }
    
    public function getParsedRoute($route, &$params) {
        if(trim($route) == '') {
            if(empty($this->routes['default']))
                throw \Exception('Route "default" not found !');
            else
                return $this->routes['default'];
        }
        
        foreach ($this->routes['routes'] as $preg => $controller) {
            if(preg_match('/^'.$preg.'$/i', $route, $params)) {
                return $controller;
            }
        }
        
        if($this->show404)
            if(empty($this->routes['404']))
                throw \Exception('Route 404 not found !');


        if($this->show404)
            return $this->routes['404'];
        else
            return false;
    }
    
    public function getRoute($route) {
        return $this->routes[$route];
    }
}
