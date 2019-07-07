<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentField extends Model
{
    //
    protected $fillable = ['label', 'description', 'visible'];

    public function tools()
    {
        return $this->hasMany('App\ProfessionalTool','field_id');
    }
}
