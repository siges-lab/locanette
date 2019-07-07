<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleBrand extends Model
{
    //
    protected $fillable = ['label', 'visible'];

    public function models()
    {
        return $this->hasMany('App\VehicleModel','brand_id');
    }
}
