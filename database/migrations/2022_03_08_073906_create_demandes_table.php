<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genre')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('nom_pere')->nullable();
            $table->string('nom_mere')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('acte_naissance')->nullable();
            $table->string('photo_identite')->nullable();
            $table->string('profession')->nullable();
            $table->string('photo_profession')->nullable();
            $table->string('quartier')->nullable();
            $table->string('rue')->nullable();
            $table->string('porte')->nullable();
            $table->string('taille')->nullable();
            $table->string('teint')->nullable();
            $table->string('couleur_cheveux')->nullable();
            $table->string('signe_particuliere')->nullable();
            $table->date('date_demande')->nullable();
            $table->string('contact')->nullable();
            $table->string('piece_tuteur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
