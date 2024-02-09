<?php

namespace App\Models\Front;

use CodeIgniter\Model;

class AppModel extends Model
{
    protected bool $allowEmptyInserts = false;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected $db;

   public function __construct()
   {
      $this->db = $db = \Config\Database::connect();   
   }

   public function userCheck($uid)
   {
      $sql = 'SELECT id FROM users WHERE uid = ?';
      $query   = $this->db->query($sql,[$uid]);
      $urow = $query->getRowArray();

      if ($urow != NULL && count($urow) != 0)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
   }
}
