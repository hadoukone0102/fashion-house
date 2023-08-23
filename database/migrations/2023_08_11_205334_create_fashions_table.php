<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fashions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string(('email'))->unique();
            $table->string('contact');
            $table->string('ville');
            $table->string('quartier');
            $table->string('mdp');
            $table->string('piece');
            $table->date('date_pem');
            $table->string('img_entreprise');
            $table->string('certif_red');
            $table->string('annee_exp');
            $table->string('domaine');
            $table->string('commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashions');
    }
};
