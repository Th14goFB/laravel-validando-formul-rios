<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());

        return to_route('series.store');
    }

    public function destroy (Request $request)
    {
        $request->session()->flash('mensagem.sucesso', 'Série removida com sucesso');
        Serie::destroy($request->serie);

        return to_route('series.index');
    }
}