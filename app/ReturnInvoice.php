<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnInvoice extends Model
{

    protected $fillable = ['code', 'invoiceDate', 'tax','discount','otherExpenses','paid','visible',
        'order_return_id'];


  public function orderReturn()
  {
      return $this->belongsTo();
  }

    public function return_payment()
    {
        return $this->hasMany();
    }
    public function return_invoice_historical()
    {
        return $this->hasMany();
    }

}
