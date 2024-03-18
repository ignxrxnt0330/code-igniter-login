<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $name = 'Administrador';
        $email = 'admin@example.com';
        $login = 'admin';
        $pwd = password_hash('admin',PASSWORD_DEFAULT);
        $data = [
            'name' => $name,
            'email'    => $email,
            'login'    => $login,
            'pwd'    => $pwd,
            'admin'    => 1
        ];

        $this->db->table('users')->insert($data); // Query Builder 
    }
}
