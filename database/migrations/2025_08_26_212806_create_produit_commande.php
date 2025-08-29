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
        Schema::create('produits_commande', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('produit_id')->constrained();
              $table->foreignId('commande_id')->constrained();
                $table->integer('quantite_id');
                  $table->integer('prix_vente_unitaire');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits_commande');
    }
};
