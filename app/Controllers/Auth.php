<?php

namespace App\Controllers;

use App\Models\RestaurantModel;
use App\Models\UserModel;

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
        $data['select_restaurant'] = session()->getFlashdata('select_restaurant');

        //login errors
        $data['login_error'] = session()->getFlashdata('login_error');

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
            session()->setFlashdata('select_restaurant', Decrypt($this->request->getPost('select_restaurant')));
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        //check login
        $username = $this->request->getPost('text_username');
        $password = $this->request->getPost('text_password');
        $id_restaurant = Decrypt($this->request->getPost('select_restaurant'));

        $user_model = new UserModel();
        $user = $user_model->check_for_login($username, $password, $id_restaurant);

        if (!$user) {
            session()->setFlashdata('select_restaurant', Decrypt($this->request->getPost('select_restaurant')));
            return redirect()->back()->withInput()->with('login_error', 'Usuário ou senha invalido');
        }

        dd($user);
    }

    public function logout()
    {
        echo 'logout';
    }
}
