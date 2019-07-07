<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryGuys extends Model
{
    //
    protected $fillable = ['code', 'name', 'phone_number', 'visible'];

    public function deliveries()
    {
        return $this->hasMany('App\Delivery','guy_id');
    }
}
