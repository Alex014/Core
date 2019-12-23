<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require dirname(__DIR__).'/vendor/autoload.php';

use core\framework\_;

_::get('site.controller')->run();