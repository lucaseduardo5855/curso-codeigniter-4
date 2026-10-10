<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'id_restaurant' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'passwrd' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => true,
            ],
            'roles' => [
                'type' => 'varchar',
                'constraint' => 500,
            ],
            'blocked_until' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'active' => [
                'type' => 'int',
                'constraint' => 1,
            ],
            'code' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'last_login' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ]
        ]);

        //primary key
        $this->forge->addKey('id', true);

        //create table
        $this->forge->createTable('users');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('users');
    }
}
