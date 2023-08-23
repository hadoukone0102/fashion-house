<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;

    protected $table="produits";

    protected $fillabe=[
        'iduser',
        'numero_commande',
        'nom_produit',
        'prix',
        'prod',
        'description'
    ];
}
