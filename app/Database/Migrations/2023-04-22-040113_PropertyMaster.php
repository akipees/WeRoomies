<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PropertyMaster extends Migration
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
            
            'Property_type' => [
                'type' => 'VARCHAR',
                'constraint'       =>   100,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('property_master',true);
    }

    public function down()
    {
        $this->forge->dropTable('property_master');
    }
}

