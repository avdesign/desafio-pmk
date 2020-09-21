<?php

namespace App\Observers;

use App\Models\Donor;
use Illuminate\Support\Str;

class DonorObserver
{
    /**
     * Handle the donor "creating" event.
     *
     * @param  \App\Models\Donor  $donor
     * @return void
     */
    public function creating(Donor $donor)
    {
        $donor->uuid = Str::uuid();
        $donor->email = strtolower($donor->email);
    }

    /**
     * Handle the donor "updating" event.
     *
     * @param  \App\Models\Donor  $donor
     * @return void
     */
    public function updating(Donor $donor)
    {
        $donor->email = strtolower($donor->email);
    }
}
