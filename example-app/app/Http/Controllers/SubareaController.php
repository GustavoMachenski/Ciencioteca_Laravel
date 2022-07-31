<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Subarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubareaController extends Controller
{
    public function index (){

        $query = DB::table('subarea')
             ->join('area', 'subarea.area_id', '=', 'area.id')
             ->select('subarea.id','subarea.nome_subarea','subarea.descricao_subarea','area.nome_area')
             ->get();

        return view('subarea/subarea')->with('subareas', $query);
    }

    public function create(){

        $areas = Area::all();

        return view('subarea/cadastrar')->with('areas', $areas);
    }

    public function store(Request $request){
        /** 
         * TODO: refatorar esse metodo
        */
        $nome = $request->get('nome_subarea');
        $descricao = $request->get('descricao_subarea');
        $area_id = $request->get('area_id');
        $subarea = new Subarea();
        $subarea->nome_subarea = $nome;
        $subarea->descricao_subarea = $descricao;
        $subarea->area_id = $area_id;
        $subarea->save();

        return to_route('subarea.index');
    }

    public function edit($id){

        $subarea = Subarea::findOrFail($id);

        $areas = Area::all();

        return view('subarea/editar')->with('areas', $areas)->with('subarea', $subarea);
    }

    public function update(Request $request){
        
        Subarea::findOrFail($request->id)->update($request->all());

        return to_route('subarea.index');
    }

    public function delete(Request $request){
        $subarea = Subarea::findOrFail($request->id);
        $subarea->delete();

        return to_route('subarea.index');
    }
}
