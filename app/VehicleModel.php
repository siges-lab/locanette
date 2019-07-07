<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    //
    protected $fillable = ['brand_id', 'label', 'release_year', 'description', 'visible'];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle','model_id');
    }
    public function brand()
    {
        return $this->belongsTo('App\VehicleBrand','brand_id');
    }
}
