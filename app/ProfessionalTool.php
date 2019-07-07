<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalTool extends Model
{

    protected $fillable = [
        'code', 'designation', 'weight','description','visible','field_id','product_id'
    ];


public function product()
{
    return $this->belongsTo(Product::class,"product_id");
}

    public function equipment_field()
    {
        return $this->belongsTo(EquipmentField::class,"field_id");
    }
}
