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

        Schema::create('Unidades', function (Blueprint $table) 
        {
            $table->increments('id')->primary();
            $table->string('nome_fantasia');
            $table->string('razao_social')->unique();
            $table->timestamp('cnpj')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Unidades');
    }
};
