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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('imagem',255);
            $table->string('nome',100);
            $table->text('descricao');
            $table->decimal('preco',9,2);

            $table->unsignedBigInteger('id_categoriaProdutos');
            $table->foreign('id_categoriaProdutos')->references('id')->on('categoria_produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
