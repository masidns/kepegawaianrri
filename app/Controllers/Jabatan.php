<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Jabatan extends BaseController
{
    public function index()
    {
        //
        return view('admin/jabatan/index');
    }
}