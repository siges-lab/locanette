<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
    //
    protected $fillable = ['label', 'description', 'visible'];

    public function houses()
    {
        return $this->hasMany('App\House','type_id');
    }
}
