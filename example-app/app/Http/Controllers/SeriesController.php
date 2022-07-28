<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Teste',
            'Villa',
            'West',
            'Electron'
        ];

        return view('listar-series', compact('series'));
    }
}
