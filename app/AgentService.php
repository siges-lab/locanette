<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentService extends Model
{
    //
    protected $fillable = ['label', 'description', 'visible'];

    public function agents()
    {
        return $this->hasMany('App\Agent','service_id');
    }

}
