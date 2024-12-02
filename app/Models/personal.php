<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    public function prestamosf()
    {
        return $this->hasMany(Prestamo::class);
    }
}
