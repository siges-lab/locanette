<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{


    protected $fillable = [
        'code', 'name', 'phoneNumber','email','localization','specialty_id','description','visible','product_id'
    ];


public function product()
{
    return $this->belongsTo(Product::class,"product_id") ;
}
public function provider_specialty()
{
    return $this->belongsTo(ProviderSpecialty::class,'specialty_id');
}
}
