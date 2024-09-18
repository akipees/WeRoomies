<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Flats extends Migration
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

            'owner_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'No_of_Bedrooms' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Bathroom_Type' => [
                'type'           => 'VARCHAR',
                'constraint'           => 100,
                
            ],

            'Area' => [
                'type'       => 'Varchar',
                'constraint'       => 150,
            ],

            'Address' => [
                'type'       => 'Varchar',
                'constraint'       => 150,
            ],

            'TimePeriod' => [
                'type'       => 'date',
                'constraint'       => NULL,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pmt_id', 'property_master_type', 'id');
        $this->forge->addForeignKey('owner_id', 'owner', 'id');
        $this->forge->createTable('flat',true);
    }

    public function down()
    {
        $this->forge->dropTable('flat');
    }
}