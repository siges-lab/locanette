<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $fillable = ['service_id', 'code', 'name', 'first_name', 'birth_date','birth_place', 'civility','home', 'phone_number', 'email', 'pictures', 'visible'];

    public function order_processings()
    {
        return $this->hasMany(OrderProcessing::class);
    }

    public function service()
    {
        return $this->belongsTo('App\AgentService','service_id');
    }
}
