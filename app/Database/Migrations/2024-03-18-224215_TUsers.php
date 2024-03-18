<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'login' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'pwd' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'admin' => [
                'type'       => 'INT',
                'constraint' => '1',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('t_user');
    }

    public function down()
    {
        $this->forge->dropTable('t_user');
    }
}
