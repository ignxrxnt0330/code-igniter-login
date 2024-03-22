<?php namespace App\Models;
    use CodeIgniter\Model;
    
    class User extends Model{
        public function getUser($data){
            $user = $this->db->table('users');
            $user->where($data);
            return $user->get()->getResultArray();
        }

        public function insertUser($data){
            $user = $this->db->table('users');
            $user->insert($data);
        }
    }