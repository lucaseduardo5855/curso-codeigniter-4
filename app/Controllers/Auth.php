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

        //validation errors
        $data['validation_errors'] = session()->getFlashdata('validation_errors');

        return view('auth/login.frm.php', $data);
    }

    public function login_submit()
    {
        $validation = $this->validate([
            'text_username' => [
                'label' => 'Usuário',
                'rules' => 'required|min_length[6]|max_length[16]',
                'erro' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'min_length' => 'O campo {field} deve ter no minimo, {param} caracteres.',
                    'max_length' => 'O campo {field} deve ter no máximo {param} caracteres.'
                ]
            ],
            'text_password' => [
                'label' => 'Senha',
                'rules' => 'required|min_length[6]|max_length[16]',
                'erro' => [
                    'required' => 'O campo {field} é obrigatório.',
                    'min_length' => 'O campo {field} deve ter no minimo, {param} caracteres.',
                    'max_length' => 'O campo {field} deve ter no máximo {param} caracteres.'
                ]
            ],
            'select_restaurant' => [
                'label' => 'Restaurante',
                'rules' => 'required',
                'erro' => [
                    'required' => 'O campo {field} é obrigatório.',
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        echo 'Ok';

        //mostrar id restaurante
        // $restaurante_id = Decrypt($this->request->getPost('select_restaurant'));
        // echo($restaurante_id);
    }

    public function logout()
    {
        echo 'logout';
    }
}
