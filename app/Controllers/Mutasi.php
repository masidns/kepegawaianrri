<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MutasiModel;
use App\Models\PegawaiModel;

class Mutasi extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->mutasi = new MutasiModel();
        $this->pegawai = new PegawaiModel();
    }


    public function index()
    {
        //
        $data = [
            'mutasi' => $this->mutasi->getmutasi(),
        ];
        return view('admin/mutasi/index', $data);
    }

    public function create()
    {
        # code...
        $data = [
            'pegawai' => $this->pegawai->getpegawai(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/mutasi/create', $data);
    }

    public function save()
    {
        # code...
        $this->mutasi->save([
            'nomutasi' => $this->request->getVar('nomutasi'),
            'unit_kerja_lama' => $this->request->getVar('unit_kerja_lama'),
            'unit_kerja_baru' => $this->request->getVar('unit_kerja_baru'),
            'tempat_mutasi' => $this->request->getVar('tempat_mutasi'),
            'tangga_mutasi' => $this->request->getVar('tangga_mutasi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'idpegawai' => $this->request->getVar('idpegawai'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan ');
        return redirect()->to('/mutasu');
    }
}
