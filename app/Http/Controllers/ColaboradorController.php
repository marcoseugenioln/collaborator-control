<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Colaborador;
use App\Models\Unidade;

class ColaboradorController extends Controller
{	

    public function index()
    {
        $colaboradores = Colaborador::all();
        return view('colaboradores.index', ['colaboradores' => $colaboradores]);
    }
    
    public function show(Colaborador $id)
    {
        return view('colaboradores.show', ['colaborador' => $id]);
    }

    public function create()
    {
        return view('colaboradores.create');
    }

    public function store()
    {
        $colaborador = new Colaborador;

        $this->validate(request(), [
            'cnpj' => 'required',
            'nome' => 'required',
            'email' => 'required|unique:Colaboradores',
            'cpf' => 'required|unique:Colaboradores',
        ]);

        $colaborador->unidade_id = Unidade::where('cnpj', request('cnpj'))->first()->id;
        $colaborador->nome = request('nome');
        $colaborador->email = request('email');
        $colaborador->cpf = request('cpf');

        $colaborador->save();
    }
}