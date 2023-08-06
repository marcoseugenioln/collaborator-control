<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Unidade;
use App\Models\Colaborador;

class UnidadeController extends Controller
{	
    public function index()
    {
        $unidades = Unidade::all();
        return view('unidades.index', ['unidades' => $unidades]);
    }
    
    public function show(Unidade $id)
    {
        return view('unidades.show', ['unidade' => $id, 'total_colaboradores' => Colaborador::where('unidade_id', $id->id)->count()]);
    }

    public function create()
    {
        return view('unidades.create');
    }

    public function store()
    {
        $unidade = new Unidade;

        $this->validate(request(), [
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'cnpj' => 'required|unique:Unidades',
        ]);
        
        $unidade->razao_social = request('razao_social');
        $unidade->nome_fantasia = request('nome_fantasia');
        $unidade->cnpj = request('cnpj');

        $unidade->save();
    }
}