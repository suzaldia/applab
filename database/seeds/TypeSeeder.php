<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Environmental'],
            ['id' => 2, 'name' => 'Sample plan'],
            ['id' => 3, 'name' => 'Punctual'],
        ];

        foreach ($items as $item) {
            Type::create($item);
        }
    }
}
