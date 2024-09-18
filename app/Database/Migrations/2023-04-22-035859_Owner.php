<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Owner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'FullName' => [
                'type'       => 'VARCHAR',
                'constraint'       => 80,
            ],

            'MobileNo' => [
                'type' => 'bigint',
                'constraint'       => 12,
            ],

            'Age' => [
                'type'           => 'INT',
                'constraint'           => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'Gender' => [
                'type'       => 'Varchar',
                'constraint'       => 10,
            ],

            'Email' => [
                'type'       => 'Varchar',
                'constraint'       => 50,
            ],

            'Address' => [
                'type'       => 'Varchar',
                'constraint'       => 150,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('owner',true);
    }

    public function down()
    {
        $this->forge->dropTable('owner');
    }
}
