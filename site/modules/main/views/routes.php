<center><h1>Routes</h1></center>

<div class="row">
  <div class="col-sm"></div>

  <div class="col-lg">
      <pre>
&lt;?php
return [
    'routes' => [
        'about' => '\site\modules\main\menu\about',
        'structure' => '\site\modules\main\menu\structure',
        'di' => '\site\modules\main\menu\di',
        'routes' => '\site\modules\main\menu\routes',
        'views' => '\site\modules\main\menu\views',
        'controllers' => '\site\modules\main\menu\controllers',
            'allowed\/(\d+)' => ['\site\modules\polices\allowed','\site\modules\menu\allowed']
    ],
    '404' => '\site\modules\service\pages\page404',
    'default' => '\site\modules\main\menu\about'
];
      </pre>
      <ul>
        <li>'about' - path</li>
        <li>\site\modules\main\menu - classpath (\site\modules\main\menu())</li>
        <li>\about - method ->about()</li>
        <li>\access-control => [access1,access2, ..., controller] - run controller if all access controllers return true</li>
      </ul>
    </div>

  <div class="col-sm"></div>
</div>