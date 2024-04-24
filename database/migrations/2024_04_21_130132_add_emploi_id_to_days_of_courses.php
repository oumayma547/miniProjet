<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
      Schema::table('days_of_courses', function (Blueprint $table) {
          $table->foreignId('emploi_id')->nullable()->constrained()->onDelete('cascade');
      });
  }

  public function down()
  {
      Schema::table('days_of_courses', function (Blueprint $table) {
          $table->dropForeign(['emploi_id']);
          $table->dropColumn('emploi_id');
      });
  }
};
