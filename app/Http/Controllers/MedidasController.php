<?php

namespace App\Http\Controllers;

use App\Models\Medidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedidasController extends Controller
{
    public function index(Request $request)
    {
        $medidas = Medidas::orderby('id_medidas', 'desc')->select('*', DB::raw("DATE_FORMAT(fecha,'%d/%m/%Y %h:%i:%s') as fecha_medida"))->get();
        if ($request->ajax()) {
            return response()->json($medidas);
        } else {
            return view('medidas', compact('medidas'));
        }
    }
}
