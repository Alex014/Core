<?php
namespace core;

/**
 * Description of RouterGet
 *
 * @author user
 */
class RouterGet implements interfaces\irouter {
    public function __construct() {
        //...
    }
    
    public function getRouteString() {
        foreach ($_GET as $key => $value) {
            return $key;
        }
    }
}
