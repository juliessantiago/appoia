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
        Schema::create('assunto_voluntario', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('voluntario_id')
            ->constrained()
            ->onDelete('cascade'); 
            $table->foreignId('assunto_id')
            ->references('id')->on('assuntos')
            ->cascadeOnDelete(); 
            $table->primary(['voluntario_id', 'assunto_id']); //as duas serão chave primária

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assunto_voluntario');
    }
};
