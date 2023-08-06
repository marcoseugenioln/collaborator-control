@extends('layouts.master')

@php
use App\Models\Unidade;
$unidades = new Unidade;
@endphp

@section('content')

    <div class="card" style="width: 270px;margin: 5px">
        <div class="card-block">
            <h3 class="card-title">{{ $colaborador->nome }}</h3>
            <p class="card-text">Email: {{ $colaborador->email }}</p>
            <p class="card-text">CPF: {{ $colaborador->cpf }}</p>
            <p class="card-text">Unidade: {{ $unidades->where('id', $colaborador->unidade_id)->razao_social }}</p>
        </div>
    </div>

@endsection