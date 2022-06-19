<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pegawai extends BaseController
{
    public function index()
    {
        //
        return view('admin/pegawai/index');
    }

    public function insert()
    {
        # code...
        return view('admin/pegawai/insert');
    }
}