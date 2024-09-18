<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyMasterType extends Migration
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
            
            'pm_id' => [
                'type'       => 'int',
                'constraint'       => 10,
            ],

            'type' => [
                'type' => 'VARCHAR',
                'constraint'       =>   100,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pm_id', 'property_master', 'id');
        $this->forge->createTable('property_master_type',true);
    }

    public function down()
    {
        $this->forge->dropTable('property_master_type');
    }
}