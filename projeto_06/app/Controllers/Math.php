<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Math extends BaseController
{
    //soma
  public function add($value1, $value2)
  {
    echo "$value1 + $value2 = ". $value1 + $value2;
  }

  //subtração
  public function sub($value1, $value2)
  {
    echo "$value1 - $value2 = ". $value1 - $value2;
  }

  //multiplicação
  public function multi($value1, $value2)
  {
    echo "$value1 x $value2 = ". $value1 * $value2;
  }

  //divisão
  public function divide($value1, $value2)
  {
    echo "$value1 : $value2 = ". $value1 / $value2;
  }
 
}
