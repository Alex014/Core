<?php
namespace core;

/**
 * Description of Parser
 *
 * @author user
 */
class ParserPreg implements interfaces\iparser {
    private $routes;
    
    public function __construct($routes) {
        $this->routes = $routes;
    }
    
    public function getParsedRoute($route, &$params) {
        if(trim($route) == '')
            return $this->routes['default'];
        foreach ($this->routes['routes'] as $preg => $controller) {
            if(preg_match('/^'.$preg.'$/i', $route, $params)) {
                return $controller;
            }
        }
        
        return $this->routes['404'];
    }
}
