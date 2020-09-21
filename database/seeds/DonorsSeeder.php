<?php

use Illuminate\Database\Seeder;

class DonorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Donor::class, 50)->create()->each(function ($user) {

            // Create 2 Phones
            $user->phones()->save(factory(App\Models\DonorPhone::class)->make());
            $user->phones()->save(factory(App\Models\DonorPhone::class)->make());
            // Create Address
            $user->address()->save(factory(App\Models\DonorAddress::class)->make());
        });
    }
}
