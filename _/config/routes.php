<?php
$path_modules = '\site\modules';
$path_modules_main = "$path_modules\\main";
$path_modules_service = "$path_modules\\service";

return [
    'routes' => [
        'about' => "$path_modules_main\\menu\\about",
        'structure' => "$path_modules_main\\menu\\structure",
        'di' => "$path_modules_main\\menu\\di",
        'routes' => "$path_modules_main\\menu\\routes",
        'views' => "$path_modules_main\\menu\\views",
        'controllers' => "$path_modules_main\\menu\\controllers",
        'allowed\/(\d+)' => ["$path_modules\\polices\\allowed","$path_modules_main\\menu\\allowed"]
    ],
    '404' => "$path_modules_service\\pages\\page404",
    '403' => "$path_modules_service\\pages\\page403",
    'default' => "$path_modules_main\\menu\\about"
];