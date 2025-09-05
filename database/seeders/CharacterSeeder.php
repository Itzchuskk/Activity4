<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            ['name' => 'Spider-Man',     'real_name' => 'Peter Benjamin Parker', 'gender' => 'Male',   'universe_id' => 4],
            ['name' => 'Hulk',           'real_name' => 'Robert Bruce Banner',   'gender' => 'Male',   'universe_id' => 4],
            ['name' => 'Captain America','real_name' => 'Steven Rogers',         'gender' => 'Male',   'universe_id' => 4],
            ['name' => 'Superman',       'real_name' => 'Clark Kent',            'gender' => 'Male',   'universe_id' => 2],
            ['name' => 'Batman',         'real_name' => 'Bruce Wayne',           'gender' => 'Male',   'universe_id' => 1],
            ['name' => 'Scarlet Spider', 'real_name' => 'Ben Reilly',            'gender' => 'Male',   'universe_id' => 5],
            ['name' => 'Wonder Woman',   'real_name' => 'Diana Prince',          'gender' => 'Female', 'universe_id' => 1],
            ['name' => 'Doomsday',       'real_name' => 'Not Applicable',        'gender' => 'Male',   'universe_id' => 3],
            ['name' => 'Scarlet Witch',  'real_name' => 'Wanda Maximoff',        'gender' => 'Female', 'universe_id' => 5],
            ['name' => 'Night Wing',     'real_name' => 'Dick Grayson',          'gender' => 'Male',   'universe_id' => 3],
        ]);
    }
}
