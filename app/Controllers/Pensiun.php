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
        // dd($data['pegawaipensiun']);
        return view('admin/pensiun/index', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'nopensiun' => [
                'rules'    => 'required|is_unique[pensiun.nopensiun]',
                'errors'    => [
                    'required'    => 'No Pensiun tidak boleh kosong.',
                    'is_unique'    => 'No Pensiun tidak boleh sama.',
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
                'rules'    => 'required|is_unique[pensiun.idpegawai]',
                'errors'    => [
                    'required'    => 'Nama Pegawai tidak boleh kosong.',
                    'is_unique'    => 'Pegawai sudah pensiun.',
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
    public function update($idpensiun)
    {
        # code...
        $idpegawai = $this->request->getVar('idpegawai');
        $nopensiun = $this->request->getVar('nopensiun');
        if ($idpegawai == $this->request->getVar('namalama') && $nopensiun == $this->request->getVar('nopensiunlama')) {
            $rules = 'required';
        } else {
            $rulse = 'required|is_unique[pensiun.nopensiun]';
        }

        if (!$this->validate([
            'nopensiun' => [
                'rules'    => $rules,
                'errors'    => [
                    'required'    => 'No Pensiun tidak boleh kosong.',
                    'is_unique'    => 'No Pensiun tidak boleh sama.',
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
                'rules'    => $rules,
                'errors'    => [
                    'required'    => 'Nama Pegawai tidak boleh kosong.',
                    'is_unique'    => 'Pegawai sudah pensiun.',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan!');
            return redirect()->back()->withInput();
        }



        $this->pensiun->save([
            'idpensiun' => $idpensiun,
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

    public function delete($idpensiun)
    {
        # code...
        // $data = $this->pensiun->getpensiun($idpensiun);
        if ($this->pensiun->getpensiun($idpensiun)) {
            $this->pensiun->delete($idpensiun);
            session()->setFlashdata('pesan', 'Success,Data Berhasil Dihapus');
            return redirect()->to('/pensiun');
        } else {
            session()->setFlashdata('pesan', 'Error,Data Gagal Dihapus');
            return redirect()->to('/pensiun');
        }
    }
}
