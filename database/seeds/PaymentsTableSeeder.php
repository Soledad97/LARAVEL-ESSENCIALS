<?php

use Illuminate\Database\Seeder;
use App\Payment;
class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = array(
<<<<<<< HEAD
          ['method'=>'Paypal'],
          ['method'=>'Mercado Pago'],
          ['method'=>'Pago Facil'],

        );
        foreach($methods as $method) {
          Payment::insert($method);
=======
            ['method' => 'Paypal'], 
            ['method' => 'MercadoPago'],
             ['method' => 'PagoFacil']
            );
        
        foreach($methods as $method)
        {
            Payment::insert($method);
>>>>>>> 6f6f5b5dcb794653d33bf633f1ce22943a0df750
        }
    }
}