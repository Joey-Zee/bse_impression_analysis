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

   /**
    * undocumented function summary
    *
    * Undocumented function long description
    *
    * @param Int $list_id (Optional)
    * @return type
    * @throws conditon
    **/
   public function getKeywordList(Int $list_id = 12345) : array
   {
      $sql = 'SELECT keyword FROM 360_keywords WHERE list_id = ?';
      $query   = $this->db->query($sql,[$list_id]);
      $kw_row = $query->getRowArray();

      if ($kw_row != NULL && count($kw_row) != 0)
      {
         return $kw_row;
      }
      else
      {
         return FALSE;
      }
   }
}
