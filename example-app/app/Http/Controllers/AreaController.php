<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function index() {
        $areas = Area::all();

        return view('area/area')->with('areas',$areas);
    }

    public function create(){
        return view('area/cadastrar');
    }

    public function store(Request $request){

        $nome = $request->get('nome_area');
        $descricao = $request->get('descricao_area');
        $area = new Area();
        $area->nome_area = $nome;
        $area->descricao_area = $descricao;
        $area->save();

        return to_route('area.index');
    }

    public function edit($id){

        $area = Area::findOrFail($id);

        return view('area/editar')->with('area', $area);
    }

    public function update(Request $request){
        
        Area::findOrFail($request->id)->update($request->all());

        return to_route('area.index');
    }

    public function delete(Request $request){
        /**
        * ! adicionar validação para não apagar areas com dependencias
        * ? $query = DB::select('select * from subarea where area_id = :id', ['id' => $request->id]);
        */
        $area = Area::findOrFail($request->id);
        $area->delete();

        return to_route('area.index');
    }

}
