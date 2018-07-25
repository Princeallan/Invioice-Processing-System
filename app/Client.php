<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'phone_no',
        'postal_code',
        'country'
    ];
}
