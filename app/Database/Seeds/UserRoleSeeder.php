<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name'       => $faker->name,
                'access'     => json_encode($faker->randomElements(['read', 'write', 'delete', 'update'], rand(1, 4))),
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];
        }

        $this->db->table('user_roles')->insertBatch($data);
    }
}
