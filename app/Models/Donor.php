<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'donation_interval_id',
        'payment_day',
        'name',
        'email',
        'document',
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country',
        'postcode',
        'birth_date',
        'payment_date'
    ];


    /**
     *Retorna os telefones do doador específico.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phones()
    {
        return $this->hasMany(DonorPhone::class);
    }


    /**
     * Retorna as doações do doador específico.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    
}
