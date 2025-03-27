<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index($id_subcategoria)
    {
        $subcategoria = DB::table('subcategorias')->where('id_subcategoria', $id_subcategoria)->first();
        $productos = DB::table('productos')
            ->where('id_subcategoria', $id_subcategoria)
            ->where('estado_auditoria', 'A')
            ->get();

        return view('productos.index', compact('productos', 'subcategoria'));
    }

    public function show($id_producto)
    {
        $producto = DB::table('productos')
            ->where('id_producto', $id_producto)
            ->first();

        if (!$producto) {
            return redirect()->route('categorias.index')->with('error', 'Producto no encontrado');
        }

        $marca = DB::table('marcas')
            ->where('id_marca', $producto->id_marca)
            ->first();

        $proveedor = DB::table('proveedores')
            ->where('id_proveedor', $producto->id_proveedor)
            ->first();

        $imagenes = DB::table('producto_imagenes')
            ->where('id_producto', $id_producto)
            ->where('estado_auditoria', 'A')
            ->get();

        return view('productos.show', compact('producto', 'marca', 'proveedor', 'imagenes'));
    }
}
