<?php

use App\Type;
use App\Sample;
use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::all();

        foreach($types as $key => $k) {
            for($i = 0; $i<=9; $i++){
            Sample::create([
                'TAG' => "TAG-$key$i",
                'description' =>"Sample $key$i ",
                'collected_at' => '2020-04-15',
                'type_id' => $k->id,
                'parametre_id' => $k->id,
            ]);
            }
        }
    }
}
