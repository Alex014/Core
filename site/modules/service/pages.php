<?php
namespace site\modules\service;

/**
 * Description of default
 *
 * @author user
 */
class pages {
    
    public function page404() {
        http_response_code(404);
        $this->layout->viewService('404');
    }
    
    public function page403() {
        http_response_code(403);
        $this->layout->viewService('403');
    }
}
