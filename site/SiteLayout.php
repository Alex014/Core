<?php
namespace site;

/**
 * Description of SiteLayout
 *
 * @author user
 */
class SiteLayout extends \core\BaseLayout {
    
    public function view($template, $params = '') {
        if(empty($params))
            $params = array('active' => $template);

        $params['_MENU'] = $this->viewer->render( \_::get('config/views.site.menu') , $params);
        $params['_HEADER'] = $this->viewer->render( \_::get('config/views.site.header') , $params);
        $params['_FOOTER'] = $this->viewer->render( \_::get('config/views.site.footer') , $params);
        $params['_MAIN'] = $this->viewer->render( \_::get('config/views.site.'.$template) , $params);
        
        $this->viewer->view( \_::get('config/views.site.layout') , $params);
    }
}
