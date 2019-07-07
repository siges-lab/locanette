<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    //
    protected $fillable = ['label', 'visible'];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle','type_id');
    }
}
