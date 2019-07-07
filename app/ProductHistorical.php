<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHistorical extends Model
{


    protected $fillable = [
        'code', 'designation', 'rental_price','damage_price','description','minimum_threshold','amount_stored','discount','visible','category',
'supplier' ,'warehouse','product_id'   ];


public function product()
{
    return $this->belongsTo(Product::class);
}


}
