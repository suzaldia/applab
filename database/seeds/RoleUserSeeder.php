<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => ['roles' => [1],],
            2 => ['roles' => [2, 3],],
            3 => ['roles' => [3],],
        ];

        foreach ($items as $id => $item) {
            $user = User::find($id);

            foreach ($item as $key => $ids) {
                $user->{$key}()->sync($ids);
            }
        }
    }
}
