<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{


    public function __construct()
    {
        // parent::__construct();
        //Do your magic here
        $this->home = new HomeModel();
        session()->set(['active' => 'home']);
    }


    public function index()
    {
        $data = [
            'pegawai' => $this->home->totalpegawai(),
            'mutasi' => $this->home->totalmutasi(),
            'pensiun' => $this->home->totalpensiun(),
            'jabatan' => $this->home->totaljabatan(),
        ];
        return view('admin/home/index', $data);
    }
}
