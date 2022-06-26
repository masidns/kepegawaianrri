<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PasanganModel;
use App\Models\PegawaiModel;

class Pasangan extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->pegawai = new PegawaiModel();
        $this->pasangan = new PasanganModel();
    }

    public function insert_pasangan($idpegawai)
    {
        # code...
        $data = [
            'pegawai' => $this->pegawai->getpegawai($idpegawai),
            'pasangan' => $this->pasangan->getpasangan(),
            'validation' => \Config\Services::validation(),

        ];
        return view('admin/pasangan/insert', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'nama_pasangan' => [
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama Pasaangan tidak boleh kosong'
                ]
            ]
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan!');
            return redirect()->back()->withInput();
        };


        $this->pasangan->save([
            'nama_pasangan' => $this->request->getVar('nama_pasangan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'tanggallahir' => $this->request->getVar('tanggallahir'),
            'tempatlahir' => $this->request->getVar('tempatlahir'),
            'tanggal_nikah' => $this->request->getVar('tanggal_nikah'),
            'pendidikanterakhir' => $this->request->getVar('pendidikanterakhir'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'idpegawai' => $this->request->getVar('idpegawai'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan');
        return redirect()->to('/pegawai');
    }
}
