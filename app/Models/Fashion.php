<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fashion extends Model
{
    use HasFactory;
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
        'isfashion',
    ];
}
