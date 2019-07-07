<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnPaymentHistorical extends Model
{


    protected $fillable = ['code', 'paymentDate',"amount","description","visible","return_invoice_id","return_payment_id"];



public function returninvoice()
{
    return $this->belongsTo() ;
}

  public function  returnpayment()
  {
      return $this->belongsTo();
  }

    }
