<?php
namespace core\interfaces;

/**
 *
 * @author user
 */
interface icontroller {
    public function route();
    
    public function runController();
    
    public function run();
}
