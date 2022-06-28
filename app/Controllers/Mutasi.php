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
        session()->set(['active' => 'mutasi']);
        $this->mutasi = new MutasiModel();
        $this->pegawai = new PegawaiModel();
    }


    public function index()
    {
        //
        $data = [
            'datamutasi' => $this->mutasi->getmutasi(),
        ];
        // d($data);
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
        if (!$this->validate([
            'nomutasi' => [
                'rules'    => 'required|is_unique[mutasi.nomutasi]',
                'errors'    => [
                    'required'    => 'No Mutasi tidak boleh kosong.',
                    'is_unique'    => 'No Mutasi tidak sudah ada.'
                ]
            ],
            'unit_kerja_lama' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Unit Kerja Lama tidak boleh kosong.'
                ]
            ],
            'unit_kerja_baru' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Unit Kerja baru tidak boleh kosong.'
                ]
            ],
            'tempat_mutasi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Tempat mutasi tidak boleh kosong.'
                ]
            ],
            'tempat_mutasi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Tempat mutasi tidak boleh kosong.'
                ]
            ],
            'tanggal_mutasi' => [
                'rules'    => 'valid_date',
                'errors'    => [
                    'valid_date'    => 'Tanggal mutasi tidak boleh kosong.'
                ]
            ],
            'idpegawai' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Nama Pegawai mutasi tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan');
            return redirect()->back()->withInput();
        }


        # code...
        $this->mutasi->save([
            'nomutasi' => $this->request->getVar('nomutasi'),
            'unit_kerja_lama' => $this->request->getVar('unit_kerja_lama'),
            'unit_kerja_baru' => $this->request->getVar('unit_kerja_baru'),
            'tempat_mutasi' => $this->request->getVar('tempat_mutasi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_mutasi' => $this->request->getVar('tanggal_mutasi'),
            'idpegawai' => $this->request->getVar('idpegawai'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan ');
        return redirect()->to('/mutasi');
    }

    public function update($idmutasi)
    {
        # code...
        $data = [
            'pegawai' => $this->pegawai->getpegawai(),
            'datamutasi' => $this->mutasi->getmutasi($idmutasi),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/mutasi/edit', $data);
    }

    public function updatemutasi($idmutasi)
    {
        # code...
        $ceknomutasi = $this->request->getVar('nomutasi');
        if ($ceknomutasi == $this->request->getVar('nomutasilama')) {
            $rules =  'required';
        } else {
            $rules = 'required|is_unique[mutasi.nomutasi]';
        }

        if (!$this->validate([
            'nomutasi' => [
                'rules'    => $rules,
                'errors'    => [
                    'required'    => 'No Mutasi tidak boleh kosong.',
                    'is_unique'    => 'No Mutasi tidak sudah ada.'
                ]
            ],
            'unit_kerja_lama' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Unit Kerja Lama tidak boleh kosong.'
                ]
            ],
            'unit_kerja_baru' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Unit Kerja baru tidak boleh kosong.'
                ]
            ],
            'tempat_mutasi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Tempat mutasi tidak boleh kosong.'
                ]
            ],
            'tempat_mutasi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Tempat mutasi tidak boleh kosong.'
                ]
            ],
            'tanggal_mutasi' => [
                'rules'    => 'valid_date',
                'errors'    => [
                    'valid_date'    => 'Tanggal mutasi tidak boleh kosong.'
                ]
            ],
            'idpegawai' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Nama Pegawai mutasi tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan');
            return redirect()->back()->withInput();
        }

        $this->mutasi->save([
            'idmutasi' => $idmutasi,
            'nomutasi' => $this->request->getVar('nomutasi'),
            'unit_kerja_lama' => $this->request->getVar('unit_kerja_lama'),
            'unit_kerja_baru' => $this->request->getVar('unit_kerja_baru'),
            'tempat_mutasi' => $this->request->getVar('tempat_mutasi'),
            'keterangan' => $this->request->getVar('keterangan'),
            'tanggal_mutasi' => $this->request->getVar('tanggal_mutasi'),
            'idpegawai' => $this->request->getVar('idpegawai'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan ');
        return redirect()->to('/mutasi');
    }

    public function delete($idmutasi)
    {
        # code...
        if ($this->mutasi->getmutasi($idmutasi)) {
            $this->mutasi->delete($idmutasi);
            session()->setFlashdata('pesan', 'Success,Data berhasil dihapus');
            return redirect()->to('/mutasi');
        } else {
            session()->setFlashdata('pesan', 'Error,Data gagal dihapus');
            return redirect()->to('/mutasi');
        }
        // dd($this->mutasi->getmutasi($idmutasi));
    }
}
