<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
     
        return Curso::all();
    }
    public function show($id){
    
        return Curso::find($id);
    }

    public function store(Request $request){
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->descricao = $request->descricao;
        $curso->ativo = $request->ativo;
        $curso->cargaHoraria = $request->cargaHoraria;
        $curso->save();

        return response()->json($curso, 201);
    }

    public function update(Request $request, $id){}
    public function destroy($id){
        $curso = Curso::find($id);
        $curso->delete();

        return response()->json(null, 204);
    }
    
}
