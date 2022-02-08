<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table      = 'orang';
    protected $useTimestamps = true;


    public function search($keyword)
    {
        return $this->table('orang')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
