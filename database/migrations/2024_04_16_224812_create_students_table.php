<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_naissance');
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('email');
            $table->string('telephone');
            $table->string('niveau_etudes');
            $table->string('specialisation');
            $table->string('annee_etudes');
            $table->string('statut_inscription');
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
        Schema::dropIfExists('students');
    }
}
