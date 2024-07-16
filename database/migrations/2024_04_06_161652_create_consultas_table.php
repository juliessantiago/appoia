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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('status');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->text('link')->nullable();
            $table->unsignedBigInteger('id_voluntario');
            $table->unsignedBigInteger('id_aluno');
            $table->foreign('id_voluntario')->references('id')->on('voluntarios')->onDelete('cascade');
            $table->foreign('id_aluno')->references('id')->on('alunos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
