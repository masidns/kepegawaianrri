<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Jabatan extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->jabatan = new JabatanModel();
    }


    public function index()
    {
        //
        $data = [
            'jabatan' => $this->jabatan->getJabatan(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/jabatan/index', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'nama_jabatan' => [
                'rules' => 'required|is_unique[jabatan.nama_jabatan]',
                'errors' => [
                    'required' => 'Jabatan tidak boleh kosong!',
                    'is_unique' => 'Nama Jabatan sudah ada!',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan');
            return redirect()->back()->withInput();
        }

        $this->jabatan->save([
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan');
        return redirect()->back();
    }

    public function update($idjabatan)
    {
        # code...
        $namalama = $this->request->getVar('nama_jabatan_lama');
        if ($namalama == $this->request->getVar('nama_jabatan')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[jabatan.nama_jabatan]';
        }

        if (!$this->validate([
            'nama_jabatan' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Jabatan tidak boleh kosong!',
                    'is_unique' => 'Nama Jabatan sudah ada!',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan');
            return redirect()->back()->withInput();
        }

        $this->jabatan->save([
            'idjabatan' => $idjabatan,
            'nama_jabatan' => $this->request->getVar('nama_jabatan'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan');
        return redirect()->back();
    }
}
