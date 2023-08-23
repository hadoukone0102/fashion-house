<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fashion_model extends Model
{
 
    protected $table = 'mainuser'; 

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'contact',
        'ville',
        'quartier',
        'mdp',
        'piece',
        'date_pem',
        'img_entreprise',
        'certif_red',
        'annee_exp',
        'domaine',
        'commentaire',
    ];
}

