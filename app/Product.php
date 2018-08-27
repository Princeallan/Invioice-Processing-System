<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = [

        'name',
        'description',
        'quantity',
        'unit_price'

    ];


    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
