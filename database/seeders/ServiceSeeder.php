<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'nombre' => 'Servicio 1',
            'descripcion' => 'Contenido del servicio 1',
            'icono_portada' => 'asd1',
            'alt_icono_portada' => 'icono del servicio 1',
            'video_descripcion' => 'dsa1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('services')->insert([
            'nombre' => 'Servicio 2',
            'descripcion' => 'Contenido del servicio 2',
            'icono_portada' => 'asd2',
            'alt_icono_portada' => 'icono del servicio 2',
            'video_descripcion' => 'dsa2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('services')->insert([
            'nombre' => 'Servicio 3',
            'descripcion' => 'Contenido del servicio 3',
            'icono_portada' => 'asd3',
            'alt_icono_portada' => 'icono del servicio 3',
            'video_descripcion' => 'dsa3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
