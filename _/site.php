<?php
return [
    'router' => function() {
        return new \core\RouterGet();
    },
    'parser' => function() {
        return new \core\ParserPregMultiple([_::get('config/routes')]);
    },
    'viewer' => function() {
        return new \core\Viewer();
    },
    'layout' => function() {
        return new \site\SiteLayout(_::get('site.viewer'));
    },
    'controller' => function() {
        return new \site\SiteController(_::get('site.router'), _::get('site.parser'), _::get('site.layout'));
    }
];