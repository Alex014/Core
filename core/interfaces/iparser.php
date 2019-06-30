<?php
namespace core\interfaces;

/**
 *
 * @author user
 */
interface iparser {
    public function getParsedRoute($route, &$params);
}
