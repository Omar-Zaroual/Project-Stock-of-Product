<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historiquesrt extends Model
{
    protected $primaryKey = ['idsrt'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idsrt',
        'datesortie',
        'qteSortie',
        'numMarcher',
        'fournisseur',
        'serie',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'serie');
    }
}
