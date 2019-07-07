<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = ['city_id', 'code', 'name', 'phone_number', 'email', 'localization', 'visible'];

    public function products()
    {
        return $this->hasMany('App\Product','supplier_id');
    }

    public function city()
    {
        return $this->belongsTo('App\City','city_id');
    }
}
