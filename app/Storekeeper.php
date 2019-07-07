<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storekeeper extends Model
{
    //
    protected $fillable = ['code', 'name', 'first_name', 'birth_date','birth_place', 'civility','home', 'phone_number', 'email', 'pictures', 'visible'];

    public function warehouses()
    {
        return $this->hasMany('App\Warehouse','storekeeper_id');
    }
}
