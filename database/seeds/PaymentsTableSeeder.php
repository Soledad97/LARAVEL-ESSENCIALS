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
          ['method'=>'Paypal'],
          ['method'=>'Mercado Pago'],
          ['method'=>'Pago Facil'],

        );
        foreach($methods as $method) {
          Payment::insert($method);
        }
    }
}
