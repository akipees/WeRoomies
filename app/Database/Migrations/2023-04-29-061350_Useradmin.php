<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Useradmin extends Migration
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
        $this->forge->createTable('useradmin',true);
    }

    public function down()
    {
        $this->forge->dropTable('useradmin',true);
    }
}
