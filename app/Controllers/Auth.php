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
        return view('teste');
    }

    public function logout()
    {

    }
}
