@extends('layouts.master')

@section('content')

<div class="card" style="width: 270px;margin: 5px">
    <div class="card-block">
        <h3 class="card-title">{{ $unidade->nome_fantasia }}</h3>
        <p class="card-text">Razão Social: {{ $unidade->razao_social }}</p>
        <p class="card-text">CNPJ: {{ $unidade->cnpj }}</p>
        <p class="card-text">Colaboradores: {{ $total_colaboradores }}</p>
    </div>
</div>

@endsection