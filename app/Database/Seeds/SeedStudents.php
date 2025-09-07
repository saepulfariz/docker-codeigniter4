<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedStudents extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $year = '2025';
        for ($i = 0; $i < 100; $i++) {

            if (db_connect()->DBDriver == 'MySQLi') {
                $date = $year . '-' . $faker->date('m-d h:i:s');
            } else {
                $date = $year . '-' . $faker->date('m-d h:i:s') . '.000';
            }

            $data = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'address'    => $faker->streetAddress(),
                'created_at' => $date,
                'updated_at' => $date,
            ];
            $this->db->table('students')->insert($data);
        }
    }
}

