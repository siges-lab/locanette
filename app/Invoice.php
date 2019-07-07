<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['order_id', 'code', 'invoice_date','caution', 'transportation', 'other_expense', 'tax', 'paid', 'visible'];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }

    public function payments()
    {
        return $this->hasMany('App\InvoicePayment','invoice_id');
    }

    public function historical()
    {
        return $this->hasMany('App\InvoiceHistorical','invoice_id');
    }
}
