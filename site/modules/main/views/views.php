<center><h1>Views</h1></center>
<div class="row">
  <div class="col-sm"></div>

  <div class="col-lg">
<h3>View</h3>

<p>There are two methods in view class <b>render($template, $params = '')</b> and <b>view($template, $params = '')</b>
for rendering the template content and returning content onto output device</p>
  
<b>Views config</b>
<pre>
&lt;?php
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

<h3>Layout</h3>
The view gets injected in Layout
<pre>
new \site\SiteLayout(_::get('site.viewer'));
</pre>
Then we run
<pre>
    public function about() {
        $this->layout->view('about');
    }
</pre>
from local controller <br>
and we write the view method manualy
<pre>
class SiteLayout extends \core\BaseLayout {
    
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

  </div>

  <div class="col-sm"></div>
</div>