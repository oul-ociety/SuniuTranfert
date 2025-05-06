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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('montant', 15, 2);
            $table->date('date');
            $table->string('numero_debiteur');
            $table->string('numero_destinataire');
            $table->uuid('compte_source_id');
            $table->uuid('compte_destinataire_id');
            $table->string('statut');
        
            $table->foreign('compte_source_id')->references('id')->on('comptes')->onDelete('cascade');
            $table->foreign('compte_destinataire_id')->references('id')->on('comptes')->onDelete('cascade');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
