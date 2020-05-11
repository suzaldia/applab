<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'surname' => 'User', 'email' => 'admin@admin.com', 'password' => '$2y$10$/Spp1ZzQX7lKLl6Iqxi1CuisRVsBRd2M5sVxoV0DzcmteMezXLeze', 'remember_token' => '',],
        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
