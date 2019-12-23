<?php
namespace site\modules\main;

/**
 * Description of menu
 *
 * @author user
 */
class menu {
    
    public function allowed($param = '') {
        $this->layout->view('allowed', ['param' => $param]);
    }
    
    public function about() {
        $this->layout->view('about');
    }
    
    public function structure() {
        $this->layout->view('structure');
    }
    
    public function di() {
        $this->layout->view('di');
    }
    
    public function routes() {
        $this->layout->view('routes');
    }
    
    public function views() {
        $this->layout->view('views');
    }
    
    public function controllers() {
        $this->layout->view('controllers');
    }
}