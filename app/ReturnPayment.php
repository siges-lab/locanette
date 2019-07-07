<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnPayment extends Model
{


    protected $fillable = [
        'code', 'paymentDate', 'amount',"description","visible","return_invoice_id"
    ];



public function return_invoice () {
    return $this->belongsTo();
}

public function returnpaymenthistorical ()
{
    return $this->hasMany();
}

}
