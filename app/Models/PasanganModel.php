<?php

namespace App\Models;

use CodeIgniter\Model;

class PasanganModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pasangan';
    protected $primaryKey       = 'idpasangan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_pasangan',
        'jenis_kelamin',
        'agama',
        'tanggallahir',
        'tempatlahir',
        'tanggalnikah',
        'pendidikanterakhir',
        'pekerjaan',
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

    public function getpasangan($idpasangan = false)
    {
        # code...
        if ($idpasangan == false) {
            return $this->db->table('pasangan')
                ->orderBy('idpasangan', 'DESC')
                ->join('pegawai', 'pegawai.idpegawai = pasangan.idpegawai')
                ->get()->getResult();
        }
        return $this->db->table('pasangan')
            ->join('pegawai', 'pegawai.idpegawai = pasangan.idpegawai')
            ->get()->getRowObject();
    }
}
