<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bills extends Migration
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

            'Rate_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Allocation_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],
            
            'No_of_Months' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'Cost' => [
                'type' => 'bigint',
                'constraint'       => 12,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('Rate_id', 'rate', 'id');
        $this->forge->addForeignKey('Allocation_id', 'allocation', 'id');
        $this->forge->createTable('bill',true);
    
    }

    public function down()
    {
        $this->forge->dropTable('bill');
    }
}