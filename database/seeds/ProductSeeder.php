<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PRODUCTOS
        $productos = [];

        $productos[]=[
            'imagen'=> '"https://via.placeholder.com/150"',
            'name' => 'cremas',
            'descripcion' => 'productos para el cuidado de la piel',
            'price' => 30
        ];
  
        $productos[]=[
          'imagen'=> '"https://via.placeholder.com/150"',
          'name' => 'cremas',
          'description' => 'productos para el cuidado de la piel',
          'price' => 40
        ];
  
        $productos[]=[
          'imagen'=> '"https://via.placeholder.com/150"',
          'name' => 'cremas',
          'description' => 'productos para el cuidado de la piel',
          'price' => 20
        ];
  
        $productos[]=[
          'imgpath'=> '"https://via.placeholder.com/150"',
          'nombre' => 'cremas',
          'description' => 'productos para el cuidado de la piel',
          'price' => 30
        ];

        $productos[]= [
          'imagen'=> 'https://via.placeholder.com/150',
          'name' => 'cremas',
          'description' => 'productos para el cuidado de la piel',
          'price' => 30
        ];

        foreach ($productos as $producto) {
          DB::table('products')->insert($producto);
        }
    }
}
