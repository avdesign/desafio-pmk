<?php

use Illuminate\Database\Seeder;
use App\Models\DonationInterval;

class DonationIntervalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonationInterval::create([
            'title' => 'Único'
        ]);

        DonationInterval::create([
            'title' => 'Bimestral'
        ]);

        DonationInterval::create([
            'title' => 'Semestral'
        ]);

        DonationInterval::create([
            'title' => 'Anual'
        ]);
    }
}
