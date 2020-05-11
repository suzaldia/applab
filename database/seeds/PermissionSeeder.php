<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'permission_access',],
            ['id' => 2, 'name' => 'permission_create',],
            ['id' => 3, 'name' => 'permission_edit',],
            ['id' => 4, 'name' => 'permission_view',],
            ['id' => 5, 'name' => 'permission_delete',],
            ['id' => 6, 'name' => 'role_access',],
            ['id' => 7, 'name' => 'role_create',],
            ['id' => 8, 'name' => 'role_edit',],
            ['id' => 9, 'name' => 'role_view',],
            ['id' => 10, 'name' => 'role_delete',],
            ['id' => 11, 'name' => 'user_access',],
            ['id' => 12, 'name' => 'user_create',],
            ['id' => 13, 'name' => 'user_edit',],
            ['id' => 14, 'name' => 'user_view',],
            ['id' => 15, 'name' => 'user_delete',],
            ['id' => 16, 'name' => 'settings_access',],
            ['id' => 17, 'name' => 'sample_access',],
            ['id' => 18, 'name' => 'sample_create',],
            ['id' => 19, 'name' => 'sample_edit',],
            ['id' => 20, 'name' => 'sample_view',],
            ['id' => 21, 'name' => 'sample_delete',],
            ['id' => 22, 'name' => 'incidence_access',],
            ['id' => 23, 'name' => 'incidence_create',],
            ['id' => 24, 'name' => 'incidence_edit',],
            ['id' => 25, 'name' => 'incidence_view',],
            ['id' => 26, 'name' => 'incidence_delete',],
            ['id' => 27, 'name' => 'task_access',],
            ['id' => 28, 'name' => 'task_create',],
            ['id' => 29, 'name' => 'task_edit',],
            ['id' => 30, 'name' => 'task_view',],
            ['id' => 31, 'name' => 'task_delete',],
            ['id' => 32, 'name' => 'analysis_access',],
            ['id' => 33, 'name' => 'analysis_create',],
            ['id' => 34, 'name' => 'analysis_edit',],
            ['id' => 35, 'name' => 'analysis_view',],
            ['id' => 36, 'name' => 'analysis_delete',],
        ];
        
        foreach ($items as $item) {
            Permission::create($item);
        }
    }
}
