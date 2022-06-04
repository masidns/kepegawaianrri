<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testing extends BaseController
{
    public function index()
    {
        //
        $data = [];
        return view('layout/template', $data);
    }
}