<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'city',
        'phone_no',
        'postal_code',
        'country'
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
