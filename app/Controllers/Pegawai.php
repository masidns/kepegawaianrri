<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{


    public function __construct()
    {
        //Do your magic here
        $this->pegawaimodel = new PegawaiModel();
    }


    public function index()
    {
        //
        $data = [
            'pegawai' => $this->pegawaimodel->getpegawai(),
        ];
        return view('admin/pegawai/index', $data);
    }

    public function insert()
    {
        # code...
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/pegawai/insert', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP tidak boleh kosong'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIP tidak boleh kosong'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin tidak boleh kosong'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir tidak boleh kosong'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal lahir tidak boleh kosong'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'pendidikan_terakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pendidikan terakhir tidak boleh kosong'
                ]
            ],
            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pendidikan terakhir tidak boleh kosong'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pendidikan terakhir tidak boleh kosong'
                ]
            ],
            // 'foto' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Foto terakhir tidak boleh kosong'
            //     ]
            // ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan');
            return redirect()->back()->withInput();
        };

        $this->pegawaimodel->save([
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'agama' => $this->request->getVar('agama'),
            'alamat' => $this->request->getVar('alamat'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'foto' => $this->request->getVar('foto'),
            'idjabatan' => $this->request->getVar('idjabatan'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan');
        return redirect()->to('/pegawai');
    }

    public function detail($idpegawai)
    {
        # code...
        $data = [
            'pegawai' => $this->pegawaimodel->getpegawai($idpegawai),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/pegawai/detail', $data);
    }
}
