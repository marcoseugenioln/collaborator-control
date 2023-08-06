@extends('layouts.master')

@section('content')

<div class="registra_unidade_div">

    <form method="post" action="/unidades" enctype="multipart/form-data">

        <label>Nome Fantasia</label><input name="nome_fantasia" type="text"><hr>
        <label>Razão Social</label><input name="razao_social" type="text"><hr>
        <label>CNPJ</label><input name="cnpj" type="text"><hr>

        <button type="submit">Registrar</button>
    </form>
    
</div>

@endsection