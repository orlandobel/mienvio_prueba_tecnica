<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductosController extends Controller
{
    //

    public function view(Request $request) {
        $productos = DB::table('productos')
            ->orderBy('nombre', 'asc')
            ->get();

        return view('productos', ['productos' => $productos ]);
    }

    public function filtrar_precio(Request $request) {
        $menor = $request['menor'] ?? 0;
        $mayor = $request['mayor'] ?? 999999;
        $productos = DB::table('productos')
            ->where('precio', '>=', $menor)
            ->where('precio', '<=', $mayor)
            ->orderBy('nombre', 'asc')
            ->get();

        return view('productos', ['productos' => $productos ]);
    }

    public function filtrar_nombre(Request $request) {
        $nombre = $request['nombre'] ?? '';
        
        $productos = DB::table('productos')
            ->where('nombre', 'like', "%$nombre%")
            ->orderBy('nombre', 'asc')
            ->get();

        return view('productos', ['productos' => $productos ]);
    }

    public function crear_producto(Request $request) {
        Validator::make($request->all(), [
            'nombre' => 'required|max:25',
            'descripcion' => 'required|max:100',
            'precio' => 'required'
        ])->validate();

        DB::table('productos')
            ->insert([
                'nombre' => $request['nombre'],
                'descripcion' => $request['descripcion'],
                'precio' => $request['precio']
            ]);

        return redirect('/');
    }
}
