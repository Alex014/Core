<?php
namespace site;

use core\framework\_;
use core\framework\BaseLayout;

/**
 * Description of SiteLayout
 *
 * @author user
 */
class SiteLayout extends BaseLayout {
    
    public function view($template, $params = '') {
        if(empty($params)) $params = [];
            
        $params['active'] = $template;
        $params['title'] = 'CORE Framework';

        $params['_MENU'] = $this->viewer->render( _::get('config/views.site.menu') , $params);
        $params['_HEADER'] = $this->viewer->render( _::get('config/views.site.header') , $params);
        $params['_FOOTER'] = $this->viewer->render( _::get('config/views.site.footer') , $params);
        $params['_MAIN'] = $this->viewer->render( _::get('config/views.site.'.$template) , $params);
        
        if(empty($params['_MAIN']))
            throw \Exception('Template "'.$template.'" not found in '.'"config/views.site.'.$template.'"');

        $this->viewer->view( _::get('config/views.site.layout') , $params);
    }
    
    public function viewService($template, $params = '') {
        $params['_MENU'] = '';
        $params['_HEADER'] = $this->viewer->render( _::get('config/views.site.header') , $params);
        $params['_FOOTER'] = $this->viewer->render( _::get('config/views.site.footer') , $params);
        $params['_MAIN'] = $this->viewer->render( _::get('config/views.site.'.$template) , $params);
        
        $this->viewer->view( _::get('config/views.site.layout') , $params);
    }
}
