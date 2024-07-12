<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'Joseph Gutierrez'],
            ['name' => 'Roberto Casaux'],
            ['name' => 'Ricardo Quispe'],
            ['name' => 'Marco Rebaza'],
            ['name' => 'Jorge Paredes'],
            ['name' => 'Julian Alvarez'],
            ['name' => 'Carlos Perez'],
            ['name' => 'Luisa Mendoza'],
            ['name' => 'Maria Rodriguez'],
            ['name' => 'Sofia Gutierrez'],
            ['name' => 'Jose Gutierrez'],
        ]);
    }
}
