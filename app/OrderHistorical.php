<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderHistorical extends Model
{
    //
    protected $fillable = ['order_id', 'code', 'rental_period', 'order_date', 'delivery_date_set', 'return_date_set', 'processing_status', 'delivery_status', 'return_status', 'visible'];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
}
