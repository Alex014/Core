<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__.'/core/_.php';

_::autoload(); //Autoloading classes

$site = _::get('site.controller'); //Loading main front controller
$site->run(); //Running main front controller