<?php

use Illuminate\Database\Seeder;
use App\Models\FormPayment;

class FormPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormPayment::create([
            'title' => 'Débito'
        ]);

        FormPayment::create([
            'title' => 'Crédito'
        ]);

    }
}
