<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['code', 'designation', 'rental_price','damage_price','description','minimum_threshold','amount_stored','discount','visible','pictures','visible',
        "category_id","supplier_id","warehouse_id"];



    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class,"category_id");
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class,'supplier_id');
    }

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class,'product_id');
    }
    public function product_pictures()
    {
        return $this->hasMany(ProductPicture::class,'product_id');
    }
    public function product_historicals()
    {
        return $this->hasMany(ProductHistorical::class,'product_id');
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class,'product_id');
    }
    public function provider()
    {
        return $this->hasOne(Provider::class,'product_id');
    }
    public function event_equipment()
    {
        return $this->hasOne(EventEquipment::class,'product_id');
    }
    public function space()
    {
        return $this->hasOne(Space::class,'product_id');
    }

    public function room()
    {
        return $this->hasOne(Room::class,'product_id');
    }
    public function house()
    {
        return $this->hasOne(House::class,'product_id');
    }
    public function professional_tool()
    {
        return $this->hasOne(ProfessionalTool::class,'product_id');
    }





}
