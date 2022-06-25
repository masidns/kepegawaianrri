<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;
use App\Models\PensiunModel;

class Pensiun extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->pensiun = new PensiunModel();
        $this->pegawai = new PegawaiModel();
    }


    public function index()
    {
        //
        $data = [
            'pensiun' => $this->pensiun->getpensiun(),
            'pegawai' => $this->pegawai->getpegawai(),
            'pegawaipensiun' => $this->pensiun->getpensiunpegawai(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data['pegawai']);
        return view('admin/pensiun/index', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'nopensiun' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'No Pensiun tidak boleh kosong.'
                ]
            ],
            'tanggal_pensiun' => [
                'rules'    => 'valid_date',
                'errors'    => [
                    'valid_date'    => 'No Pensiun tidak boleh kosong.'
                ]
            ],
            'tempat_pensiun' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Tempat Pensiun tidak boleh kosong.'
                ]
            ],
            'keterangan' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Keterangan tidak boleh kosong.'
                ]
            ],
            'idpegawai' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Nama Pegawai tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan!');
            return redirect()->back()->withInput();
        }



        $this->pensiun->save([
            'nopensiun' => $this->request->getVar('nopensiun'),
            'idpegawai' => $this->request->getVar('idpegawai'),
            'tanggal_pensiun' => $this->request->getVar('tanggal_pensiun'),
            'tempat_pensiun' => $this->request->getVar('tempat_pensiun'),
            'keterangan' => $this->request->getVar('keterangan'),
        ]);
        // dd($save);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan.');
        return redirect()->to('pensiun');
    }
}