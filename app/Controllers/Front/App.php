<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class App extends BaseController
{
    protected $css = array();
    protected $js = array();
    protected $appModel = NULL;
    protected $request = NULL;
    
    public $cid;
    public $uid;

    public function __construct()
    {
        helper(['html','cookie']);
        $this->css = [
            'lib/bootstrap/css/bootstrap.min.css',
            'lib/splide/dist/css/splide-core.min.css',
            'lib/uicons-regular-rounded/css/uicons-regular-rounded.css',
            'lib/hk-grotesk/hk-grotesk.css',
            'css/mainapp.css'
        ];
        
        $this->js = [
            'lib/jquery.min.js',
            'lib/bootstrap/js/bootstrap.min.js',
            'lib/splide/dist/js/splide.min.js',
            'js/mainapp.js'
        ];

        $this->appModel = model('App\Models\Front\AppModel');
        $this->request = \Config\Services::request();

    }

    public function nogo()
    {
        $data['error_message'] ='<span class="h5">Assessment not found. Please use the link provided to you.</span>';
        return view('errors/html/nogo', $data);

    }

    public function index($cid = NULL)
    {
        // Assets
        $data['styles'] = $this->css;
        $data['scripts'] = $this->js;

        // Info
        $data['title'] = 'Welcome';
        $data['noindex'] = TRUE;

        // Keywords list
        $data['keywords_list'] = $this->appModel->getKeywordList();

        // User Data
        $data['udata'] = $this->appModel->getUserData(intval($cid));

        // Views
        $data['page_content'] = 'Front/main_app';
        return view('Front/Partials/page_template', $data);
    }
}
