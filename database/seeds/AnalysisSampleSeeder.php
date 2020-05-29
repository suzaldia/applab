<?php

use App\Sample;
use App\Analysis;
use Illuminate\Database\Seeder;

class AnalysisSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $samples = Sample::all()->where('id','<=',5);

        foreach($samples as $key => $sample) {
            for($i = 1; $i <= ($key+1); $i++) {
                Analysis::create([
                    'result' => 2.5,
                    'sample_id' => $sample->id,
                    'user_id' => 3,
                    'observations' => '',
                ]);
            }
        }
    }
}
