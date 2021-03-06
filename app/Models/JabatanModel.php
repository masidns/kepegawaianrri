<?php

namespace App\Models;

use App\Controllers\Pegawai;
use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jabatan';
    protected $primaryKey       = 'idjabatan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_jabatan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

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

    public function getjabatan($idjabatan = false)
    {
        # code...
        if ($idjabatan == false) {
            return $this->db->table('jabatan')

                ->get()->getResult();
        }
        return $this->db->table('jabatan')
            ->join('pegawai', 'pegawai.idjabatan = jabatan.idjabatan', 'LEFT')
            ->getWhere(['idjabatan' => $idjabatan])->getRowObject();
    }
}
