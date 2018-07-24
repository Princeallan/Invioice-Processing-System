<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable= [
        'invoice_no', 'title', 'due_date', 'user_id', 'discount', 'sub_total', 'total'
    ];
}
