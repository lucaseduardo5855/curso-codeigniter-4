<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ResizeUserPassword extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('users', [
            'passwrd' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn('users', [
            'passwrd' => [
                'type'       => 'varchar',
                'constraint' => 50,
            ],
        ]);
    }
}