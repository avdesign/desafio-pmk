<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonorAddress extends Model
{
    protected $fillable = [
        'donor_id'
        'address'
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country'
    ];
}
