<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = ['product_id', 'type_id', 'code', 'capacity', 'area', 'conveniences', 'coordinates', 'localization', 'number_of_room', 'description', 'visible'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }

    public function type()
    {
        return $this->belongsTo('App\HouseType','type_id');
    }
}
