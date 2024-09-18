<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Owneruser extends Migration
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
        $this->forge->createTable('owneruser',true);
    }

    public function down()
    {
        $this->forge->dropTable('owneruser');
    }
}
