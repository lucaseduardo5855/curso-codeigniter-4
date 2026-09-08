<?php

namespace App\Controllers;

use App\Models\RestaurantModel;

class Auth extends BaseController
{
    public function login()
    {
        // load restaurants
        $restaurantes_model = new RestaurantModel();
        $restaurantes = $restaurantes_model->select('id, name')->findAll();
        $data['restaurantes'] = $restaurantes;

        return view('auth/login.frm.php', $data);
    }

    public function login_submit()
    {
        //mostrar id restaurante
        $restaurante_id = Decrypt($this->request->getPost('select_restaurant'));
        echo($restaurante_id);
    }

    public function logout()
    {
        echo 'logout';
    }
}
