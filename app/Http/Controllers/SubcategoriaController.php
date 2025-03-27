<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoriaController extends Controller
{
    public function index($id_categoria)
    {
        $categoria = DB::table('categorias')->where('id_categoria', $id_categoria)->first();
        $subcategorias = DB::table('subcategorias')
            ->where('id_categoria', $id_categoria)
            ->where('estado_auditoria', 'A')
            ->get();

        return view('subcategorias.index', compact('subcategorias', 'categoria'));
    }
}
