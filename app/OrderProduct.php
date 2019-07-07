<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{

    protected $fillable = ['ordered', 'damaged', 'rentalPrice','damagePrice','visible',"supplier_id","supplingPrice","order_id","product_id"];


public function supplier()
{
    return $this->belongsTo(Supplier::class,"supplier_id") ;
}

public function product()
{
    return $this->belongsTo(Product::class,"product_id");
}


public function order()
{
    return $this->belongsTo(Order::class,"order_id");
}


}
