<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historiqueert extends Model
{
    protected $primaryKey = ['idert'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idert',
        'dateentrer',
        'numMarcher',
        'fournisseur',
        'qteCommander',
        'qteLivrer',
        'serie',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'serie');
    }
}
