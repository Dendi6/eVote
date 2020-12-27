<?php

namespace App\Models;

use CodeIgniter\Model;

class VoteModel extends Model
{
    protected $table      = 'vote';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nik', 'nama', 'pilihan'];

    protected $useTimestamps = true;
}
