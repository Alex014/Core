<?php
namespace core;

/**
 * Description of Viewer
 *
 * @author user
 */
class Viewer implements interfaces\iviewer {
    
    public function __construct() {
        \_::set('_objects.view', $this);
    }
    
    public function view($template, $params = '') {
        if(!empty($params))
            extract($params);
       
        require __DIR__.'/../'.$template.'.php';
    }
    
    public function render($template, $params = '') {
        if(!empty($params))
            extract($params);
        
        ob_start();
        require __DIR__.'/../'.$template.'.php';
        $contents = ob_get_contents();
        ob_clean();
        
        return $contents;
    }
}
