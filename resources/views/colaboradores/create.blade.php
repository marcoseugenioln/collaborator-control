@extends('layouts.master')

@section('content')

<div class="registra_colab_div">

    <form method="post" action="/colaboradores" enctype="multipart/form-data">

        <label>CNPJ</label><input name="cnpj" type="text"><hr>
        <label>Nome</label><input name="nome" type="text"><hr>
        <label>CPF</label><input name="cpf" type="text"><hr>
        <label>Email</label><input name="email" type="text"><hr>

        <button type="submit">Registrar</button>
    </form>
    
</div>

@endsection