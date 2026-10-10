<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_restaurant' => 1,
                'username'      => 'admin_rest1',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Administrador Restaurante 1',
                'email'         => 'admin_rest1@gmail.com',
                'phone'         => '990000101',
                'roles'         => '["admin"]',
                'active'        => 1,
                'code'          => '123456',
            ],
            [
                'id_restaurant' => 1,
                'username'      => 'user_rest1',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Colaborador Restaurante 1',
                'email'         => 'user_rest1@gmail.com',
                'phone'         => '990001101',
                'roles'         => '["user"]',
                'active'        => 1,
                'code'          => '123456',
            ],
            [
                'id_restaurant' => 2,
                'username'      => 'admin_rest2',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Administrador Restaurante 2',
                'email'         => 'admin_rest2@gmail.com',
                'phone'         => '990000202',
                'roles'         => '["admin"]',
                'active'        => 1,
                'code'          => '123456',
            ],
            [
                'id_restaurant' => 2,
                'username'      => 'user_rest2',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Colaborador Restaurante 2',
                'email'         => 'user_rest2@gmail.com',
                'phone'         => '990002202',
                'roles'         => '["user"]',
                'active'        => 1,
                'code'          => '123456',
            ],
            [
                'id_restaurant' => 3,
                'username'      => 'admin_rest3',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Administrador Restaurante 3',
                'email'         => 'admin_rest3@gmail.com',
                'phone'         => '990000303',
                'roles'         => '["admin"]',
                'active'        => 1,
                'code'          => '123456',
            ],
            [
                'id_restaurant' => 3,
                'username'      => 'user_rest3',
                'passwrd'       => password_hash('123456', PASSWORD_DEFAULT),
                'name'          => 'Colaborador Restaurante 3',
                'email'         => 'user_rest3@gmail.com',
                'phone'         => '990003303',
                'roles'         => '["user"]',
                'active'        => 1,
                'code'          => '123456',
            ],
        ];

        // Insere diretamente na tabela users sem dependência de Model
        $this->db->table('users')->insertBatch($data);
    }
}
