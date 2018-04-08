<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AilmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ailments')->insert([
            'name' => 'Diabetes Type 2'
        ]);

        DB::table('ailments')->insert([
            'name' => 'Bipolar Depression'
        ]);

        DB::table('ailments')->insert([
            'name' => 'Atrial Fibrillation'
        ]);

        DB::table('ailments')->insert([
            'name' => 'Hypertension'
        ]);

        DB::table('ailments')->insert([
            'name' => 'High Cholesterol'
        ]);
    }
}
