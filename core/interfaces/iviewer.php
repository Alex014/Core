<?php
namespace core\interfaces;

/**
 *
 * @author user
 */
interface iviewer {    
    public function view($template, $params = '');
    public function render($template, $params = '');
}
