<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'amount', 'company', 'customer', 'payment_method', 'date_of_purchase'
    ];

    protected $table = 'stores';
}
