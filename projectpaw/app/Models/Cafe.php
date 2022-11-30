<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    public function menu(){
        return $this->hasMany('App\Models\Menu', 'id_cafe', 'id_menu');
    }
}
