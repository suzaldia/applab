<?php

use App\Parametre;
use Illuminate\Database\Seeder;

class ParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Electric conductivity', 'unit' => 'dS/m', 'limit' => 3, 'observations' =>'It expresses the total concentration of soluble salts contained in the irrigation waters.The measurement of electrical conductivity is carried out using a conductivity meter provided with a cell of appropriate conductivity.'],
            ['id' => 2, 'name' => 'Total solids in solution', 'unit' => 'mg/l', 'limit' => 2000, 'observations' =>'Total suspended solids (TSS) is the dry-weight of suspended particles, that are not dissolved, in a sample of water that can be trapped by a filter that is analyzed using a filtration apparatus. It is a water quality parameter used to assess the quality of a specimen of any type of water or water body, ocean water for example, or wastewater after treatment in a wastewater treatment plant.'],
            ['id' => 3, 'name' => 'Calcium', 'unit' => 'meq/l', 'limit' => 20, 'observations' =>''],
            ['id' => 4, 'name' => 'Magnesium', 'unit' => 'meq/l', 'limit' => 5, 'observations' =>''],
            ['id' => 5, 'name' => 'Sodium', 'unit' => 'meq/l', 'limit' => 40, 'observations' =>''],
            ['id' => 6, 'name' => 'Carbonates', 'unit' => 'meq/l', 'limit' => 0.1, 'observations' =>''],
            ['id' => 7, 'name' => 'Bicarbonates', 'unit' => 'meq/l', 'limit' => 10, 'observations' =>''],
            ['id' => 8, 'name' => 'Chlorine', 'unit' => 'meq/l', 'limit' => 30, 'observations' =>''],
            ['id' => 9, 'name' => 'Sulfates', 'unit' => 'meq/l', 'limit' => 20, 'observations' =>''],
            ['id' => 10, 'name' => 'Nitrate-nitrogen', 'unit' => 'mg/l', 'limit' => 10, 'observations' =>''],
            ['id' => 11, 'name' => 'Ammonium-nitrogen', 'unit' => 'mg/l', 'limit' => 5, 'observations' =>''],
            ['id' => 12, 'name' => 'Phosphate-phosphorus', 'unit' => 'mg/l', 'limit' => 2, 'observations' =>''],
            ['id' => 13, 'name' => 'Potassium', 'unit' => 'mg/l', 'limit' => 2, 'observations' =>''],
            ['id' => 14, 'name' => 'Boron', 'unit' => 'mg/l', 'limit' => 2, 'observations' =>''],
            ['id' => 15, 'name' => 'Acidity or basicity', 'unit' => '1-14', 'limit' => 8.5, 'observations' =>'PH is defined as the acidity or basicity of an aqueous medium or solution. Its scale is measured from 0 to 14, 7 being the neutral point, from 0 to 6.9 acids and from 7 the bases.'],

        ];

        foreach ($items as $item) {
            Parametre::create($item);
        }
    }
}
