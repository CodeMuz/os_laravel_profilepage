<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'Code Igniter',
            'value' => 70
        ]);
        DB::table('skills')->insert([
            'name' => 'Zend 1 & 2',
            'value' => 78
        ]);
        DB::table('skills')->insert([
            'name' => 'Laravel',
            'value' => 60
        ]);
        DB::table('skills')->insert([
            'name' => 'JavaScript',
            'value' => 80
        ]);
        DB::table('skills')->insert([
            'name' => 'JQuery',
            'value' => 75
        ]);
        DB::table('skills')->insert([
            'name' => 'Angular',
            'value' => 65
        ]);
        DB::table('skills')->insert([
            'name' => 'HTML',
            'value' => 80
        ]);
        DB::table('skills')->insert([
            'name' => 'CSS',
            'value' => 70
        ]);
    }
}
