<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnPaymentCash extends Model
{

    protected $fillable = [
        'code', 'paymentDate', 'amount',"description","visible","return_invoice_id"
    ];

public function returninvoice()
{
    return $this->belongsTo() ;
}

 public function  return_paymenthistorical ()
 {
     return $this->hasMany();
 }

}
