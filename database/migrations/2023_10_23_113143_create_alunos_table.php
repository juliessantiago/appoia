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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nome');
            $table->text('dataNascimento');
            $table->text('email');
            $table->text('senha'); 
            $table->text('responsavel');    
            // $table->text('escola_id');
            $table->text('cidade');
            $table->text('telefone');
            $table->text('rua');
            $table->text('numero');
            $table->text('bairro');
            $table->text('sexo');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
