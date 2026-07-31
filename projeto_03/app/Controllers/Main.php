<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo "index";
    }

    public function pagina_1()
    {
        echo "pagina 1";
    }

       public function pagina_2()
    {
        echo "pagina 2";
    }
    
}

