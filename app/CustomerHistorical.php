<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerHistorical extends Model
{
    //
    protected $fillable = ['customer_id', 'historical_date', 'last_name', 'first_name', 'phone_number', 'email', 'visible'];

    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id');
    }
}
