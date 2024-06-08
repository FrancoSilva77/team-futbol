<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = date('Y-m-d H:i:s');

        DB::table('colores')->insert([
            'color' => 'Negro',
            'hex_code' => '#000000',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Blanco',
            'hex_code' => '#FFFFFF',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Rojo',
            'hex_code' => '#FF0000',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Verde',
            'hex_code' => '#00FF00',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Azul',
            'hex_code' => '#0000FF',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Amarillo',
            'hex_code' => '#FFFF00',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Naranja',
            'hex_code' => '#FFA500',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Púrpura',
            'hex_code' => '#800080',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Rosa',
            'hex_code' => '#FFC0CB',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Marrón',
            'hex_code' => '#A52A2A',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Gris',
            'hex_code' => '#808080',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);

        DB::table('colores')->insert([
            'color' => 'Cian',
            'hex_code' => '#00FFFF',
            'created_at' => $currentDateTime,
            'updated_at' => $currentDateTime,
        ]);
    }
}
