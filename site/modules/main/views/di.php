<center><h1>DI</h1></center>

<div class="row">
  <div class="col-sm"></div>

    <div class="col-lg">
        
<h3>Base class</h3>
_ or core\framework\_ is a base class which implements <b>Dependency Injection</b> 
        
<h3>Base methods</h3>
    <ul>
        <li>_::get($name) - Return the element $name from the container</li>
        <li>_::set($name, $value) - Create or update the element $name in the container</li>
        <li>_::has($name) OR _::exists($name) - Has the container element ?</li>
    </ul>
           
<h3>Extra methods</h3>

    <ul>
        <li>
            _::create($classname, $params = '') - Create the object from classname and return it. <br>
            <b>$classname</b> - full classpath with namespaces (example: \core\Viewer).  <br>
            <b>$params</b> - parsed to class constructor
        </li>
        <li>_::createAndCall($claspath, $params, $params_create = '') - Create the object from classname and lunch the method.  <br>
            <b>$claspath</b> - full classpath with namespaces and method (example: \site\modules\main\menu\about , where new \site\modules\main\menu() - class and ->about() - method).  <br>
            <b>$params</b> - params parsed to class method.   <br>
            <b>$params_create</b> - params parsed to class constructor
        </li>
    </ul>

    </div>

  <div class="col-sm"></div>
</div>