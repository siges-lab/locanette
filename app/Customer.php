<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['last_name', 'first_name', 'phone_number', 'email', 'visible'];

    public function historicals()
    {
        return $this->hasMany('App\CustomerHistorical','customer_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'customer_id');
    }

}
