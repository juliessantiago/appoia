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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('email'); 
            $table->string('senha'); 
            $table->string('cpf');
            $table->string('telefone');
            $table->string('tipo');
            // $table->foreignId('universidade_id')->references('id')->on('universidades')->cascadeOnDelete();
            $table->foreignId('universidade_id')->references('id')->on('universidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
