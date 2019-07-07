<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnPaymentCheck extends Model
{

    protected $fillable = [
        'checkNumber', 'banqueName'
    ];

}
