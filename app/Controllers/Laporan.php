<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Laporan extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->jabatan = new JabatanModel();
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
}
