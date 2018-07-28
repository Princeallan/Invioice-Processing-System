<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable= [
        'invoice_no',
        'due_date',
        'client_id',
        'product_id',
        'total',
        'quantity',
        'discount',
        'grand_total'
    ];

    /**
     *
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
