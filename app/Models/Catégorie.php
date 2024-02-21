<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catégorie extends Model
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('numCat');
            $table->string('nomCat');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
