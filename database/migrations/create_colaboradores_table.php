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
        Schema::create('Colaboradores', function (Blueprint $table) 
        {
            $table->increments('id')->primary();
            $table->foreign('unidade_id')->references('id')->on('Unidades');
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Colaboradores');
    }
};
