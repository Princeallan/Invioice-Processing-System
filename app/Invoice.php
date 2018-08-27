<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $primaryKey = 'id';

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


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
