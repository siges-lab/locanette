<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $fillable = ['oil_level','product_id', 'model_id', 'type_id', 'code', 'chassis', 'color', 'description', 'fuel_name', 'fuel_level', 'insurance', 'mileage', 'registration', 'seat', 'technical_visit', 'watter_level', 'visible'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }

    public function model()
    {
        return $this->belongsTo('App\VehicleModel','model_id');
    }

    public function type()
    {
        return $this->belongsTo('App\vehicleType','type_id');
    }
}
