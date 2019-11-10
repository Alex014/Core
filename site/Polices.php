<?php
namespace site;

use \core\BasePolicesController;

/**
 * Description of Polices
 *
 * @author user
 */
class Polices extends BasePolicesController {
    
    public function access($controller, $params) {
        return true;
    }
    
}
