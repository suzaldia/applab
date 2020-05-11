<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Admin', 'description' => 'can create other users'],
            ['id' => 2, 'name' => 'Support', 'description' => 'can manage incidences'],
            ['id' => 3, 'name' => 'User', 'description' => 'Operator user'],
        ];

        foreach ($items as $item) {
            Role::create($item);
        }
    }
}
