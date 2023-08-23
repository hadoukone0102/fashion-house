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
        Schema::create('livreur', function (Blueprint $table) {
            $table->id();
            $table->string('nom_livreur');
            $table->string('prenom_livreur');
            $table->string('email_livreur')->unique();
            $table->string('contact_livreur')->unique();
            $table->string('piece_livreur');
            $table->date('date_piece');
            $table->string('ville_livreur');
            $table->string('mdp_livreur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livreur');
    }
};
