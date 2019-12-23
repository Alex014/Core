<?php
namespace site\modules;

/**
 * Description of polices
 *
 * @author user
 */
class polices {
    
    public function allowed($param = '') {
        return ($param >= 10) && ($param <= 30);
    }
}
