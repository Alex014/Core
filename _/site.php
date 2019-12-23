<?php
use core\framework\_;

use core\framework\RouterGet;
use core\framework\ParserPreg;
use core\framework\Viewer;
use core\framework\Polices;

use site\SiteLayout;
use site\SiteController;

return [
    'router' => function() {
        return new RouterGet();
    },
    'parser' => function() {
        return new ParserPreg(_::get('config/routes'));
    },
    'viewer' => function() {
        return new Viewer();
    },
    'layout' => function() {
        return new SiteLayout(_::get('site.viewer'));
    },
    'controller' => function() {
        return new SiteController(_::get('site.router'), _::get('site.parser'), _::get('site.layout'));
    }
];