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
            $table->text('data_nascimento');
            $table->text('responsavel')->nullable();    
            $table->text('sexo');
            $table->text('name');
            $table->text('linkAutorizacao')->nullable(); 
            $table->boolean('status')->nullable(); 
            $table->string('email')->unique();
            $table->string('password');
            $table->date('proxConsulta')->nullable(); 
            $table->unsignedBigInteger('id_escola');
            $table->foreign('id_escola')->references('id')->on('escolas')->onDelete('cascade');
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
