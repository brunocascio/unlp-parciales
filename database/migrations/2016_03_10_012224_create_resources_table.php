<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{

  protected static $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('resources', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('slug')->unique();
      $table->text('description')->nullable();
      $table->date('resource_date')->index();
      $table->tinyInteger('number')->index()->nullable();
      $table->boolean('published')->default(0);
      $table->timestamps();
      $table->integer('course_id')->unsigned();
      $table->integer('teacher_id')->unsigned()->nullable();
      $table->integer('approved_by')->unsigned()->nullable();
      $table->integer('type_id')->unsigned();

      $table->foreign('course_id')
      ->references('id')
      ->on('courses');
      
      $table->foreign('teacher_id')
      ->references('id')
      ->on('teachers');

      $table->foreign('type_id')
      ->references('id')
      ->on('types');

      $table->foreign('approved_by')
      ->references('id')
      ->on('users')
      ->onDelete('set null');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('resources');
  }
}
