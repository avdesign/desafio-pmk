<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonorPhone extends Model
{
    protected $fillable = ['donor_id', 'country_code', 'code', 'number'];
}
