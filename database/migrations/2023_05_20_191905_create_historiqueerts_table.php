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
        Schema::create('historiqueerts', function (Blueprint $table) {
            $table->string('idert');
            $table->date('dateentrer');
            $table->string('numMarcher');
            $table->string('fournisseur');
            $table->integer('qteCommander');
            $table->integer('qteLivrer');
            $table->string('serie');
            $table->foreign('serie')->references('serie')->on('produits');
            $table->primary(['idert', 'serie']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiqueerts');
    }
};
