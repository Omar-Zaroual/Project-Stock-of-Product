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
        Schema::create('historiquesrts', function (Blueprint $table) {
            $table->string('idsrt');
            $table->date('datesortie');
            $table->integer('qteSortie');
            $table->string('bénéficiaire');
            $table->string('numMarcher');
            $table->string('fournisseur');
            $table->string('serie');
            $table->foreign('serie')->references('serie')->on('produits');
            $table->primary(['idsrt', 'serie']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiquesrts');
    }
};
