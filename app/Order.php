<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['customer_id', 'operation_id', 'code', 'rental_period', 'order_date', 'delivery_date_set', 'return_date_set', 'processing_status', 'delivery_status', 'return_status', 'visible'];

    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }

    public function operation()
    {
        return $this->belongsTo('App\Operation','operation_id');
    }

    public function order_products()
    {
        return $this->hasMany('App\OrderProduct','order_id');
    }
}
