<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['name' => 'Matematicas'],
            ['name' => 'Fisica'],
            ['name' => 'Quimica'],
            ['name' => 'Biologia'],
            ['name' => 'Historia'],
        ]);
    }
}
