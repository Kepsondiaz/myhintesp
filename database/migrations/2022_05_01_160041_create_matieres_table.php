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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_matiere');
            $table->enum('niveau_matiere', ['dut1-dst1','dut2-dst2', 'dic1-licence', 'dic2-master1', 'dic3-master2']);
            $table->enum('semestres', ['Semestre1', 'Semestre2']);
            $table->foreignId('filiere_id')->constrained('filieres');
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
        Schema::dropIfExists('matieres');
    }
};
