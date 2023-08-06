<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Desempenho;
use App\Models\Colaborador;
use App\Models\Cargo;

class DesempenhoController extends Controller
{	
    public function index()
    {
        $desempenhos = Desempenho::all()->sortByDesc('nota_desempenho');
        return view('desempenho.index', ['desempenhos' => $desempenhos]);
    }
    
    public function show(Desempenho $id)
    {
        return view('desempenho.show', ['desempenho' => $id]);
    }

    public function create()
    {
        return view('desempenho.create', ['cargos' => Cargo::all()]);
    }

    public function store()
    {
        $desempenho = new Desempenho;

        $this->validate(request(), [
            'nota_desempenho' => 'required',
            'cargo_id' => 'required',
            'cpf' => 'required',
        ]);

        $desempenho->cargo_id = request('cargo_id');
        $desempenho->colaborador_id = Colaborador::where('cpf', request('cpf'))->first()->id;
        $desempenho->nota_desempenho = request('nota_desempenho');

        $desempenho->save();
    }
}