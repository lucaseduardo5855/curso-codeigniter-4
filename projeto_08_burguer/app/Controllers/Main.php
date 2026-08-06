<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        // home page 
        return view('home');
    }

    public function products() 
    {
        //products page
        return view('products');
    }

    public function where_we_are() 
    {
        //where we are page
        return view('where_we_are');
    }

}
