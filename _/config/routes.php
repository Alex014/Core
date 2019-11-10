<?php
return [
    'routes' => [
        'about' => '\site\modules\main\menu\about',
        'structure' => '\site\modules\main\menu\structure',
        'di' => '\site\modules\main\menu\di',
        'routes' => '\site\modules\main\menu\routes',
        'views' => '\site\modules\main\menu\views',
        'controllers' => '\site\modules\main\menu\controllers'
    ],
    '404' => '\site\modules\service\pages\page404',
    '403' => '\site\modules\service\pages\page403',
    'default' => '\site\modules\main\menu\about'
];