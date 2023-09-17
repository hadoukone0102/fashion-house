<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    use HasFactory;

    protected $table = "views";

    protected $fillabe = [
        'id_client',
        'prod_id',
        'prod_iduser',
        'prod_price',
        'img_prod',
        'image'
    ];
}
