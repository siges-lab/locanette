<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFamily extends Model
{

    protected $fillable = [
        'label', 'description', 'visible',
    ];

    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }


}
