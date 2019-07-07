<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    //
    protected $fillable = ['invoice_id', 'code', 'payment_type','amount', 'payment_date', 'description', 'phone_number', 'transaction_number', 'checkout', 'bank_name', 'check_number', 'visible'];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice','invoice_id');
    }

    public function historical()
    {
        return $this->hasMany('App\InvoicePaymentHistorical','payment_id');
    }

}
