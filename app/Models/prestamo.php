<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    public function clientesf()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function articulosf()
    {
        return $this->belongsTo(Articulo::class);
    }

    public function personalf()
    {
        return $this->belongsTo(Personal::class);
    }
}
