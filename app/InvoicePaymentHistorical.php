<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicePaymentHistorical extends Model
{
    //
    protected $fillable = ['payment_id', 'code', 'payment_type','amount', 'payment_date', 'description', 'phone_number', 'transaction_number', 'checkout', 'bank_name', 'check_number', 'visible'];

    public function payment()
    {
        return $this->belongsTo('App\InvoicePayment','payment_id');
    }
}
