<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
      Schema::table('seances', function (Blueprint $table) {
          $table->unsignedBigInteger('days_of_course_id');
          $table->foreign('days_of_course_id')->references('id')->on('days_of_courses')->onDelete('cascade');
      });
  }

  public function down()
  {
      Schema::table('seances', function (Blueprint $table) {
          $table->dropForeign(['days_of_course_id']);
          $table->dropColumn('days_of_course_id');
      });
  }
};
