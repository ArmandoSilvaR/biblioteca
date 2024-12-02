<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    public function autoresf()
    {
        return $this->belongsTo(Autor::class);
    }

    public function editorialesf()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function seccionesf()
    {
        return $this->belongsTo(Seccion::class);
    }

    public function prestamosf()
    {
        return $this->hasOne(Prestamo::class);
    }

}
