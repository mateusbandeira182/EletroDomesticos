<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nome' => 'Electrolux',
        ]);

        DB::table('marcas')->insert([
            'nome' => 'Brastemp',
        ]);

        DB::table('marcas')->insert([
            'nome' => 'Fisher',
        ]);

        DB::table('marcas')->insert([
            'nome' => 'Samsung',
        ]);

        DB::table('marcas')->insert([
            'nome' => 'LG Eletronicos',
        ]);
    }
}
