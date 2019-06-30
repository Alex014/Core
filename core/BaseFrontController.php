<?php
namespace core;

/**
 * Description of FrontController
 *
 * @author user
 */
class BaseFrontController {
    private $router;
    private $parser;
    private $layout;
    
    public $controller;
    public $params;
    
    public function __construct($router, $parser, $layout) {
        $this->router = $router;
        $this->parser = $parser;
        $this->layout = $layout;
    }
    
    public function run() {
        if(method_exists($this, 'beforeRun'))
            $this->beforeRun();
        
        $this->params = array();
        $route = $this->router->getRouteString();
        $this->controller = $this->parser->getParsedRoute($route, $this->params);
        //var_dump($this->controller);
        $result = \_::createAndCall($this->controller, $this->params, array('layout' => $this->layout));
        
        $this->controller_object = \_::$object;
        
        if(method_exists($this, 'afterRun'))
            $this->afterRun();
        
        return $result;
    }
}
