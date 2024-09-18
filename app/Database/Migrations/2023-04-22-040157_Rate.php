<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rates extends Migration
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

            'pmt_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Start_date' => [
                'type'       => 'timestamp',
                'constraint'       => 100,
            ],
            
            'End_date' => [
                'type'       => 'timestamp',
                'constraint'       => 100,
            ],

            'Rate' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'is_active' => [
                'type' => 'int',
                'constraint'       =>   1,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pmt_id', 'property_master_type', 'id');
        $this->forge->createTable('rate',true);
    }

    public function down()
    {
        $this->forge->dropTable('rate');
    }
}