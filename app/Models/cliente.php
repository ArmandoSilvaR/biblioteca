<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public function prestamosf()
    {
        return $this->hasMany(Prestamo::class);
    }
}
