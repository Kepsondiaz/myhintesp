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
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id();
            $table->string('url_fichier');
            $table->string('nom_fichier');
            $table->integer('size_fichier');
            $table->enum('semestres', ['Semestre1', '']);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fichiers');
    }
};
