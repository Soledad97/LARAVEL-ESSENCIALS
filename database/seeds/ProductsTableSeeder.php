<?php

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // PRODUCTOS
                $producto = [];

                $products[]=[
                    'photo'=> '"https://via.placeholder.com/150"',
                    'name' => 'cremas',
                    'description' => 'productos para el cuidado de la piel',
                    'price' => 35
                ];
          
                $products[]=[
                  'photo'=> '"https://via.placeholder.com/150"',
                  'name' => 'tonico',
                  'description' => 'productos para el cuidado del rostro',
                  'price' => 40
                ];
          
                $products[]=[
                  'photo'=> '"https://via.placeholder.com/150"',
                  'name' => 'jabon',
                  'description' => 'productos para el cuidado diario',
                  'price' => 20
                ];
          
                $products[]=[
                  'photo'=> '"https://via.placeholder.com/150"',
                  'name' => 'perfume',
                  'description' => 'productos para el uso diario',
                  'price' => 30
                ];
        
        
                foreach ($productos as $producto) {
                  DB::table('products')->insert($producto);
                }
    }
}
