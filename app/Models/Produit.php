<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $primaryKey = 'serie';
    public $incrementing = false;

    protected $fillable = [
        'serie',
        'désignation',
        'disponible',
        'unité',
        'stockMin',
        'numCat',
    ];

    public function catégorie()
    {
        return $this->belongsTo(Catégorie::class, 'numCat');
    }

    public function historiquesrts()
    {
        return $this->hasMany(HistoriqueSrt::class, 'serie');
    }

    public function historiqueerts()
    {
        return $this->hasMany(HistoriqueErt::class, 'serie');
    }
}
