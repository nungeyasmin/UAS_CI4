<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'layanan';
    protected $primaryKey       = 'id_layanan';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['id_layanan','jenis_layanan'];
  
    protected function hash(array $data) 
    {
        if (!isset($data['data'][''])) {
            
        }
        $data['data'][''] = hash($data['data'][''], PASSWORD_DEFAULT);

        return $data;
    }
}