<center><h1>Controllers</h1></center>
<div class="row">
  <div class="col-sm"></div>

  <div class="col-lg">
<h3>Front controller</h3>
We run front controller in the begining
<pre>
$site = _::get('site.controller');
//Which equals to 
$site = new \site\SiteController(_::get('site.router'), _::get('site.parser'), _::get('site.layout'));
$site->run();
</pre>
Front controller extends <b>BaseFrontController</b>
<h3>Base Front controller</h3>
<pre>
BaseFrontController($router, $parser, $layout)
</pre>
The <b>router</b>, <b>parser</b>, and <b>layout</b> gets injected in front controller
<h3>Local controller</h3>
Can be any type of class
<pre>
namespace site\modules\main;

class menu {
    
    public function about() {
        $this->layout->view('about');
    }
    
</pre>
  </div>

  <div class="col-sm"></div>
</div>