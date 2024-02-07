<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class App extends BaseController
{
    protected $css = array();
    protected $js = array();
    protected $assessment_model = NULL;
    protected $request = NULL;
    
    public $cid;
    public $uid;

    public function __construct()
    {
        helper(['html','cookie']);
        $this->css = [
            'lib/bootstrap/dist/css/bootstrap.min.css',
            'lib/line-icons/line-icons.css',
            'lib/font-awesome/css/fontawesome-all.min.css',
            'lib/jquery-smart-wizard/dist/css/smart_wizard_all.min.css',
            'css/homepage-style.css'
        ];
        
        $this->js = [
            'lib/jquery/dist/jquery.min.js',
            'js/bootstrap.min.js',
            'lib/sortable/Sortable.min.js',
            'js/sortable.js',
            'lib/jquery-smart-wizard/dist/js/jquery.smartWizard.min.js',
            'js/homepage.js'
        ];

        $this->request = \Config\Services::request();

    }

    public function index()
    {
        // Assets
        $data['styles'] = $this->css;
        $data['scripts'] = $this->js;

        // Info
        $data['title'] = 'Welcome';
        $data['noindex'] = TRUE;

        // Views
        $data['page_content'] = 'front/main_app';
        return view('Front/Partials/page_template', $data);
    }
}
