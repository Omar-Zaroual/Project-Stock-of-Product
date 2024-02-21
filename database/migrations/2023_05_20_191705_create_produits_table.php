<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->string('serie');
            $table->string('désignation');
            $table->string('disponible');
            $table->string('unité');
            $table->integer('stockMin');
            $table->foreignId('numCat')->constrained('categories');
            $table->primary('serie');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
