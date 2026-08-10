<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login_frm()
    {
        return view('login_frm');
    }

    public function login_frm_new() 
    {
        return view('login/inc/login_frm_header')
             .view('login/login_frm')
             .view('login/inc/login_frm_footer');
    }
}
