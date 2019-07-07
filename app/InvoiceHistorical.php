<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceHistorical extends Model
{
    //
    protected $fillable = ['invoice_id', 'code', 'invoice_date','caution', 'transportation', 'other_expense', 'tax', 'paid', 'visible'];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice','invoice_id');
    }
}
