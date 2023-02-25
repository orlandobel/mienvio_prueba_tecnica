<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i<10; $i++) {
            DB::table('productos')->insert([
                'nombre' => Str::random(10),
                'descripcion' => Str::random('50'),
                'precio' => rand(100, 1000) / 10
            ]);
        }
    }
}
