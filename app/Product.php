<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [

        'name',
        'description',
        'quantity',
        'unit_price'

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function invoice()
    {

        return $this->belongsTo(Invoice::class);

    }
}
