<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo "Estou no index";
    }

    // public function falar($palavra)
    // {
    //     echo "Estou falando: $palavra";
    // }

    public function ph_any($valor1, $valor2)
    {
        echo $valor1;
        echo "<br>";
        echo $valor2;
    }
    
    public function ph_segment($valor1)
    {
        echo "Estou no ph_segment: $valor1";
    }

    public function ph_num($valor1, $valor2, $valor3)
    {
        echo $valor1;
        echo "<br>";
        echo $valor2;
        echo "<br>";
        echo $valor3;
    }

    public function ph_alpha($valor1, $valor2)
    {
        echo $valor1;
        echo "<br>";
        echo $valor2;
    }

    public function ph_alphanum($valor1, $valor2)
    {
        echo "estou usando alphanum: $valor1";
        echo "estou usando alphanum: $valor2";
    }

    public function users_post($valor1, $valor2)
    {
        echo "estou usando o $valor1 ";
        echo "estou usando o $valor2 ";
    }
}
