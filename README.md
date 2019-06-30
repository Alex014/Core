# ABOUT

*   It's a minimalist framework build around **Dependency Injection** pattern
*   It can work from one file _.php
*   It also supports autoloading and namespaces

# Structure

### Folders

<pre>   |-[_]
      |-[config]
   |-[core]
      |-_.php
      |........
   |-[user-dolder-1]
   |-[user-dolder-2]
   |........
   |-index.php
</pre>

### Main file (index.php)

**Minimal framework configuration**

<pre><?php
require __DIR__.'/core/_.php';
_::autoload(); //Autoloading classes
</pre>

**MVC configuration**

<pre><?php
require __DIR__.'/core/_.php';

_::autoload(); //Autoloading classes

$site = _::get('site.controller'); //Loading main front controller
$site->run(); //Running main front controller
</pre>

### Autoloading

\vendor\path\classname() equals /vendor/path/classname.php  
example \site\SiteController() equals /site/SiteController.php

### Core clases

All framework base classes is in [core] folder

### Config path

[_] is a main config path and [_/config] is a config path used by framework  

# DI

### Base class

_() or \_() is a base class which implements **Dependency Injection**

### Base methods

*   _::get($name) - Return the element $name from the container
*   _::set($name, $value) - Create or update the element $name in the container
*   _::has($name) OR _::exists($name) - Has the container element ?

### Extra methods

*   _::create($classname, $params = '') - Create the object from classname and return it.  
    **$classname** - full classpath with namespaces (example: \core\Viewer).  
    **$params** - parsed to class constructor
*   _::createAndCall($claspath, $params, $params_create = '') - Create the object from classname and lunch the method.  
    **$claspath** - full classpath with namespaces and method (example: \site\modules\main\menu\about , where new \site\modules\main\menu() - class and ->about() - method).  
    **$params** - params parsed to class method.  
    **$params_create** - params parsed to class constructor

# Routes

<pre><?php
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
    'default' => '\site\modules\main\menu\about'
];
      </pre>

*   'about' - path
*   \site\modules\main\menu - classpath (\site\modules\main\menu())
*   \about - method ->about()

# Controllers

### Front controller

We run front controller in the begining

<pre>$site = _::get('site.controller');
//Which equals to 
$site = new \site\SiteController(_::get('site.router'), _::get('site.parser'), _::get('site.layout'));
$site->run();
</pre>

Front controller extends **BaseFrontController**

### Base Front controller

<pre>BaseFrontController($router, $parser, $layout)
</pre>

The **router**, **parser**, and **layout** gets injected in front controller

### Local controller

Can be any type of class

<pre>namespace site\modules\main;

class menu {

    public function about() {
        $this->layout->view('about');
    }

</pre>

# Views

There are two methods in view class **render($template, $params = '')** and **view($template, $params = '')** for rendering the template content and returning content onto output device

**Views config**

<pre><?php
return [
    'site' => [
        'layout' =>     'site/views/layout',
        'header' =>     'site/views/header',
        'footer' =>     'site/views/footer',
        'menu' =>       'site/views/menu',

        'about' =>       'site/modules/main/views/about',
        'controllers' =>       'site/modules/main/views/controllers',
        'di' =>       'site/modules/main/views/di',
        'routes' =>       'site/modules/main/views/routes',
        'structure' =>       'site/modules/main/views/structure',
        'views' =>       'site/modules/main/views/views',

        '404' => 'site/views/page404'
    ],
];
</pre>

On the right side there are file path of the template

### Layout

The view gets injected in Layout

<pre>new \site\SiteLayout(_::get('site.viewer'));
</pre>

Then we run

<pre>    public function about() {
        $this->layout->view('about');
    }
</pre>

from local controller  
and we write the view method manualy

<pre>class SiteLayout extends \core\BaseLayout {

    public function view($template, $params = '') {
        if(empty($params))
            $params = array();

        $params['_MENU'] = $this->viewer->render( \_::get('config/views.site.menu') , $params);
        $params['_HEADER'] = $this->viewer->render( \_::get('config/views.site.header') , $params);
        $params['_FOOTER'] = $this->viewer->render( \_::get('config/views.site.footer') , $params);
        $params['_MAIN'] = $this->viewer->render( \_::get('config/views.site.'.$template) , $params);

        $this->viewer->view( \_::get('config/views.site.layout') , $params);
    }
}
</pre>