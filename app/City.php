<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = ['label', 'description', 'visible'];

    public function suppliers()
    {
        return $this->hasMany('App\Supplier','city_id');
    }
}
