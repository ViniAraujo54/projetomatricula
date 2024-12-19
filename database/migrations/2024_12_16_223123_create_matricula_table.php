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
        Schema::create('matricula', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->boolean('ativo');

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('aluno');

            $table->unsignedBigInteger('turmas_id');
            $table->foreign('turmas_id')->references('id')->on('turmas');

            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');

            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professor');

            $table->timestamps();

    });
}

    public function down(): void
    {
        Schema::dropIfExists('matricula');
    }
};
