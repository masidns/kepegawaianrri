<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pegawai';
    protected $primaryKey       = 'idpegawai';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nip',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'alamat',
        'pendidikan_terakhir',
        'status_perkawinan',
        'no_telepon',
        'foto',
        'idjabatan',
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


    public function getpegawai($idpegawai = false)
    {
        # code...
        if ($idpegawai == false) {
            return $this->db->table('pegawai')
                ->orderBy('pegawai.idpegawai', 'DESC')
                ->join('jabatan', 'jabatan.idjabatan = pegawai.idjabatan')
                ->get()->getResult();
        }
        // return $this->db->table('pegawai')
        //     ->join('jabatan', 'jabatan.idjabatan = pegawai.idjabatan', 'LEFT')
        //     ->join('pasangan', 'pasangan.idpegawai = pegawai.idpegawai', 'RIGHT')
        //     ->getWhere(['idpegawai' => $idpegawai])->getRowObject();
        return $this->db->query("
        SELECT
        `pegawai`.*,
        `jabatan`.*,
        `pasangan`.*
      FROM
        `jabatan`
        LEFT JOIN `pegawai` ON `pegawai`.`idjabatan` = `jabatan`.`idjabatan`
        RIGHT JOIN `pasangan` ON `pasangan`.`idpegawai` = `pegawai`.`idpegawai`")->getRowObject();
    }
}
