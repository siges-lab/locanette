<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    protected $fillable = ['label', 'description', 'product_family_id','visible'];


    public function family ()
    {
        return $this->belongsTo(ProductFamily::class,"product_family_id");
    }
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
