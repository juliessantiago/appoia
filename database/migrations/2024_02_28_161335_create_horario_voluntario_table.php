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
        Schema::create('horario_voluntario', function (Blueprint $table) {
            $table->foreignId('voluntario_id')
            ->references('id')->on('voluntarios')
            ->cascadeOnDelete(); 
            $table->foreignId('horario_id')
            ->references('id')->on('horarios')
            ->cascadeOnDelete(); 
            $table->primary(['voluntario_id', 'horario_id']); //as duas serão chave primária
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horario_voluntario');
    }
};
