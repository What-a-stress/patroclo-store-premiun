<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre_comercial',
        'tipo_documento',
        'numero_documento',
        'estado_auditoria',
        'fecha_creacion_auditoria',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
}
