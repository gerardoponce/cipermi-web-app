<?php

namespace Database\Seeders;

use App\Models\Product;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(6)->create();
        // DB::table('products')->insert([
        //     'nombre' => 'Producto 1',
        //     'descripcion' => 'Contenido del producto 1',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'nombre' => 'Producto 2',
        //     'descripcion' => 'Contenido del producto 2',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'nombre' => 'Producto 3',
        //     'descripcion' => 'Contenido del producto 3',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'nombre' => 'Producto 4',
        //     'descripcion' => 'Contenido del producto 4',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'nombre' => 'Producto 5',
        //     'descripcion' => 'Contenido del producto 5',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);
    }
}
