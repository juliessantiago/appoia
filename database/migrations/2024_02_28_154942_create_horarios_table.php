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
        Schema::create('horarios', function (Blueprint $table) { //horários livres 
            $table->id();
            $table->timestamps();
            $table->string('diaSemana'); 
            $table->time('inicioExpediente'); 
            $table->time('fimExpediente'); 
            $table->unsignedBigInteger('id_voluntario');
            $table->foreign('id_voluntario')->references('id')->on('voluntarios')->onDelete('cascade');
            //se um voluntário for deletado, seus horários serão automaticamente deletados
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
