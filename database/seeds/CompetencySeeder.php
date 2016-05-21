<?php

use Illuminate\Database\Seeder;

class CompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencies')->insert([
            'name' => 'Communication',
            'value' => 80
        ]);
        DB::table('competencies')->insert([
            'name' => 'Critical Thinking',
            'value' => 85
        ]);
        DB::table('competencies')->insert([
            'name' => 'Creativity',
            'value' => 82
        ]);
        DB::table('competencies')->insert([
            'name' => 'Problem Solving',
            'value' => 90
        ]);
        DB::table('competencies')->insert([
            'name' => 'Time management',
            'value' => 80
        ]);
    }
}
