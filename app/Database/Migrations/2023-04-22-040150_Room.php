<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rooms extends Migration
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

            'Flat_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'HotWater_Service' => [
                'type' => 'VARCHAR',
                'constraint'       =>   100,
            ],

            'ROWater_Service' => [
                'type'           => 'VARCHAR',
                'constraint'           => 100,
            ],

            'No_of_Beds' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Capacity_of_peoples' => [
                'type'       => 'int',
                'constraint'       => 50,
            ],

            'FloorNo' => [
                'type'       => 'int',
                'constraint'       => 50,
            ],

            'Address' => [
                'type'       => 'Varchar',
                'constraint'       => 150,
            ],

            'Bathroom_Type' => [
                'type'       => 'varchar',
                'constraint'       => 100,
            ],

            'RoomAllocation' => [
                'type'       => 'varchar',
                'constraint'       => 50,
            ],

            'TimePeriod' => [
                'type'       => 'date',
                'constraint'       => NULL,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('Flat_id', 'flat', 'id');
        $this->forge->addForeignKey('pmt_id', 'property_master_type', 'id');
        $this->forge->createTable('room',true);

    }

    public function down()
    {
        $this->forge->dropTable('room');
    }
}

