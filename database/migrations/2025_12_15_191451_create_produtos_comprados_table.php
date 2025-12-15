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
        Schema::create('produtos_comprados', function (Blueprint $table) {
            $table->id();
                $table->string('imagem');
                $table->unsignedBigInteger('id_produto');
                $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');
                $table->unsignedBigInteger('id_usuario');
                $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
                $table->integer('quantidade');
                $table->decimal('preco',9,2);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_comprados');
    }
};
