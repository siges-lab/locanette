<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    //
    protected $fillable = ['storekeeper_id' ,'code', 'label', 'area', 'localisation','coordinates', 'visible'];

    public function storekeeper()
    {
        return $this->belongsTo('App\Storekeeper','storekeeper_id');
    }
}
