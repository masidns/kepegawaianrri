<?php

namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'anak';
    protected $primaryKey       = 'idanak';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_anak',
        'tempat_lahir_anak',
        'tanggal_lahir_anak',
        'anakke',
        'status_anak',
        'idpegawai',
    ];

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

    public function getanak($idanak = false)
    {
        # code...
        if ($idanak == false) {
            return $this->db->table('anak')
                ->join('pegawai', 'pegawai.idpegawai = anak.idpegawai')
                ->get()->getResult();
        }
        return $this->db->table('anak')
            ->join('pegawai', 'pegawai.idpegawai = anak.idpegawai')
            ->getWhere(['idanak' => $idanak])->getRowObject();
    }
}
