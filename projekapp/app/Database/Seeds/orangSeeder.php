<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class orangSeeder extends Seeder
{
    public function run()
    {
        //     $data = [
        //         'username' => 'darth',
        //         'email'    => 'darth@theempire.com'
        //     ];
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {

            $data = [
                'nama'    => $faker->name,
                'alamat'  => $faker->address,
                'create_at' => Time::createFromTimesTamp($faker->unixTime()),
                'update_at' => Time::now(),
            ];
            $this->db->table('orang')->insert($data);
        }

        //     // Simple Queries
        //     $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        //     // Using Query Builder
    }
}
