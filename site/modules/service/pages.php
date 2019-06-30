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
        $this->layout->view('404');
    }
}
