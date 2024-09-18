<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usercustomer extends Migration
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

            'customer_id' => [
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
        $this->forge->addForeignKey('customer_id', 'customer', 'id');
        $this->forge->createTable('usercustomer',true);
    }

    public function down()
    {
        $this->forge->dropTable('usercustomer',true);
    }
}
