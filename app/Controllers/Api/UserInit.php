<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class UserInit extends ResourceController
{
   protected $modelName = 'App\Models\AppModel';
   protected $format    = 'json';

   public function index()
   {
         $cid=12344;
         //$cid = $this->request->getVar('cid');
         //$user_data = $this->model->getUserData($cid);
         
         return $this->respond($cid);
      
   }
}