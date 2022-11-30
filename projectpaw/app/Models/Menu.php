<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function cafe(){
        return $this->belongsTo('App\Models\Cafe', 'id_cafe', 'id_menu');
    }
}
