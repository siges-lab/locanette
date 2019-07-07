<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventEquipment extends Model
{
    //
    protected $table="event_equipments";
    protected $fillable = ['product_id', 'code', 'color', 'designation', 'dimension', 'weight', 'description', 'visible'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }


}
