<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
             'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'           => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}
