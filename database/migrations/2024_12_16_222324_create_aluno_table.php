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

    Schema::create('aluno', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->date('data_nascimento');
        $table->string('pai');
        $table->string('mae');
        $table->string('sexo');
        $table->string('rg');
        $table->string('cpf')->unique();
        $table->string('telefone_residencial')->nullable();
        $table->string('telefone_celular');
        $table->string('email');
        $table->string('tipo_sanguineo');
        $table->string('deficiencia');
        $table->string('estado_civil');
        $table->string('curso');
        $table->string('status_documento')->default('Pendente');
        $table->timestamps();
         $table->unsignedBigInteger('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('endereco');

    });
}
public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
           
            
};