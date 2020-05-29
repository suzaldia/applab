<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionRoleSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ParametreSeeder::class);
        $this->call(SampleSeeder::class);
        $this->call(AnalysisSampleSeeder::class);
        $this->call(CategoryIncidenceSeeder::class);
    }
}
