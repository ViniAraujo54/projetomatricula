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
    { Schema::create('professor', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('sobrenome');
        $table->string('email');
        $table->string('senha');
        $table->boolean('ativo');
        $table->string('Telefone');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professor');
    }
};
