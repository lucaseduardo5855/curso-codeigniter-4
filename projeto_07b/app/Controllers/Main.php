<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // HomePage
        echo view('html_header');
        echo view('nav');
        echo view('home');
        echo view('html_footer');
    }
    
    public function about()
    {
        // About
        echo view('html_header');
        echo view('nav');
        echo view('about');
        echo view('html_footer');
    }

        public function services()
    {
        // Services
        echo view('html_header');
        echo view('nav');
        echo view('services');
        echo view('html_footer');
    }

}
