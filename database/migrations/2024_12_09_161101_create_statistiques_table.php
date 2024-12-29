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
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('matche_id')->constrained();
            $table->foreignId('joueur_id')->constrained();
            $table->integer('buts');
            $table->integer('passes_decisives');
            $table->integer('tirs_ciblés');
            $table->integer('tirs_rateés');
            $table->integer('tirs_au_but');
            $table->integer('cartons_rouges');
            $table->integer('cartons_jaunes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistiques');
    }
};
