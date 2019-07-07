<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    //
    protected $fillable = ['label', 'visible'];

    public function orders()
    {
        return $this->hasMany('App\Order','operation_id');
    }
}
