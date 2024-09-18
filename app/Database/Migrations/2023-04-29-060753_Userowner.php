<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userowner extends Migration
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

            'owner_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'UserName' => [
                'type'       => 'VARCHAR',
                'constraint'       => 80,
            ],

            'Email' => [
                'type'       => 'Varchar',
                'constraint'       => 50,
            ],

            'Password' => [
                'type'       => 'Varchar',
                'constraint'       => 150,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('owner_id', 'owner', 'id');
        $this->forge->createTable('userowner',true);
    }
    

    public function down()
    {
        $this->forge->dropTable('userowner',true);
    }
}
