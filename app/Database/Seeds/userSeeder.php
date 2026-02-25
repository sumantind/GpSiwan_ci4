<?php
namespace app\Database\Seeds;

use CodeIgniter\Database\Seeder;

class userSeeder extends Seeder{
    public function run(){
        $data = array(
            [
                'name' => 'Ravindra Kumar 11',
                'email' => 'ravindra11@gmail.com',
                'password' => '12345qwer'
            ],
            [
                'name' => 'Ravindra Kumar 2',
                'email' => 'ravindra2@gmail.com',
                'password' => '12345qwer'
            ],
            [
                'name' => 'Ravindra Kumar 3',
                'email' => 'ravindra3@gmail.com',
                'password' => '12345qwer'
            ]
        );
        // if you have single data
        // $this->db->table('users')->insert($data);
        // if you have bulk data
        $this->db->table('users')->insertBatch($data);
    }
}

?>