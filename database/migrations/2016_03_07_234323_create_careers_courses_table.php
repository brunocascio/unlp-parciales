<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersCoursesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('careers_courses', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('career_id')->unsigned();
      $table->integer('course_id')->unsigned();

      $table->foreign('career_id')
        ->references('id')
        ->on('careers')
        ->onDelete('cascade');

      $table->foreign('course_id')
        ->references('id')
        ->on('courses')
        ->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('careers_courses');
  }
}
