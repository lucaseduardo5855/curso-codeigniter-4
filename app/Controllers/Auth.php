<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login.frm.php');
    }

    public function login_submit()
    {
       echo 'login submit';
    }

    public function logout()
    {
        echo 'logout';
    }
}
