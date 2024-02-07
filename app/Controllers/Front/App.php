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
            'lib/bootstrap/css/bootstrap.min.css',
            'lib/splide/dist/css/splide-core.min.css',
            'css/mainapp.css'
        ];
        
        $this->js = [
            'lib/jquery.min.js',
            'lib/bootstrap/js/bootstrap.min.js',
            'lib/splide/dist/js/splide.min.js',
            'js/mainapp.js'
        ];
        
        $this->assessment_model = model('App\Models\AssessmentsModel');
        $this->request = \Config\Services::request();

    }

    public function nogo()
    {
        throw new \Exception('<span class="h5">Assessment not found. Please use the link provided to you.</span>');
    }

    public function index($cid)
    {
        // Assets
        $data['styles'] = $this->css;
        $data['scripts'] = $this->js;

        // Info
        $data['title'] = 'Welcome';
        $data['noindex'] = TRUE;

        // Views
        $data['page_content'] = 'Front/main_app';
        return view('Front/Partials/page_template', $data);
    }
}
