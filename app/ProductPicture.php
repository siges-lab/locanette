<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{

    protected $fillable = [ 'link', 'visible', 'state','product_id'];


public function product()
{
    return $this->belongsTo(Product::class,"product_id");
}

}
