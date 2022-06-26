<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PasanganModel;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{

    protected $PasanganModel;
    public function __construct()
    {
        //Do your magic here
        $this->pegawaimodel = new PegawaiModel();
        $this->jabatan = new JabatanModel();
        $this->pasangan = new PasanganModel();
    }


    public function index()
    {
        //
        $data = [
            'pegawai' => $this->pegawaimodel->getpegawai(),
            'jabatan' => $this->jabatan->getjabatan(),
        ];
        return view('admin/pegawai/index', $data);
    }

    public function insert()
    {
        # code...
        $data = [
            'jabatan' => $this->jabatan->getjabatan(),
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
                'rules' => 'valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal lahir tidak boleh kosong'
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
                    'required' => 'Status Perkawinan terakhir tidak boleh kosong'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No telepon terakhir tidak boleh kosong'
                ]
            ],
            'idjabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan terakhir tidak boleh kosong'
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

    public function update($idpegawai)
    {
        # code...
        $data = [
            'validation' => \Config\Services::validation(),
            'pegawai' => $this->pegawaimodel->getpegawai($idpegawai),
            'jabatan' => $this->jabatan->getjabatan(),
        ];
        return view('admin/pegawai/edit', $data);
    }

    public function update_data($idpegawai)
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
                'rules' => 'valid_date',
                'errors' => [
                    'valid_date' => 'Tanggal lahir tidak boleh kosong'
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
                    'required' => 'Status Perkawinan terakhir tidak boleh kosong'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No telepon terakhir tidak boleh kosong'
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
            'idpegawai' => $idpegawai,
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
            'pasangan' => $this->pasangan->getpasangan(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/pegawai/detail', $data);
    }
}