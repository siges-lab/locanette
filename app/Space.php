<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{


    protected $fillable = ['code', 'name', 'localization','coordinates','area','visible','description','type_id','product_id'];


    public function  spaceType()
    {
        return $this->belongsTo(SpaceType::class,"space_type_id");
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }


}
