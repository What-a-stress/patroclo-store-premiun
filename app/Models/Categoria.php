<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'imagen_url',
        'estado_auditoria',
        'fecha_creacion_auditoria',
    ];

    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class, 'id_categoria');
    }
}
