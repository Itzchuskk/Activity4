<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('universes')->insert([
            ['universe' => 'U1', 'company' => 'DC',     'age' => 'silvery'],
            ['universe' => 'U2', 'company' => 'DC',     'age' => 'golden'],
            ['universe' => 'U3', 'company' => 'DC',     'age' => 'modern'],
            ['universe' => 'U4', 'company' => 'Marvel', 'age' => 'silvery'],
            ['universe' => 'U5', 'company' => 'Marvel', 'age' => 'modern'],
        ]);
    }
}
