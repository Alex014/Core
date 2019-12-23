<center><h1>Structure</h1></center>

<div class="row">
  <div class="col-sm"></div>

    <div class="col-lg">

<h3>Folders</h3>

<pre>
    |-[_]
        |-[config]
        |-[user-dolder-1]
        |-[user-dolder-2]
        |........
    |-[public]
        |-index.php
        |........
    |-[vendor]
</pre>

<h3>Main file (index.php)</h3>

<b>Minimal framework configuration</b>
<pre>
&lt;?php
require __DIR__.'/core/_.php';
_::autoload(); //Autoloading classes
</pre>

<b>Composer configuration</b>

<pre>
&lt;?php
    require dirname(__DIR__).'/vendor/autoload.php';
    use core\framework\_;
    _::get('site.controller')->run();
</pre>

<b>MVC configuration</b>
<pre>
&lt;?php
require __DIR__.'/core/_.php';

_::autoload(); //Autoloading classes

$site = _::get('site.controller'); //Loading main front controller
$site->run(); //Running main front controller
</pre>

<h3>Autoloading</h3>
\vendor\path\classname() equals /vendor/path/classname.php <br>
example \site\SiteController() equals /site/SiteController.php

<h3>Core clases</h3>
All framework base classes is in [core] folder

<h3>Config path</h3>
[_] is a main config path and [_/config] is a config path used by framework

<br><br><br><br>

    </div>

  <div class="col-sm"></div>
</div>