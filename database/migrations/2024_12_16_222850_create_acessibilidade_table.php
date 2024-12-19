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
        Schema::create('acessibilidade', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_deficiencia');
            $table->boolean('prioridade_matricula');
            $table->text('descricao')->nullable();

            $table->unsignedBigInteger('category_id');

            $table->unsignedBigInteger('aluno_id');

            $table->foreign('aluno_id')->references('id')->on('aluno');
            $table->timestamps();

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acessibilidade');
    }
};
