<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
        $data = [];
        return view('login/template', $data);
    }
}
