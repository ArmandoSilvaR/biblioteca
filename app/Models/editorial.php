<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class editorial extends Model
{
    public function articulosf()
    {
        return $this->hasMany(Articulo::class);
    }
}
