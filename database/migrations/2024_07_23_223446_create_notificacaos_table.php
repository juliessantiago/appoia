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
        Schema::create('notificacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->morphs('notifiable'); //tipo morphs indica que esse campo suporta relação polimórfica
            //duas colunas serão geradas na tabela: notifiable_id, notifiable_type
            $table->text('mensagem');
            $table->boolean('lida')->default(false);
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacoes');
    }
};
