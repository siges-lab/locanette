<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderSpecialty extends Model
{

    protected $fillable = [
        'code', 'label', 'description','visible'
    ];

 public function provider()
{
    return $this->hasMany(Provider::class,'speciality_id');
}
}
