<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['donor_id', 'form_payment_id', 'value'];

    public function form_payment()
    {
        return $this->hasOne(FormPayment::class);
    }

}
