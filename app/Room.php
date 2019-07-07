<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['code', 'name', 'localization',"coordinates","capacity","description","visible","type_id","product_id"];




public function  product()
{
    return $this->belongsTo(Product::class,'product_id');
}

public function  roomtype()
{
    return $this->belongsTo(RoomType::class,'type_id');
}

}
