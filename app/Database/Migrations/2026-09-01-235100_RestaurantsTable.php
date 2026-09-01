<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RestaurantsTable extends Migration
{
    public function up()
    {
        // create restaurants table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'address' => [
                'type' => 'varchar',
                'constraint' => 250,
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => 20
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        //primary key
        $this->forge->addKey('id', true);

        //create table
        $this->forge->createTable('restaurantes');
    }

    public function down()
    {
        //drop table
        $this->forge->dropTable('restaurantes');
    }
}
