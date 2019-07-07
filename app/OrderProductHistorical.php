<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProductHistorical extends Model
{
    //
    protected $fillable = ['order_historical_id', 'order_product_id', 'supplier', 'damage_price', 'damaged', 'ordered', 'rental_price', 'visible'];

    public function order_product()
    {
        return $this->belongsTo('App\OrderProduct','order_id');
    }

    public function order_historical()
    {
        return $this->belongsTo('App\OrderHistorical','order_historical_id');
    }
}
