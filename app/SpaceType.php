<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceType extends Model
{

    protected $fillable = ['label', 'description', 'visible','coordinates','area','visible','storekeeper'];


public function  spaces()
{
    return $this->hasMany();
}

}
