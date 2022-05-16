<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filieres_matieres', function (Blueprint $table) {
            $table->integer('filiere_id')->;
            $table->integer('matiere_id');
            $table->foreignId('filiere_id')->constrained('filieres');
            $table->foreignId('matiere_id')->constrained('matieres');
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
        Schema::dropIfExists('filieress_matieres');
    }
};
