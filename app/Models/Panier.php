<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'paniers';

    protected $fillable =[
        'id_article',
        'id_client',
        'nom_article',
        'quantiter',
        'prix_article',
        'image_article'
    ];
}
