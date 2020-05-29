<?php

use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => [
                'permissions' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36],
            ],
            2 => [
                'permissions' => [22, 23, 24, 25, 26, 27, 30],
            ],
            3 => [
                'permissions' => [27, 30, 32, 33, 34, 35, 36],
            ],

        ];

        foreach ($items as $id => $item) {
            $user = Role::find($id);

            foreach ($item as $key => $ids) {
                $user->{$key}()->sync($ids);
            }
        }
    }
}
