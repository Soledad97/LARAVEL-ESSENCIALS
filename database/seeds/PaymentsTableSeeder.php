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
            ['method' => 'Paypal'], 
            ['method' => 'MercadoPago'],
             ['method' => 'PagoFacil']
            );
        
        foreach($methods as $method)
        {
            Payment::insert($method);
        }
    }
}