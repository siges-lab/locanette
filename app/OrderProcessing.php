<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProcessing extends Model
{
    //
    protected $fillable = ['order_id', 'agent_id', 'code', 'description', 'finished_date', 'started_date', 'visible'];

    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }

    public function agent()
    {
        return $this->belongsTo('App\Agent','agent_id');
    }

}
