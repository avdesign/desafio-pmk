<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'donation_interval_id',
        'name',
        'email',
        'document',
        'birth_date'
    ];


    public function phones()
    {
        return $this->hasMany(DonorPhone::class);
    }

    public function address()
    {
        return $this->hasOne(DonorAddress::class);
    }
}
