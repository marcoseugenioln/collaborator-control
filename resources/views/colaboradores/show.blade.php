@extends('layouts.master')

@section('content')

    <div class="card" style="width: 270px;margin: 5px">
        <div class="card-block">
            <h3 class="card-title">{{ $colaborador->nome }}</h3>
            <p class="card-text">Email: {{ $colaborador->email }}</p>
            <p class="card-text">CPF: {{ $colaborador->cpf }}</p>
            <p class="card-text">Unidade: {{ Unidade::where('id', $colaborador->unidade_id)->razao_social }}</p>
        </div>
    </div>

@endsection