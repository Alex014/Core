<?php
namespace core;

/**
 * Description of Parser
 *
 * @author user
 */
class ParserPregMultiple implements interfaces\iparser {
    private $routes_list;
    private $show404;
    
    public function __construct($routes_list, $show404 = true) {
        $this->show404 = $show404;
        if(empty($this->routes['404']))
            throw \Exception('Route 404 not found !');
            
        $this->routes_list = $routes_list;
    }
    
    private function _find_route($route) {
        foreach ($this->routes_list as $routes) {
            foreach ($routes['routes'] as $rt => $controller) {
                if($rt == $route) {
                    return $controller;
                }
            }
        }
        
        return false;
    }


    public function getParsedRoute($route, &$params) {
        if(trim($route) == '') {
            $controller = $this->_find_route('default');
            if(empty($controller))
                throw \Exception('Route "default" not found !');
        }
        
        foreach ($this->routes_list as $routes) {
            foreach ($routes['routes'] as $preg => $controller) {
                if(preg_match('/^'.$preg.'$/i', $route, $params)) {
                    return $controller;
                }
            }
        }
        
        if($this->show404) {
            $controller404 = $this->_find_route('404');
            
            if(empty($controller404))
                throw \Exception('Route 404 not found !');
            
            return $controller404;
        }
        else {
            return false;
        }
    }
    
    public function getRoute($route) {
        return $this->routes[$route];
    }
}
