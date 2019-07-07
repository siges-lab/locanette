<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{


    protected $fillable = ['label', 'description', 'visible'];

    public function room(){
    return $this->belongsTo();
    }

}
