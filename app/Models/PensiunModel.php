<?php

namespace App\Models;

use CodeIgniter\Model;

class PensiunModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pensiun';
    protected $primaryKey       = 'idpensiun';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nopensiun',
        'keterangan',
        'tanggal_pensiun',
        'tempat_pensiun',
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

    public function getpensiun($idpensiun = false)
    {
        # code...
        if ($idpensiun == false) {
            return $this->db->table('pensiun')
                ->orderBy('idpensiun', 'DESC')
                ->join('pegawai', 'pegawai.idpegawai = pensiun.idpegawai')
                ->get()->getResult();
        }
        return $this->db->table('pensiun')
            ->join('pegawai', 'pegawai.idpegawai = pensiun.idpegawai')
            ->getWhere(['idpensiun' => $idpensiun])->getRowObject();
    }

    public function getpensiunpegawai($idpensiun = false)
    {
        # code...
        if ($idpensiun == false) {
            return $this->db->query(
                "SELECT
                `pensiun`.*,
                `pegawai`.*
              FROM
                `pensiun`
                RIGHT JOIN `pegawai` ON `pegawai`.`idpegawai` = `pensiun`.`idpegawai`"
            )->getResult();
        }
        return $this->db->table('pensiun')
            ->join('pegawai', 'pegawai.idpegawai = pensiun.idpegawai')
            ->getWhere(['idpensiun' => $idpensiun])->getRowObject();
    }
}
