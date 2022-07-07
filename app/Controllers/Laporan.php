<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;

class Laporan extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->jabatan = new JabatanModel();
        $this->pegawai = new PegawaiModel();
        // session()->set(['active' => 'laporanjabatan']);
    }


    public function index()
    {
        $data = [
            'jabatan' => $this->jabatan->getjabatan(),
            'session' => session()->set(['active' => 'laporanjabatan']),
        ];
        return view('/admin/laporan/jabatan', $data);
    }

    public function printjabatan()
    {
        # code...
        $data = [
            'jabatan' => $this->jabatan->getjabatan(),
        ];
        return view('/admin/laporan/printjabatan', $data);
    }

    public function laporanpegawai()
    {
        # code...

        $agama = $this->request->getVar('agama');

        if ($agama == '') {
            $data = [
                'pegawai' => $this->pegawai->getpegawai(),
                'session' => session()->set(['active' => 'laporanpegawai'])
            ];
        } else {
            $data = [
                'pegawai' => $this->pegawai->getwhere(['agama' => $agama])->getResult(),
                'session' => session()->set(['active' => 'laporanpegawai'])
            ];
        }

        // $data = [
        //     // 'pegawai' => $item,
        //     'session' => session()->set(['active' => 'laporanpegawai'])
        // ];
        // dd($data);
        return view('/admin/laporan/pegawai', $data);
    }

    public function printpegawai()
    {
        # code...
        // echo 'yes';
        $agama = $this->request->getVar('agama');

        if ($agama == '') {
            $data = [
                'pegawai' => $this->pegawai->getpegawai(),
                'session' => session()->set(['active' => 'laporanpegawai'])
            ];
        } else {
            $data = [
                'pegawai' => $this->pegawai->getwhere(['agama' => $agama])->getResult(),
                'session' => session()->set(['active' => 'laporanpegawai'])
            ];
        }
        return view('/admin/laporan/print', $data);
        // dd($_GET['agama']);
    }
}
