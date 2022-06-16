<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{


    public function __construct()
    {
        //Do your magic here
        $this->auth = new AuthModel();
    }


    public function index()
    {
        //
        // $data = [];
        if (session()->get('login') == true) {
            // return
        } else {
            $user = $this->auth->findall();
            if (empty($user)) {
                $data = [
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => password_hash('Admin123', PASSWORD_DEFAULT),
                ];
                $this->auth->insert($data);
            }
            return view('login/singin');
        }
        // dd($this->auth->findall());
    }
}
