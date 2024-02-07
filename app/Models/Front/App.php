<?php

namespace App\Models\Front;

use CodeIgniter\Model;

class App extends Model
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

   public function getAssessmentData($cid)
   {
      $sql = 'SELECT * FROM company_list WHERE cid = ?';
      $query   = $this->db->query($sql,[$cid]);
      $row = $query->getRowArray();

      if ($row != NULL && count($row) != 0)
      {
         return $row;
      } else {
         return FALSE;
      }
   }

   public function getUserAssessmentData($cid, $uid)
   {
      $sql = 'SELECT * FROM user_entries WHERE cid = ? AND uid = ?';
      $query   = $this->db->query($sql,[$cid, $uid]);
      $urow = $query->getRowArray();

      if ($urow != NULL && count($urow) != 0)
      {
         return $urow;
      } else {
         return FALSE;
      }
   }

   public function userCheck($uid)
   {
      $sql = 'SELECT id FROM user_entries WHERE uid = ?';
      $query   = $this->db->query($sql,[$uid]);
      $urow = $query->getRowArray();

      if ($urow != NULL && count($urow) != 0)
      {
         return TRUE;
      } else {
         return FALSE;
      }
   }
}
