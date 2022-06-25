<?php

namespace App\Models;

use CodeIgniter\Model;

class MutasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mutasi';
    protected $primaryKey       = 'idmutasi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idpegawai',
        'nomutasi',
        'unit_kerja_lama',
        'unit_kerja_baru',
        'tempat_mutasi',
        'keterangan',
        'tanggal_mutasi',
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

    public function getmutasi($idmutasi = false)
    {
        # code...
        if ($idmutasi == false) {
            return $this->db->table('mutasi')
                ->orderBy('idmutasi', 'DESC')
                ->join('pegawai', 'pegawai.idpegawai = mutasi.idpegawai')
                ->get()->getResult();
        }
        return $this->db->table('mutasi')
            ->join('pegawai', 'pegawai.idpegawai = mutasi.idpegawai')
            ->getWhere(['idmutasi' => $idmutasi])->getRowObject();
    }
}