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

    public function insert($idpegawai)
    {
        # code...
        $data = [
            'pegawai' => $this->pegawai->getpegawai($idpegawai),
            'pasangan' => $this->pasangan->getpasangan(),

        ];
        return view('admin/pasangan/insert', $data);
    }
}