<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Allocations extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'Room_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Flat_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Customer_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Start_date' => [
                'type'       => 'timestamp',
                'constraint'       => 100,
            ],

            'No_of_Months' => [
                'type' => 'int',
                'constraint'       =>   10,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('Room_id', 'room', 'id');
        $this->forge->addForeignKey('Flat_id', 'flat', 'id');
        $this->forge->addForeignKey('Customer_id', 'customer', 'id');
        $this->forge->createTable('allocation',true);
    }

    public function down()
    {
        $this->forge->dropTable('allocation');
    }
}