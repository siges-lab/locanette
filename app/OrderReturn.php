<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderReturn extends Model
{
    //
    protected $fillable = ['order_id', 'storekeeper_id', 'code', 'comment', 'return_date', 'visible'];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }

    public function storekeeper()
    {
        return $this->belongsTo('App\Storekeeper','storekeeper_id');
    }

}
