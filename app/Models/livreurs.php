<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livreurs extends Model
{
    use HasFactory;
    protected $table = 'livreur';

    protected $fillable = [
        'nom_livreur',
        'prenom_livreur',
        'email_livreur',
        'contact_livreur',
        'piece_livreur',
        'date_piece',
        'ville_livreur',
        'mdp_livreur',
    ];
}
