<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    protected $fillable = ['order_id', 'guy_id', 'delivery_date', 'description', 'visible'];

    public function guy()
    {
        return $this->belongsTo('App\DeliveryGuy','guy_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
}
