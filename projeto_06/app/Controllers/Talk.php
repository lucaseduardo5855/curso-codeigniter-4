<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Talk extends BaseController
{
    public function word($value1)
    {
        echo "Palavra: $value1";
    }

    public function words($value1, $value2)
    {
        echo "Palavra: $value1 - $value2";
    }

    public function other($value1 = 'Lucas')
    {
        echo "Palavra: $value1";
    }
}
