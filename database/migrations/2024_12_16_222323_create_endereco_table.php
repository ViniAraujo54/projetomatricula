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
       
        Schema::create('endereco', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cep');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('endereco');
    }
};
