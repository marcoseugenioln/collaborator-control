<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Cargos', function (Blueprint $table) 
        {
            $table->increments('id')->primary();
            $table->string('cargo')->unique();
        });

        DB::table('Cargos')->insert(array('cargo' => 'Desenvolvedor'));
        DB::table('Cargos')->insert(array('cargo' => 'Tech Lead'));
        DB::table('Cargos')->insert(array('cargo' => 'Analista de Markeing'));
        DB::table('Cargos')->insert(array('cargo' => 'Diretor de Produto'));
        DB::table('Cargos')->insert(array('cargo' => 'Diretor de Tecnologia'));
        DB::table('Cargos')->insert(array('cargo' => 'Gerente de Produto'));
        DB::table('Cargos')->insert(array('cargo' => 'Gerente de Tecnologia'));
        DB::table('Cargos')->insert(array('cargo' => 'Analista de Compras'));
        DB::table('Cargos')->insert(array('cargo' => 'Engenheiro de Software'));
        DB::table('Cargos')->insert(array('cargo' => 'Engenheiro de Dados'));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cargos');
    }
};
