<?php

use App\Category;
use Illuminate\Database\Seeder;


class CategoryIncidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Computer'],
            ['id' => 2, 'name' => 'Chemical product'],
            ['id' => 3, 'name' => 'Chemical machinery'],
            ['id' => 4, 'name' => 'Work space'],

        ];

        foreach ($items as $item) {
            Category::create($item);
        }
    }
}
