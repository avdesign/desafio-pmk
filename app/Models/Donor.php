<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'donation_interval_id', 
        'donor_phone_id',
        'donor_address_id',
        'name',
        'email',
        'document',
        'birth_date'
    ];
}
