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
            return view('login/signin');
        }
        // dd($this->auth->findall());
    }

    public function signin()
    {
        # code...
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->auth->where('email', $email)->orwhere('username', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $cekpassword = password_verify($password, $pass);
            if ($cekpassword) {
                $cekdatauser = [
                    'idusers' => $data['idusers'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'login' => true,
                ];
                session()->set($cekdatauser);
                session()->setFlashdata('pesan', 'Success, Anda Berhasil Login');
                return redirect()->to('/home');
            } else {
                session()->setFlashdata('pesan', 'Error,Silahkan cek kembali password anda');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('pesan', 'Error,Silahkan Periksa email anda / username anda');
            return redirect()->back();
        }
    }

    public function logout()
    {
        # code...
        session()->destroy();
        return redirect()->to('/');
    }
}