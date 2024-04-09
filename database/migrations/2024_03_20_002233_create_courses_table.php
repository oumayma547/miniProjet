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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('cat_id');
            $table->foreign(('cat_id'))->references('id')->on('cats');
            $table->unsignedBigInteger('trainer_id');
            $table->foreign(('trainer_id'))->references('id')->on('trainers');
            $table->string('name');
            $table->string('small_desc');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
